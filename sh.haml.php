<?php
$id="sh";
$title = "Sh.it";
$description = "Who's talking sh.it about us?";
require_once("_partials/header.php");
?>

      %section
        %h1 Sh.it

        %p
          %b There's been a lot of sh.it said about us and the projects we’ve done. And not bad sh.it. <i>Awesome</i> sh.it.

        %p Our projects have been featured in:

        %ul.grid.press

          <?php foreach (get_content("press")->outlets as $outlet) { ?>

          %li
            .image
            .img{ style: "background-image:url(<?=$base_url;?>assets/img/press/<?= $outlet->img;?>)"}

          <?php } ?>

        %p We've also won some awards:

        %ul.grid.awards

          <?php foreach (get_content("awards") as $award) { ?>

          %li
            .image
            .img{ style: "background-image:url(<?=$base_url;?>assets/img/awards/<?= $award->image;?>)"}
            .content
              %h4 <?= $award->title; ?>

              %h5 <?= $award->year; ?>

          <?php } ?>

        %p
          %i
            %small * We've also won some actual related awards, but so has everyone.

        %p These awesome people have written stuff about the things we make:

        %ul.coverage

          <?php foreach (get_content("press")->coverage as $press) { ?>

          %li
            %a{ href: "<?= $press->url;?>" }
              %h4 <?= $press->title;?>

              %h5 <?= $press->source;?> <?= $press->date;?>

          <?php } ?>

<?php require_once("_partials/footer.php"); ?>