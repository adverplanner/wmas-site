<?php
if (!isset($slug)) {
  $slug = "calvin-harris-18-months-mobile-app";
}
$id = $slug;

$project = get_project($slug);

$title = $project->title." ".$project->subtitle;
$description = strip_tags($project->content);
$image = "/assets/img/".$project->image;

require("_partials/header.php");
?>

      %section#single_project
        %a#back{ href: "<?=$base_url;?>make" } Back To Projects
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
          .img{ style: "background-image:url(<?=$base_url;?>assets/img/<?= $project->image; ?>)" }
        %ul.tags.clearfix
          <?php foreach (explode(" ",$project->tags) as $tag) {?>

          %li.tag
            %a.block{ href: "<?=$base_url;?>make/category/<?= urlencode($tag);?>" } <?= $tag; ?>

          <?php } ?>

        <?= $project->content; ?>



<?php require("_partials/footer.php"); ?>