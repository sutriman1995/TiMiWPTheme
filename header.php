<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta name="google-site-verification" content="pLbA4w37JVwCAH52pAjvbFDfP9NqRfp9McD47F_Hzcc" />
	<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(':',true,right); ?> - <?php bloginfo('name'); ?></title>

	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="http://sutriman.com/favicon.ico" /> 

	  <!-- Histats.com  START  (aync)-->
	<script type="text/javascript">var _Hasync= _Hasync|| [];
	_Hasync.push(['Histats.start', '1,3597467,4,0,0,0,00010000']);
	_Hasync.push(['Histats.fasi', '1']);
	_Hasync.push(['Histats.track_hits', '']);
	(function() {
	var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
	hs.src = ('//s10.histats.com/js15_as.js');
	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
	})();</script>
	<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3597467&101" alt="histats" border="0"></a></noscript>
	<!-- Histats.com  END  -->

	<?php wp_head(); ?>
<style type="text/css">
#header_container {background:white; top:0; height:70px; left:0; position:fixed; width:100%; z-index: 9999;}
#header {  margin:0 auto; width:500px; }
  
/* Make Footer Sticky */
#footer_container {background:white; bottom:0; height:60px; left:0; position:fixed; width:100%; z-index: 9999;}
#foo { line-height:70px; margin:0 auto; width:500px;}
</style></style>
</head>
<body>
	<div class="container">
		<div id="header_container">
		<div id="header">
		    <br>
			<a href="/"><?php bloginfo('name'); ?></a>
			<div class="footer">
				<p>
					<a href="/">About</a> :: 
					<a href="/logs/"><font color="red">Logs</font></a> ::
					<a href="/archives">Archives</a>
				</p>
			</div>
			<hr>
		</div>
		</div>
		 <!-- /end .top -->