<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


  <!-- orbit css+js -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/orbit-1.2.3.css">
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.5.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.orbit-1.2.3.min.js"></script>

  <!-- [if IE]>
       <style type="text/css">
        .timer { display: none !important; }
        div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
      </style>
  <![endif]-->

  <?php wp_head(); ?>

</head>
<body>
  <div class="nav">
    <div class="content">
      <div class="logo"><a href="<?php bloginfo('url'); ?>">CS DUG</a></div>
      <a class="button" href="#">Student Projects</a>
      <a class="button" href="#">Home</a>
    </div>
  </div>
