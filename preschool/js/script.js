//logoの表示
$(window).on('load',function(){
  setTimeout(function(){
jQuery('#loading-bg').fadeOut();
  }, 1000);
});

// $(function(){
//   $(".mv__container picture:not(:first-child)").hide();
//   setInterval(function() {
//     $(".mv__container picture:first-child").fadeOut("slow").next("picture").fadeIn("slow").end().appendTo(".mv__container");
//   },3000)
// });

$(function (){
function checkBreakPoint() {
    var w = $(window).width();
    if (w <= 520) {
  		// スマホ向け（520px以下のとき）
      $('#slider').not('.slick-initialized').slick({
  			//スライドさせる
        infinite: true,
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '50px',
        slidesToScroll: 1,
        slidesToShow: 1,
        draggable: true,
        focusOnSelect: true,
        dotsClass:'slick-dots',
      });
    } else {
  		// PC向け
      $('.slick-box.onlysp.slick-initialized').slick('unslick');
    }
  }
  // ウインドウがリサイズする度にチェック
  $(window).resize(function(){
    window.location.reload(false);
  });
  // 初回チェック
  checkBreakPoint();
});


