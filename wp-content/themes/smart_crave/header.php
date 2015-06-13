<!DOCTYPE html>
<html>
<head>
 <title><?php wp_title( '|', true, 'right' ); ?></title>
  
  <!-- France orthographe -->
  <meta charset="utf-8">
  <!-- font1: title -->
  <link href='http://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
  <!-- font2: serif -->
<link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
  <!-- bootstrap font-awsome-->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

 <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- Leave those next 4 lines if you care about users using IE8 -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

 <!-- VIEWPORT -->
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 <!-- My CSS -->
  <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>"/>
  <?php wp_head(); ?>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '209034415775655',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
<div class="container-fluid">
  <div class="row" id="pad">
    <div class="col-xs-9 col-sm-11">
      <h1 class="center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
      <h5 class="center"><?php bloginfo('description'); ?></h5>
    </div>
    <div class="col-xs-3 col-sm-1 stuff">
      <div class="row">
        <i class="fa fa-weixin"></i>
        <a href="?page_id=38">Consult</a>
      </div>
      <div class="row">
        <i class="fa fa-shopping-cart"></i>
        <a href="#" onclick="alert('Sorry not available yet ...');">Shop my stuff</a>
      </div>
    </div>
  </div>