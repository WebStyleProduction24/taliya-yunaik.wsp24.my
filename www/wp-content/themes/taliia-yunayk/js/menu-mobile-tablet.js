var $ = jQuery.noConflict();
$(function() {

    var open    =   $('#open');    
    close   =   $('#close');   
    menu    =   $('.uMenuRoot');       

    $(open).on('click', function(e) {
        e.preventDefault();   
        open.slideToggle();
        close.slideToggle();
        menu.slideToggle();
    });

    $(close).on('click', function(e) {
        e.preventDefault();    
        close.slideToggle();
        open.slideToggle();
        menu.slideToggle();
    });

    
});