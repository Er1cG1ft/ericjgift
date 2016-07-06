var main = function() {
  
  $(".proposal").hide();
  $(".inquiry").show();
  
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