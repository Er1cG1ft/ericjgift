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
    $(".content").addClass("blurred");
    $("." + e.target.id).removeClass("hidden");
  });
  
  $('.contactform').change(function(e) {
    var tempScrollTop = $(window).scrollTop();

    if($('#proposal').is(":checked")){
      $(window).scrollTop(tempScrollTop);
      $(".inquiry").fadeOut();
      $(".proposal").delay(350);
      $(".proposal").fadeIn();
      //$(".proposal").removeClass("hidden");
      //$(".inquiry").addClass("hidden");
      //$(".proposal").animate({
      //  left:'250px',
      //});
    }
    else if($('#inquiry').is(":checked")){
      $(window).scrollTop(tempScrollTop);
      $(".proposal").fadeOut();
      $(".inquiry").delay(350);
      $(".inquiry").fadeIn();
      //$(".proposal").addClass("hidden");
      //$(".inquiry").removeClass("hidden");
      //$(".proposal").animate({
      //  left:'0px',
      //});
    }
  });
}
 
$(document).ready(main);
$(document).on('page:load', main);
$(window).load(main);