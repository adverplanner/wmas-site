<?php
$slug = "calvin-harris-18-months-mobile-app";
$id = $slug;
require_once("_partials/header.php");
$project = get_project($slug);
?>

    %section#single_project
      #title_section
        .stretch
        .content
          %h1 <?= $project->title; ?>

          %h2 <?= @$project->subtitle; ?>

          %a.block#view_project{ href: "" } View Project
      #image_section
        .stretch
        .img{ style: "background-image:url(/assets/img/<?= $project->image; ?>)" }
      %ul.tags.clearfix
        <?php foreach (explode(" ",$project->tags) as $tag) {?>

        %li.tag
          %a.block{ href: "" } <?= $tag; ?>

        <?php } ?>

      <?= $project->content; ?>



<?php require_once("_partials/footer.php"); ?>