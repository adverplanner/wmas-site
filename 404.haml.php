<?php
$id="error";
$title = "404";
$description = "Page Not Found";
require_once("_partials/header.php");
?>

      %section

      %script{ src: "http://vjs.zencdn.net/4.0/video.js" }
      %script{ src: "<?=$base_url;?>assets/js/bigVideo.js" }

      %script
        $(function() {
        show_404_page();
        });


<?php require_once("_partials/footer.php"); ?>