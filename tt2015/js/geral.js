jQuery(document).ready(function ($) {


$('#myCarousel .carousel-inner .item').unwrap();
$('#myCarousel .carousel-inner .item:nth-child(1)').addClass('active');
$('#carousel-bounding-box > .panel-separator').remove();
$('#thumbcarousel .carousel-inner .item > div').unwrap().addClass('item');    
$('#thumbcarousel .carousel-inner .item:nth-child(1)').addClass('active'); 


 /*var divs = $("#thumbcarousel .carousel-inner div");
    for(var i = 0; i < divs.length; i+=6) {
      divs.slice(i, i+6).wrapAll("<div class='item'></div>");
    } 
*/
// handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
      var id_selector = $(this).attr("id");
      var id = id_selector.substr(id_selector.length -1);
      id = parseInt(id);
      $('#myCarousel').carousel(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $(this).addClass('selected');
    });
    // when the carousel slides, auto update
    $('#myCarousel').on('slid', function (e) {
      var id = $('.item.active').data('slide-number');
      id = parseInt(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $('[id=carousel-selector-'+id+']').addClass('selected');
    }); 
 /*-- Menu Toggle Script --*/
$('body').click(function() {
   $("#wrapper").removeClass("toggled");
});
$('#menu-toggle').click(function(e){
    e.stopPropagation();
    $("#wrapper").toggleClass("toggled");
});
/*$('#menu-toggle').mouseenter(function(e){
    e.stopPropagation();
    $("#wrapper").addClass("toggled");
});*/
$('#menu-principal').click(function(e){
    e.stopPropagation();
});
/*$('#sidebar').mouseleave(function(e){
    $("#wrapper").removeClass("toggled");
});*/
 $('.menu').localScroll();  
 $('.menu2').localScroll();  
});
