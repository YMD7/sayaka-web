<?php $domain = "http://localhost/~kyo_YMD/SayakaSuzuki/"; ?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">


  <title>Sayaka Suzuki :: Sunny Smile ＾＾</title>


<link rel="shortcut icon" href="<?php echo $domain ?>images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $domain ?>style.css" >
<script type="text/javascript" src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $domain ?>js/jquery.sayakaweb.js"></script>
<script type="text/javascript">
    getTwitters('tweet', {
    id: 'sayaka_suzuki_',
    count: 5,
    enableLinks: true,
    ignoreReplies: true,
    clearContents: true,
    template: '<em>%time%</em><br />%text%'
    });
</script>
</head>
<body>

<div id="content">

<!-- HEADER -->
  <div id="header">

    <h1>笑顔写真家 - smile photographer</h1>
    
    <div>
      <a href="<?php echo $domain ?>index.php">
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