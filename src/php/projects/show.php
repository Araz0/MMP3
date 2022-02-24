
<!DOCTYPE html>
<html lang="en">

<?php 
    $pagetitle = "show projects";
    include "../components/head.php"; 
?>

<body>
    <div class="artplayer" id="artplayer-app"></div>
</body>
<script src="/js/artplayer.js"></script>
<script>
    var art = new Artplayer({
        container: '#artplayer-app',
        url: '/media/NAK.mp4',
    });
</script>
</html>
