jQuery.fn.rollOver = function(targetElement, textForConvert) {

  var num = $(targetElement).size();
  var saveTexts = [];
  for ( var i = 0; i < num; i++ ) {
    saveTexts[i] = $(targetElement).eq(i).text();
  };
  $(targetElement).hover (
    function() {
      var num = $(targetElement).index(this);
      $(this).text(textForConvert[num]);
    },
    function() {
      var num = $(targetElement).index(this);
      $(this).text(saveTexts[num]);
    }
  );

};

$(function() {

  // ====== rollover gloval_nav text when hover ======
  $(function() {
    var targetElement = "div#gnavi ul li a";
    var textForConvert = [
      "ホーム",
      "プロフィール",
      "ブログ",
      "ギャラリー",
      "お問い合わせ"
    ];

    jQuery().rollOver(targetElement, textForConvert);

  });

  // ====== tab_selector ======
  $(document).ready(function(){
    $('ul.tab_selector li').click(function() {
      var num = $('ul.tab_selector li').index(this);
      $('ul.tab_selector li.current').removeClass('current');
      $(this).addClass('current');
      $('div#gallery_area div').addClass('hidden');
      $('div#gallery_area div').eq(num).removeClass('hidden');
    });
  });

  $(document).ready(function() {
    $(".fancybox").fancybox();
  });

  // ====== add "current" class to album_nav ======
  var currentAlbum = $('div.album h3 span').text();
  $('ul.gallery_subnavi li:contains("'+currentAlbum+'")').addClass("current");

  // ====== rollover album_nav text when hover ======
  $(function() {
    var targetElement = "ul.gallery_subnavi li";
    var textForConvert = [
      "カンボジア",
      "中国",
      "インド",
      "ラオス",
      "タイ",
      "ベトナム"
    ];

    jQuery().rollOver(targetElement, textForConvert);

  });

});