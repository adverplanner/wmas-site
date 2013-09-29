/* Author:

*/
if (window.history.pushState === undefined) {
  window.history.pushState = function(){};
  window.history.replaceState = function(){};
}
function random_sort (thing)
{
      return (0.5 - Math.random() );
}

$(window).on("popstate",function(e){
  if (e.originalEvent.state)
    fetchPage(e.originalEvent.state.current, true);
})

switchSwearing = function(swearing) {
  storage.set("swearing", swearing);
  if (swearing === "no") {
    $("body").removeClass("has-swearing").addClass("has-no-swearing");
  } else {
    $("body").removeClass("has-no-swearing").addClass("has-swearing");
  }
};

switchSwearing(storage.get("swearing"));

show_tag = function(tag) {
  //$('h1').html("Make <span>("+tag+")</span>");
  $(".case-study").each(function() {
    var tags = $(this).data("tags").split(" ");
    if ($.inArray(tag, tags) > -1) {
    } else {
      $(this).remove();
    }
  })
}

pageReady = function(id) {
   $('.swear-switcher').click(function() {
    switchSwearing($(this).data("swearing"));
  });
  switch (id) {
    case "make":
      var pathname = window.location.pathname;
      var path = pathname.split("/");
      if (path.length > 2) {
        show_tag(path[3]);
      }
      break;

    case "home":

      var hidden = $('.hidden-project');
      hidden.sort(random_sort);

      // randomise order of hidden
      var i = 0;
      var featuredImage = $(".main-featured-project");
      var showFeatured = function() {
        var project = $(hidden[i]);
        featuredImage.find("a").attr("href",project.find("a").attr("href") );
        featuredImage.find(".info").html(project.find(".info").html());
        featuredImage.css("background-image", project.css("background-image"));
        i++;
        if (i >= hidden.length) i=0;
      }

      $(window).blur(function() {
        showFeatured();
      });

      showFeatured();

      break;
  }
}

window.history.replaceState({previous:undefined, current:window.location.pathname}, window.title, window.location.pathname);



show_404_page = function() {

  var BV = new $.BigVideo();
  BV.init();
  BV.show('http://wmasmain.s3.amazonaws.com/404.mp4');
}

fetchPage = function(url, fromPop) {
  if (url === "#") return;
  var newID = url.split("/")[1];
  if (newID === "") {
    newID = "home";
  }
  var currentSection = $("body").find("#content");
  $("body").addClass("loading");
  var delay = 700;
  if (newID === "make" && $("body").attr("id") === "make")
    delay = 0;

  var t = setTimeout(function() {

    $("#content").load(url+" #content > *", function() {
      $(window).scrollTop(0);
      $("body").attr("id",newID );
      setTimeout(function() {
        $("body").removeClass("loading");
        setTimeout(function() {
          if (fromPop !== true)
            window.history.pushState({previous:window.location.pathname, current:url}, url, url);
            pageReady(newID);
        }, 800);
      },1);
    });

  }, delay);

  return;
};

$(document).ready(function() {

  $(window).on("keypress", function(e) {
    if (e.which == 105) {
      $('html').toggleClass("invert");
    }
  });
  console.log("Try pressing i, go on, just try it...");

  $("a:not(.toggle-categories)").live("click", function(e) {
    $("body").removeClass("browse-categories");
    var href = $(this).attr("href");
    if (href.indexOf("http") > -1) {
      window.open(href);
    } else {
      fetchPage(href);
    }
    e.preventDefault();
  })

  $('.toggle-categories').live("click",function(e) {
    $("body").toggleClass("browse-categories");
    e.preventDefault();
  })



  pageReady($("body").attr("id"));

})