<?php
$id="we";
$title = "We";
$description = "Who are we and what are we all about?";
require_once("_partials/header.php");
?>

      %section
        %h1 We

        %ul.people.grid.clearfix

          <?php foreach (get_content("people") as $person) { ?>

          %li.person
            %img{ src: "/assets/img/avatars/<?= $person->image; ?>" }
            %h5
              %strong <?= $person->name; ?> <br/>
              %a.username{ href: "http://twitter.com/<?= $person->handle; ?>" } @<?= $person->handle; ?>

          <?php } ?>

        <?= get_markdown('we'); ?>

<?php require_once("_partials/footer.php"); ?>