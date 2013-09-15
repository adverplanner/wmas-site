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


  %body#home

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



    %section.main-featured-project{ style: "background-image: url(#{project_image}); "}
      .info
        %h1.title #{project_title}
        .subtitle #{project_subtitle}



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
