var main = function() {
  $(".proposal").hide();
  $(".inquiry").show();
  
  $("#dets").click(function() {
    $("#dets").animate({opacity: "0"},100);
    $("#navmenu").animate({left: "0px"});
  });
  
  $("#close").click(function() {
    $("#navmenu").animate({left: "-300px"});
    $("#dets").animate({opacity: "1"},400);
  });
  
  $(".photo").click(function(e) {
    $(".blurcover").removeClass("hidden");
    $(".content").addClass("blurred");
    $("." + e.target.id).removeClass("hidden");
    $("#" + e.target.id + "close").removeClass("hidden");
  });
  
  $(".imageclose").click(function(e) {
    $(".blurcover").addClass("hidden");
    $(".content").removeClass("blurred");
    $("." + e.target.id.substring(0,e.target.id.length - 5)).addClass("hidden");
    $("#" + e.target.id).addClass("hidden");
  });
  
  $(".sqproject").click(function(e) {
    $("." + e.target.id).animate({top: "-100px"}, 300);
  });
  
  $(".closeproj").click(function(e) {
    $("." + e.target.id).animate({top: "-1000px"}, 300);
  });
  
  $(".closedev").click(function(e) {
    $("." + e.target.id).animate({top: "-1000px"}, 300);
  });
  
  $('.contactform').change(function(e) {
    var tempScrollTop = $(window).scrollTop();

    if($('#proposal').is(":checked")){
      $(window).scrollTop(tempScrollTop);
      $(".inquiry").fadeOut();
      $(".proposal").delay(350);
      $(".proposal").fadeIn();
    }
    else if($('#inquiry').is(":checked")){
      $(window).scrollTop(tempScrollTop);
      $(".proposal").fadeOut();
      $(".inquiry").delay(350);
      $(".inquiry").fadeIn();
    }
  });
}
 
$(document).ready(main);
$(document).on('page:load', main);
$(window).load(main);