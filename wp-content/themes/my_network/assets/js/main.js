jQuery(document).ready(function($){
    $('.search-box').hover(
         function(){  $(this).addClass("search-bg") },
         function(){ $(this).removeClass('search-bg') }
    )
  });

const btnmenu = document.querySelector(".iconmenu");
const listmenu = document.querySelector(".main-menu");
const btnclosemenu = document.querySelector(".menu-close");

btnmenu.onclick = () => {
  listmenu.classList.toggle("show-menu");
}

btnclosemenu.onclick = () => {
  listmenu.classList.toggle("show-menu");
}

