<?php
$id="make";
$title = "Make";
$description = "Things we've made";
require_once("_partials/header.php");
?>

      %section
        %h1 Make <span>(It's What We Do)</span>

        %p Think of any social media platform or piece of digital technology. Chances are we've already made something awesome with it. Because that's what we do. We Make Awesome Sh.
        %p Mobile, web, outdoor, interactive, hardware. Hell, we've even hacked a fish. Literally.
        %p Here are some examples of the awesome work we've made:

        %ul.grid.case-studies.clearfix
          <?php
            foreach (get_content("projects") as $slug => $project) {
            $project = set_default($project, "image", "cat.gif");
            $project->slug = $slug;
          ?>

          %li.case-study{ data:{tags: "<?= $project->tags; ?>" } }
            %a.image{ href: "<?=$base_url;?>make/<?= $project->slug ?>"}
            %a{ href: "<?=$base_url;?>make/<?= $project->slug ?>" }
              .img{ style: "background-image:url(<?=$base_url;?>assets/img/<?= $project->image;?>)"}
              .info
                %h4.title <?= $project->title; ?>
                <?php if (isset($project->subtitle)) { ?>

                %h5.subtitle <?= $project->subtitle; ?>

                <?php } ?>

          <?php } ?>

<?php require_once("_partials/footer.php"); ?>