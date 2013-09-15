<?php
$id="awesome";

require_once("_partials/header.php");
?>

    %section
      %h1 Awesome

      %p <b>Trust us we're awesome.</b> It's a pretty bold statement. It's also a pretty awesome word. So what makes us awesome and how do you know we're not just talking sh?

      %p We live by three principles:

      %ul.principles
        %li
          %img{ src: "http://placekitten.com/189/240"}
          %p The digital world is there to be played with. The web is our playground. APIs and code are our swings.
        %li
          %img{ src: "http://placekitten.com/189/240"}
          %p We're not a traditional agency. So we won't ever behave like one. We’re an agile collective of specialists. Honest. Hard working. And driven by delivering you awesome sh.
        %li
          %img{ src: "http://placekitten.com/189/240"}
          %p We do it because we enjoy it. Making clients look awesome makes us feel awesome.

      %p We’ve also worked with some awesome people:

      %ul.grid.clients

        <?php foreach (get_content("clients") as $client) { ?>

        %li.client
          %a.image{ href: "/make/<?= $client; ?>"}
          .img{ style: "background-image:url(assets/img/clients/<?= $client;?>.png)"}

        <?php } ?>

<?php require_once("_partials/footer.php"); ?>