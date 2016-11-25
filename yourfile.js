
$(document).ready(function(){
    $(".maintext").animate({left:300,opacity:"show"}, 1200);
    
	
});




    

  
  $(function(){  // $(document).ready shorthand
  $('.maintext2').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.maintext2').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});

$(document).ready(function(){
    $(".maintext4").animate({right:500,opacity:"hide"}, 2000);
    
	
});
$(document).ready(function(){
    $(".maintext5").animate({right:500,opacity:"show"}, 2000);
    
	
});

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('stick');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});