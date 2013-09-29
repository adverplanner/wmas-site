<?php
$id="contact";
$title = "Contact";
$description = "Come on, get in touch, right now!";
require_once("_partials/header.php");
?>
      %section
        %h1 Come on,<br/>get in touch,<br/>right now!




        .contact-section
          %p
            %span.no-swearing If you don't enjoy swearing, email us here:<br/>
            %span.swearing If you enjoy swearing, email us here:<br/>
            %a.contact-method{ href: "mailto:f.ckers@wemakeawesomesh.it"} f<span class='swearing'>u</span><span class='no-swearing'>.</span>ckers@wemakeawesomesh.it

          %p.no-swearing
            %a.swear-switcher{ data:{swearing:"true"}, href:"#" } Enjoy swearing?
          %p.swearing
            %a.swear-switcher{ data:{swearing:"no"}, href:"#" } Don't enjoy swearing?

        .contact-section
          %p
            If you enjoy using a telephone, call us:<br/>
            %a.contact-method{ href: "tel:+442033228619" } +44 20 3322 8619 <span>(UK)</span>
            %br
            %a.contact-method{ href: "tel:+19253579627"} +1 925-357-9627 <span>(US)</span>

        .contact-section
          %p
            If you extract, bottle and sell cat pheromones, please email your details to:<br/>
            %a.contact-method{ href: "mailto:lol@wemakeawesomesh.it"} lol@wemakeawesomesh.it


<?php require_once("_partials/footer.php"); ?>