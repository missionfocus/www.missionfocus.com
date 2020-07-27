$('a:not([href^="missionfocus.com"]):not([href^="#"]):not([href^="/"])').attr("target","_blank");

$('small a').click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");
  return false; 
});

window.onresize = function(){ 
  var carouselHeight = $('.gallery').outerHeight();
  $('.flickity-viewport').outerHeight(carouselHeight); 
};  