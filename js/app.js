jQuery(document).ready(function($) { //wraper for no conflict jquery

  $( ".nav-toggle" ).click(function() {
    $(this).toggleClass("open");
    $("nav").fadeToggle(100);

    return false;
  });  
  
});
