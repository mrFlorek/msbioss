$(function(){
var main = $(".main");

function mainFadeOut(){
  main.fadeOut(500);
}
function mainFadeIn(){
  main.fadeIn(500);
}



  var btn_gol = $("#btn_gol");
  var btn_nd = $("#btn_nd");

  $(".button").click(function(){
    $('html, body').animate({
       scrollTop: $(".bottom").offset().top }, 1000);
  });

  btn_gol.click(function(){
    btn_nd.fadeOut(500);
    $(this).fadeOut(500, function(){
      $("#gol_right_logo").fadeIn(500);
      $("#gol_left_nav2").fadeIn(500);
    });
  });

  btn_nd.click(function(){
    btn_gol.fadeOut(500);
    $(this).fadeOut(500, function(){
      $("#nd_left_logo").fadeIn(500);
      $("#nd_right_nav2").fadeIn(500);
    });
  });

 $("#gol_right_btn_gol").click(function(){
   $("#gol_right_logo").fadeOut(500);
   $("#gol_left_nav2").fadeOut(500, function(){
     btn_gol.fadeIn(500);
     btn_nd.fadeIn(500);
   });
 });

 $("#nd_left_btn_nd").click(function(){
   $("#nd_left_logo").fadeOut(500);
   $("#nd_right_nav2").fadeOut(500, function(){
     btn_gol.fadeIn(500);
     btn_nd.fadeIn(500);
   });
 });

$(".main_btn").click(function(){
  main.fadeOut(300, function(){
    //main.load("main.php", function(){
      main.fadeIn(300);
  //  });
  });
});

var doc_height = $(document).height();
var logoTop = $(".logotop");



var images = [].slice.call(document.querySelectorAll('.js-parallax-bg'));


function getViewportHeight() {
    var a = document.documentElement.clientHeight, b = window.innerHeight;
    return a < b ? b : a;
}

function getViewportScroll() {
    if(typeof window.scrollY != 'undefined') {
        return window.scrollY;
    }
    if(typeof pageYOffset != 'undefined') {
        return pageYOffset;
    }
    var doc = document.documentElement;
    doc = doc.clientHeight ? doc : document.body;
    return doc.scrollTop;
}

function doParallax() {
    var el, elOffset, elHeight,
        offset = getViewportScroll(),
        vHeight = getViewportHeight();

    for(var i in images) {
        el = images[i];
        elOffset = el.offsetTop;
        elHeight = el.offsetHeight;

        if((elOffset > offset + vHeight) || (elOffset + elHeight < offset)) { continue; }

        el.style.backgroundPosition = '50% '+Math.round((elOffset - offset)*3/8)+'px';
    }
}

$(document).scroll(function(){
  doParallax();
  //imgTop.css("top",);
  var scroll_position = $(document).scrollTop();
  if(scroll_position < 350){
  logoTop.css("top",scroll_position/1.5);
}
console.log(scroll_position);
});

});
