<?php
$id="home";

require_once("_partials/header.php");
?>


    %section.main-featured-project{ style: "background-image: url(#{project_image}); "}
      .info
        %h1.title #{project_title}
        .subtitle #{project_subtitle}


<?php require_once("_partials/footer.php"); ?>