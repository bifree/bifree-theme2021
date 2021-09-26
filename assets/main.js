'use strict';

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