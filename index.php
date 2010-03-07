<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<meta content="Neighborly connects you with your closest neighbors." name="description" />

<title>Neighborly / Home</title>
<link rel="stylesheet" href="theme/css/reset.css" />
<link rel="stylesheet" href="theme/css/text.css" />
<link rel="stylesheet" href="theme/css/960.css" />
<link rel="stylesheet" href="theme/css/styles.css" />
<link rel="stylesheet" href="theme/css/forms.css" />
<!--[if IE]>
    <link rel="stylesheet" href="theme/css/siteie.css" type="text/css">
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" href="theme/css/siteie6.css" type="text/css">
<![endif]-->

<?php require_once('includes/neighborly.theme.inc'); ?>
<script type="text/javascript" src="theme/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="theme/js/jquery-ui-1.8rc3.custom.min.js"></script>

</head>
<body>
  <div id="page" class="container_20 page">
    <div id="messages" class="grid_20 messages alpha omega">MESSAGES</div>
    <div id="branding" class="grid_10 branding alpha">
      <div id="logo" class="grid_2 logo alpha">LOGO</div>
      <div id="title" class="grid_8 title omega">
        <h1><a href="index.html">Neighborly</a></h1>
      </div>
    </div>
    <div id="primary-nav" class="grid_10 primary-nav omega">
      <ul class="menu">
        <li><a href="learn">learn</a></li>
        <li><a href="about">about</a></li>
        <li><a href="signup">signup</a></li>
        <li><a href="login">login</a></li>
      </ul>
  	</div>
    <div id="tiles-top" class="grid_20 alpha omega tiles-top">
      <?php echo "top" . neighborly_tiles('top'); ?>
    </div>
    <div id="content" class="grid_20 content alpha omega">
      <div id="main-content" class="grid_10 main-content push_5">
      	<h2 class="tagline">Project tagline in three to eight words.</h2>
        <div id="register-address">
          <?php echo neighborly_register(); ?>
        </div>
      </div>
      <div id="sidebar" class="grid_4 sidebar-left pull_9">
        SIDEBAR LEFT
      </div>
      <div id="sidebar-right" class="grid_4 sidebar-right">
        SIDEBAR RIGHT
      </div>
      <div id="tiles-left" class="grid_1 tiles-left pull_18 alpha">
        <?php echo "left" . neighborly_tiles('left'); ?>
      </div>
      <div id="tiles-right" class="grid_1 tiles-left omega">
        <?php echo "right" . neighborly_tiles('right'); ?>
      </div>
    </div>
  	<div class="clear"></div>
    <div id="tiles-bottom" class="grid_20 alpha omega tiles-bottom">
      <?php echo "bottom" . neighborly_tiles('bottom'); ?>
    </div>
    <div id="footer" class="grid_20 footer alpha omega">
      <ul class="menu">
        <li><a href="besafe">Be safe</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="get-involved">Get involved</a></li>
      </ul>
    </div>
  	<div class="clear"></div>
    <div id="closure" class="grid_20 closure alpha omega">&copy; 2010 e-democracy.org</div>
  	<div class="clear"></div>
  </div>
<script type="text/javascript" src="theme/js/neighborly.js"></script>
</body>
</html>