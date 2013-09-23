<?php
$id="make";
$title = "Make";
$description = "Things we've made";
require_once("_partials/header.php");
?>

      %section
        %h1 Make

        %ul.grid.case-studies.clearfix
          <?php
            foreach (get_content("projects") as $slug => $project) {
            $project = set_default($project, "image", "cat.gif");
            $project->slug = $slug;
          ?>

          %li.case-study{ data:{tags: "<?= $project->tags; ?>" } }
            %a.image{ href: "/make/<?= $project->slug ?>"}
            %a{ href: "/make/<?= $project->slug ?>" }
              .img{ style: "background-image:url(/assets/img/<?= $project->image;?>)"}
              .info
                %h4.title <?= $project->title; ?>
                <?php if (isset($project->subtitle)) { ?>

                %h5.subtitle <?= $project->subtitle; ?>

                <?php } ?>

          <?php } ?>

<?php require_once("_partials/footer.php"); ?>