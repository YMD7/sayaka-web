<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">


  <title>Sayaka Suzuki :: Sunny Smile ＾＾</title>


<link rel="shortcut icon" href="http://133.242.161.167/wp-content/themes/main/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="http://133.242.161.167/wp-content/themes/main/style.css" >
<link rel="stylesheet" href="http://133.242.161.167/wp-content/themes/main/fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<link rel="stylesheet" href="http://133.242.161.167/wp-content/themes/main/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<link rel="stylesheet" href="http://133.242.161.167/wp-content/themes/main/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<?php /* wordpress header */ wp_head(); ?>
<script type="text/javascript" src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://133.242.161.167/wp-content/themes/main/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="http://133.242.161.167/wp-content/themes/main/fancybox/jquery.fancybox.pack.js?v=2.1.3"></script>
<script type="text/javascript" src="http://133.242.161.167/wp-content/themes/main/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="http://133.242.161.167/wp-content/themes/main/fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<script type="text/javascript" src="http://133.242.161.167/wp-content/themes/main/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="http://133.242.161.167/wp-content/themes/main/js/jquery.sayakaweb.js"></script>
<script type="text/javascript">
    getTwitters('tweet', {
    id: 'sayaka_suzuki_',
    count: 5,
    enableLinks: true,
    ignoreReplies: true,
    clearContents: true,
    template: '<em>%time%</em><br />%text%'
    });

    // ====== close address bar ======
    window.onload = function(){
       setTimeout("scrollTo(0,1)", 100);
    }
</script>

</head>
<body>

<div id="content">

<!-- HEADER -->
  <div id="header">

    <h1>笑顔写真家 - smile photographer</h1>
    
    <div>
      <a href="<?php bloginfo('url'); ?>">
        <div id="name">
          <span>Sayaka</span><br />Suzuki
        </div>
      </a>
      
      <a href="http://twitter.com/#!/sayaka_suzuki_">
        <div id="TW">
          <img src="http://api.twitter.com/1/users/profile_image?screen_name=sayaka_suzuki_&size=bigger" alt="Twitter Icon" />
          <div id="tweet"></div>
        </div>
      </a>
    </div>

  </div>
<!-- HEADER -->