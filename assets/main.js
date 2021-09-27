'use strict';

//メイン キャッチコピー
$(function(){
  var scrollEnd = $('.about').offset().top; //ページ上部からの距離を取得
  var distance = 0;
 
  $(document).scroll(function(){
    distance = $(this).scrollTop(); //スクロールした距離を取得
 
    if (scrollEnd <= distance) { //スクロール距離が『.about』の位置を超えたら
      $('.catch-copy__img').removeClass('fixed'); 
      //class『fixed』を削除
    } else{
      $('.catch-copy__img').addClass('fixed');
      //『.about』より上部に戻ったらclass『fixed』を追加
    }
  });      
});


//メイン サービス
$(function () {
  $(window).scroll(function () {
    $(".services").each(function () {
      var elemPos = $(this).offset().top; //要素の位置を取得 
      var scroll = $(window).scrollTop(); //スクロール位置を取得 */
      var windowHeight = $(window).height(); //画面幅を取得（画面の下側に入ったときに動作させるため） 
      if (scroll > elemPos - windowHeight) {
        //要素位置までスクロール出来たときに動作する 
        $(this).addClass("services-scroll");
      }
    });
  });
  jQuery(window).scroll();
});

// ヘッダーハンバーガーメニュー

$(function() {
  $('.navbtn').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.header_container__nav').addClass('active');
      } else {
          $('.header_container__nav').removeClass('active');
      }
  });
});

//swiper.js
//jQuery使ってます..
$(document).ready(function () {
  // swiperをイニシャライズ
  var mySwiper = new Swiper ('.swiper-container', {
    // オプションのパラメーターを指定
    direction: 'horizontal',
    effect: "flip",
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    })
});