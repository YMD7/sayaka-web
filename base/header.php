<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">


  <title></title>


<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style.css" >
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

<script type="text/javascript" src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.3"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="js/jquery.sayakaweb.js"></script>
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
    <div class="fb-like" data-href="http://smile-photo.net" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
    <div>
      <a href="">
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