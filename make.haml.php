<?php
$id="make";

require_once("_partials/header.php");
?>

    %section
      %h1 Make

      %ul.grid.case-studies.clearfix
        <?php
          foreach (get_content("projects") as $project) {
          $project = set_default($project, "image", "cat.gif");
        ?>

        %li.case-study
          %a.image{ href: ""}
          .img{ style: "background-image:url(assets/img/<?= $project->image;?>)"}
          .info
            %h4.title <?= $project->title; ?>
            <?php if (isset($project->subtitle)) { ?>

            %h5.subtitle <?= $project->subtitle; ?>

            <?php } ?>

        <?php } ?>

<?php require_once("_partials/footer.php"); ?>