<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta property="og:title" content="Sayaka Suzuki :: Sunny Smile ＾＾"/>
<meta property="og:type" content="Blog"/>
<meta property="og:url" content="http://smile-photo.net/"/>
<meta property="og:image" content="http://smile-photo.net/wp-content/themes/main/images/profile_smile_img.JPG"/>
<meta property="og:site_name" content="Sayaka Suzuki - 笑顔写真家 Smile Photographer"/>
<meta property="og:description" content="笑顔写真家 鈴木さやかのWebサイトです。アジアを旅して撮ってきた写真作品集などの紹介(写真販売)やブログを運営しています。"/>


  <title><?php bloginfo( 'name' ); ?></title>


<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" >
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<?php /* wordpress header */ wp_head(); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancybox/jquery.fancybox.pack.js?v=2.1.3"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sayakaweb.js"></script>

</head>
<body>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39734524-1', 'smile-photo.net');
  ga('send', 'pageview');
  </script>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<div id="content">

<!-- HEADER -->
  <div id="header">

    <h1>笑顔写真家 - smile photographer</h1>

    <!-- fb-like-buttom -->
    <div class="fb-like" data-href="http://smile-photo.net" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>

    <div>
      <a href="<?php bloginfo('url'); ?>">
        <div id="name">
          <span>Sayaka</span><br />Suzuki
        </div>
      </a>
      
      <!-- Tweet部分を表示 -->
      <?php include "tweet.php" ?>
      
    </div>

  </div>
<!-- HEADER -->