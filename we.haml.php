<?php
$id="we";

require_once("_partials/header.php");
?>

    %section
      %h1 We

      %ul.people.grid

        <?php foreach (get_content("people") as $person) { ?>

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

<?php require_once("_partials/footer.php"); ?>