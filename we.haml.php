<?php require_once('tools.php');?>
!!! 5

/
  TODO:

  + favicon
  + apple-touch-icons
  + fb og data
  + twitter card data
  + google analytics
  + test browsers (mobile?)
  + blog post queued


-# Variables for social metadata and analytics
- title = ""
- description = ""
- ga_key = "UA-XXXXX-X"
- share_image = ""
- url = "http://wmas.it"

- project_image = "assets/img/jagskills.png"
- project_title = "Jaguar Skills"
- project_subtitle = "Browser Game"


%html.no-js{ lang: "en" }
  %head
    %meta{ charset: "utf-8" }

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

    %link{ rel: "stylesheet", href: "assets/css/style.css" }

    %script{ src: "assets/js/libs/modernizr-2.5.3.min.js" }

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


  %body#we

    %header#header
      %nav#main_nav
        %ul
          %li
            %a{ href: "", title: ""} We
          %li
            %a{ href: "", title: ""} Make
          %li
            %a{ href: "", title: ""} Awesome
          %li
            %a{ href: "", title: ""} Sh.it
      %nav#categories
        %ul
          %li
            %a.block{ href: "#"} Show projects by category



    %section
      %h1 We

      %ul.people.grid

        <?php
        $people = get_content("people");
        foreach ($people as $person) {
          ?>

        %li.person
          %img{ src: "assets/img/avatars/<?= $person->image; ?>" }
          %h5
            %strong <?= $person->name; ?> <br/>
            %a.username{ href: "http://twitter.com/<?= $person->handle; ?>" } @<?= $person->handle; ?>

        <?php } ?>

      %p Yep, it's not often that you see those three words next to each other. Even rarer when it's on an agency website. But then we're not about the ordinary. In fact, we're not really an agency. We're a collective. We're about the awesome. And Cardiff, Halo and Cats are all, we'll hope you'll agree, pretty bloody awesome.
      %p We Make Awesome Sh was founded by Tom Gibby and Syd Lawrence. Tom and Syd met at Cardiff university through a shared love of all things gaming, geek and tech. We joked about one day starting our own company, little did we know that one final unexpected element would spark this opportunity – cats.
      %p In early 2011, a few days after the Instagram API was released, we built Instac.at, a comical site that quite literally displayed a live feed of cat images being uploaded to Instagram. After just 24 hours over 30,000 people had visited the site and just a couple of weeks later that number had rocketed, fuelled by coverage from publications such as The Next Web and Mashable. The success of Instac.at lead to us creating Search Instagram – the best place to search for Instagram images online. Less than 9 months later, we've helped a number of brands integrate Instagram into their marketing and social media strategies, as well as increasing our offering to pretty much any piece of digital technology or social media application you can think of.

      %p Just before the summer of 2012, Adam Howard joined us. He's a shit hot developer. I am sure you agree. He makes awesome shit.

      %p Then at the end of the summer of 2012, Paul King joined us. This man tinkers like you wouldn't believe. It's an absolute pleasure to have him on the team. He also makes awesome shit.

      %p We work wherever we want to work. Our bases are our homes. However Syd has been known to work from yachts in Cannes. Tom primarily works at Poke, Adam likes to check out the sights while he works, like Trafalgar Square, quite literally, and Paul is famous for working whenever he god damn likes.

      %p We Make Awesome Shit.



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
