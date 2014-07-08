var initializeNavBarDropdowns = function () {
  $(".navigation-bar-module").mouseleave(function () {
    $(".top-bar-submenu-wrapper").addClass("closed");
    $(".top-bar-horizontal-submenu").each(function () {
      $(this).addClass("closed");
    });
  });
  
  $(".top-bar-horizontal-submenu").each(function (index) {
    var that = this;
    var buttonId = "#" + $(that).data("button-id");
    
    // var leftOffset = $(buttonId).offset().left - ($(buttonId).width() / 2);
    var leftOffset = $("img.logo").offset().left - parseInt($(that).find("a").first().css("padding-left"),10);
    $(that).css("padding-left", leftOffset);

    $(buttonId).mouseenter(function () {
      $(that).siblings().addClass("closed")
      $(that).parent().removeClass("closed");
      $(that).removeClass("closed");
    });
  });
};

var redirectFooterLinks = function () {
  $(document).ready(function () {
    $("#about-footer-links").on("click", "a", function (event) {
      targetId = $(this).data("destination-id")
    })
  })
}

console.log("executing in custom.js")

$(document).ready(function () {
  console.log("executing in custom.js document.ready")
  initializeNavBarDropdowns();
  redirectFooterLinks();
})