$('button#later').click(function() {
  var scrollLeftAmount =570;
  $('#container').animate({scrollLeft:'-='+scrollLeftAmount},1000)
});

$('button#vroeger').click(function() {

  
  if ($(window).width() <= 500) {  
      var scrollLeftAmount = 300;
   } else {
       var scrollLeftAmount =570;
   }
  
  
  $('#container').animate({scrollLeft:'+='+scrollLeftAmount},1000);
 });