/* Author:

*/


var caseStudySummaryTPL = "<li class='case-study'>"+
                            "<a class='image' href=''>"+
                            "</a>"+
                            "<div class='img' style='background-image:url(assets/img/{image})'></div>"+
                            "<div class='info'>"+
                              "<h4 class='title'>{title}</h4>"+
                              "<h5 class='subtitle'>{subtitle}</h5>"+
                            "</div>"+
                          "</li>";

var renderCaseStudies= function() {
  $.getJSON("content/projects.json", function(data) {
    for (var i = 0; i < data.length; i++) {
      var obj = data[i];
      var html = caseStudySummaryTPL;
      html = html.replace("{title}", obj.title);
      html = html.replace("{image}", obj.image);
      html = html.replace("{subtitle}", obj.subtitle);

      html = $(html);
      if (obj.subtitle == undefined)
        html.find(".subtitle").remove();
      if (obj.image == undefined)
        html.find(".img").css("background-image","url(assets/img/cat.gif)");
      $('.case-studies').append(html);
    }
  });




}

$(document).ready(function() {
  if ($('body').attr("id") === "make") {
    renderCaseStudies();
  }

})


