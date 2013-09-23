<?php $base_url = "/new_site/"; ?>

<?php require_once('includes/tools.php');?>
!!! 5
-# Variables for social metadata and analytics
- title = "<?=@$title;?> - We Make Awesome Sh"
- description = "<?=addslashes(@$description);?>"
- share_image = "<?=@$image;?>"
- ga_key = "UA-XXXXX-X"
- url = "http://wmas.it"

- project_image = "<?=$base_url;?>assets/img/jagskills.png"
- project_title = "Jaguar Skills"
- project_subtitle = "Browser Game"


%html.no-js{ lang: "en" }
  %head
    %meta{ charset: "utf-8" }

    %base{ href:"<?=$base_url;?>" }

    -#
      Use the .htaccess and remove these lines to avoid edge case issues.
      More info: h5bp.com/i/378

    %meta{ "http-equiv" => "X-UA-Compatible", content: "IE=edge,chrome=1" }

    %title= title
    %meta{ name: "description", content: description }

    -# Mobile viewport optimized: h5bp.com/viewport
    %meta{ name: "viewport", content: "width=device-width" }

    -# Google fonts
    %link{ rel: "stylesheet", href: "http://fonts.googleapis.com/css?family=Abel" }

    %link{ rel: "stylesheet", href: "<?=$base_url;?>assets/css/style.css" }

    %script{ src: "<?=$base_url;?>assets/js/libs/modernizr-2.5.3.min.js" }

    %meta{ name: "og:url", content: url }
    %meta{ name: "og:title", content: title }
    %meta{ name: "og:description", content: description }
    %meta{ name: "og:type", content: "website" }
    %meta{ name: "og:image", content: share_image }
    %meta{ name: "og:site_name", content: title }

    %meta{ name: "twitter:card", content: "summary" }
    %meta{ name: "twitter:url", content: url }
    %meta{ name: "twitter:title", content: title }
    %meta{ name: "twitter:description", content: description }
    %meta{ name: "twitter:image", content: share_image }
    %meta{ name: "twitter:site", content: "wemakeawesomesh" }
    %meta{ name: "twitter:creator", content: "wemakeawesomesh" }



  %body#<?= $id; ?>

    %header#header
      %nav#main_nav
        %ul
          %li
            %a{ href: "<?=$base_url;?>we", title: ""} We
          %li
            %a{ href: "<?=$base_url;?>make", title: ""} Make
          %li
            %a{ href: "<?=$base_url;?>awesome", title: ""} Awesome
          %li
            %a{ href: "<?=$base_url;?>sh", title: ""} Sh.it

      %nav#categories
        %ul
          %li
            %a.block.toggle-categories{ href: "#"} Show projects by category

      %nav#category_browse
        %ul

          <?php foreach(get_tags() as $tag) { ?>

          %li
            %a.block{ href: "<?=$base_url;?>make/category/<?=urlencode($tag);?>"} <?=$tag;?>

          <?php } ?>

    #content
