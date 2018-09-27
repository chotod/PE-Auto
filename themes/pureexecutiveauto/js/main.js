$(document).ready(function() {
  $('#light-slider').lightSlider({        
    gallery:true,
    item:1,
    thumbItem:5,
    slideMargin: 10,
    speed:500,
    auto:false,
    loop:true,       
    onSliderLoad: function(el) {
      $('#light-slider').removeClass('cS-hidden');
    }  
  });
});