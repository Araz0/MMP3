# MMP3
this is a project planned to act as a gallery and display of all the projects from the MMA &amp; MMT masters and bachelor degrees at the FHS

## setup
### apache & php server config.
encrease the allowed file size to upload files
edited apache2.conf to allow Allowoverride All and:
`sudo a2enmod rewrite`
and changed upload_max_filesize value in php.ini
