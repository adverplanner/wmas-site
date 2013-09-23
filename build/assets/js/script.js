/* Author:

*/
function random_sort (thing)
{
      return (0.5 - Math.random() );
}


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

fetchPage = function(url) {
  if (url === "#") return;
  var newID = url.split("/")[1];
  var currentSection = $("body").find("#content");
  $("body").addClass("loading");
  var delay = 1500;
  if (newID === "make" && $("body").attr("id") === "make")
    delay = 0;

  var t = setTimeout(function() {
    window.history.pushState({}, url, url);
    $("#content").load(url+" #content > *", function() {
      $(window).scrollTop(0);
      $("body").attr("id",newID );
      pageReady(newID);
      setTimeout(function() {
        $("body").removeClass("loading");
      },1);
    }, 1000);

  }, delay);

  return;
};

$(document).ready(function() {

  $("a").live("click", function(e) {
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

  $('.swear-switcher').click(function() {
    switchSwearing($(this).data("swearing"));
  });

  pageReady($("body").attr("id"));

})