// Idiot Explorer requires this on every ajax script it loads
$.ajaxSetup({
    cache: false
});

// fade out alerts
$('.alert-fade').fadeOut(6000);

// called on change of layout on window resize
$(window).resize(function(){
   console.log('resize called');
   var width = $(window).width();
   if(width < 992){
       $('#eq-col').removeClass('eq-col');
   }
})
.resize();//trigger the resize event on page load.