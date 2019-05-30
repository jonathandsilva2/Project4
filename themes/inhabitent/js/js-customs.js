jQuery(document).ready(function ($) {

    $( ".fa-search" ).toggle(function() {
        $(`.search-field`).css('display', 'inline');
       
    }, function() {
            $(`.search-field`).css('display', 'none');
        

      });
    console.log($);
    console.log('$');
});