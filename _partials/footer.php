

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
