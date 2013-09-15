<?php
$id="make";

require_once("_partials/header.php");
?>

    %section
      %h1 Make

      %ul.grid.case-studies
        <?php
          $projects = get_content("projects");
          foreach ($projects as $project) {
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

    %footer#footer
      %nav
        %ul
          %li
            %a{ href: "", title: ""}
              %span.icon.blog
              Read our blog
          %li
            %a{ href: "", title: ""}
              %span.icon.facebook
              Like us on Facebook
          %li
            %a{ href: "", title: ""}
              %span.icon.twitter
              Follow us on Twitter
          %li
            %a{ href: "", title: ""}
              %span.icon.contact
              Get in touch



    -#
    %script{ src: "assets/js/libs/jquery-1.7.1.min.js" }
    -# scripts concatenated and minified via build script
    %script{ src: "assets/js/plugins.js" }
    %script{ src: "assets/js/script.js" }
    -# end scripts

    -#
      Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
      mathiasbynens.be/notes/async-analytics-snippet

    :javascript
      var _gaq=[['_setAccount','#{ga_key}'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
