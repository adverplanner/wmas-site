<?php
$id="home";
$title = "WMAS";
$description = "It's what we do.";


require_once("_partials/header.php");
?>

      <?php
      $featured = get_content("featured");
      foreach ($featured as $slug => $project) {
      ?>

      %section.hidden-project{  style: "background-image: url(/assets/img/featured/<?= $project->image; ?>); " }
        %a.info{ href: "<?= $slug; ?>" }
          %h1.title <?= $project->title; ?>

          .subtitle <?= $project->subtitle; ?>

      <?php } ?>

      %section.main-featured-project
        %a.info{ href: "" }
          %h2.title
          .subtitle


<?php require_once("_partials/footer.php"); ?>