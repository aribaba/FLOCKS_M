<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr" lang="ja">
<head>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/rounded-mplus-20130705 (1)">
<meta name=viewport content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="5t7i6IEzuQwrBMmMlIuMPL1qo_xLiDN0mDIikknWPVk" />
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=752067121476709";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script>

$(document).ready(function() {
  var othorpostslink = $('.othorpostslink');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      othorpostslink.fadeIn();
    } else {
      othorpostslink.fadeOut();
    }
  });

});


</script>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
  <?php global $page, $paged;
if (is_search()):
wp_title('', true, 'left' );
echo ' | ';
else:
  wp_title('|', true ,'right' );
endif;
bloginfo('name');
if (is_front_page()) :
echo " | ";
bloginfo('description');
endif;
if ($paged >= 2 || $page >= 2) :
echo ' | ' . sprintf('%sページ',
  max($paged,$page));
  endif;
  ?></title>

<link rel="short-cut-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/precomposed.png" height="150px" width="150px">



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
$('.flexslider').flexslider();
});
</script>


<script type="text/javascript">
window.onload = function(){
  window.document.oncontextmenu
    = function(e){
          var o;
          // IEの場合
          if (!e) {
            o = event.srcElement;
          // その他Firefox,Safari,Cromeなどの場合
          }else{
            o = e.target;
          }
          if(o.tagName&&o.tagName=='IMG') return false;
       }
}
//->
</script>



<script src="<?php bloginfo('template_url'); ?>/js/get_social_count.js"></script>


<script type="text/javascript">window._pt_lt = new Date().getTime();</script>


<?php wp_head(); ?>
</head>
<body>
  <?php include_once("analyticstracking.php") ?>

  <script type="text/javascript">
  window._pt_sp_2 = [];
  _pt_sp_2.push('setAccount,2b3a84ed');
  var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  (function() {
    var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
    atag.src = _protocol + 'js.ptengine.jp/pta.js';
    var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true;
    stag.src = _protocol + 'js.ptengine.jp/pts.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(atag, s);s.parentNode.insertBefore(stag, s);
  })();
</script>


<div id="wrap">
	<!-- header -->
<header id="header">
	<div id="header-contents">
  <!-- サイドドロワー -->




	<div id="site-logo">

		<h1>
      <a href="<?php echo home_url('/'); ?>" alt="bloginfo('name'); ?>">
        <img  src="<?php bloginfo('template_url'); ?>/images/鳥.png">
              </a>
    </h1>



	</div>

<div id="checkbox-menu">
  <input type="checkbox" id="checkbox" name="check" value="" />

  <label for="checkbox"></label>
  <nav id="list">
    <ul>
      <div id="login-enter">
  <?php if (is_user_logged_in() ) {
?>
    <a href="http://flocks.jp/your-profile/"><li><?php
global $current_user;
get_currentuserinfo();

echo $current_user->user_login;
?></li></a>
    <a href="http://flocks.jp/logout/?_wpnonce=5f4a6d44c3"><li>ログアウト</li></a>

    <?php
    ;
  }else{
    ?>
    <a href="http://flocks.jp/login/"><li>ログイン</li></a>
    <?php
    ;
  }
  ?>

</div>


    </ul>
  </nav>
</div>

</div>
<!--header-contents end-->
</header>




<div id="contents">