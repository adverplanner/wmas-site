/* Author:

*/
function random_sort (thing)
{
      return (0.5 - Math.random() );
}



$(document).ready(function() {
  switch ($("body").attr("id")) {
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

      showFeatured();

      break;
  }
})