<?php

require 'vendor/autoload.php'; //Vendor folder should be installed with the composer.json

$provider = new \League\OAuth2\Client\Provider\GenericProvider([
  'clientId'                => $fhsClientId,      // The client ID assigned to you by the provider
  'clientSecret'            => $fhsClientSecret,  // The client password assigned to you by the provider
  'redirectUri'             => $redirectUrl,      // . 'authorized.php',
  'urlAuthorize'            => $authorization_endpoint,
  'urlAccessToken'          => $token_endpoint,
  'urlResourceOwnerDetails' => $userinfo_endpoint,
  'scopes'                  => 'identity openid schedule public'
]);

$accessToken = null;
$resourceOwner = null;

// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {
  // Fetch the authorization URL from the provider; this returns the
  // urlAuthorize option and generates and applies any necessary parameters
  // (e.g. state).
  $authorizationUrl = $provider->getAuthorizationUrl();

  // Get the state generated for you and store it to the session.
  $_SESSION['oauth2state'] = $provider->getState();

  // Redirect the user to the authorization URL.
  header('Location: ' . $authorizationUrl);
  exit;

  // Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || (isset($_SESSION['oauth2state']) && $_GET['state'] !== $_SESSION['oauth2state'])) {
  if (isset($_SESSION['oauth2state'])) {
      unset($_SESSION['oauth2state']);
  }
  exit('Invalid state');
} 
else {
  try {
      // Try to get an access token using the authorization code grant.
      $accessToken = $provider->getAccessToken('authorization_code', [
          'code' => $_GET['code']
      ]);
      // We have an access token, which we may use in authenticated
      // requests against the service provider's API.
      // Using the access token, we may look up details about the
      // resource owner.
      $resourceOwner = $provider->getResourceOwner($accessToken);

  } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
      // Failed to get the access token or user details.
      exit($e->getMessage());
  }
}

?>
