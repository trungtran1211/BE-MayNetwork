jQuery(document).ready(function($){
    $('.search-box').hover(
         function(){  $(this).addClass("search-bg") },
         function(){ $(this).removeClass('search-bg') }
    )
  });