
$(document).ready(function(){
    
     //main home background must be equal to browsers height
    $('#home').css({ 'height': $(window).height() });
        $(window).on('resize', function() {

        $('#home').css({ 'height': $(window).height() });
        $('body').css({ 'width': $(window).width() });
   });
   
      //about me function background
      $('#about').css({ 'height': $(window).height() });
        $(window).on('resize', function() {

        $('#about').css({ 'height': $(window).height() });
        $('body').css({ 'width': $(window).width() });
   });
   
   //services
   $('#service').css({ 'height': $(window).height()});
   
    $(window).on('resize', function(){
       
        $('#service').css({'height': $(window).height()});
        $('body').css({'width': $(window).width()});
    });
  
   //website site in and out function
    $('#searchBtn').on('click',function(e) {
        e.stopPropagation();
        $('input#search').removeClass('hide').focus();
    });
    $(window).click(function(){
        $('input#search').addClass('hide');
    });
    
    //ajax functionality of contact form submition
        
});


