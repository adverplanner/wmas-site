<?php
if (!isset($slug)) {
  $slug = "calvin-harris-18-months-mobile-app";
}
$id = $slug;
require("_partials/header.php");
$project = get_project($slug);
?>

    %section#single_project
      %a#back{ href: "/make" } Back To Projects
      #title_section
        .stretch
        .content
          %h1 <?= $project->title; ?>

          <?php if (isset($project->subtitle)) { ?>

          %h2 <?= @$project->subtitle; ?>

          <?php } ?>

          %a.block#view_project{ href: "<?= $project->link; ?>" } View Project
      #image_section
        .stretch
        .img{ style: "background-image:url(/assets/img/<?= $project->image; ?>)" }
      %ul.tags.clearfix
        <?php foreach (explode(" ",$project->tags) as $tag) {?>

        %li.tag
          %a.block{ href: "/make/<?= urlencode($tag);?>" } <?= $tag; ?>

        <?php } ?>

      <?= $project->content; ?>



<?php require("_partials/footer.php"); ?>