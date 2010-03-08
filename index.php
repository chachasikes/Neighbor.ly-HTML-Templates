<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php require_once('includes/neighborly.theme.inc'); ?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<meta content="Neighborly connects you with your closest neighbors." name="description" />
<title><?php echo $sitename; ?></title>
<link rel="stylesheet" href="theme/css/reset.css" />
<link rel="stylesheet" href="theme/css/text.css" />
<link rel="stylesheet" href="theme/css/960.css" />
<link rel="stylesheet" href="theme/css/styles.css" />
<link rel="stylesheet" href="theme/css/typography.css" />
<link rel="stylesheet" href="theme/css/forms.css" />
<!--[if IE]>
    <link rel="stylesheet" href="theme/css/siteie.css" type="text/css">
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" href="theme/css/siteie6.css" type="text/css">
<![endif]-->
<script type="text/javascript" src="theme/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="theme/js/jquery-ui-1.8rc3.custom.min.js"></script>

</head>
<body>
  <div class="skiplinks">
  <strong>Welcome to Neighborly.</strong>
  Skip directly to:
  <a href="#primary-nav">Section Navigation</a>,
  <a href="#page-main">Content</a>.
  </div>
  <div id="page" class="container_20 page">
    <div id="tiles-top" class="grid_20 tiles tiles-top">
      <?php echo neighborly_tiles('top'); ?>
    </div>
    <div id="page-content" class="page-content">
      <div id="page-top" class="page-top">
        <div id="messages" class="grid_20 messages">
          <div class="content">
          MESSAGES
          </div>
        </div>
      	<div class="clear"></div>
        <div id="page-header" class="page-header grid_20">
          <div id="branding" class="grid_5 branding alpha">
            <div class="content">
              LOGO
            </div>
          </div>
          <div id="title" class="grid_5 title">
            <div class="content">
              <h1><a href="index.html">Neighborly</a></h1>
            </div>
          </div>
          <div id="primary-nav" class="grid_10 primary-nav omega">
            <div class="content">
              <ul class="menu">
                <li><a href="learn">learn</a></li>
                <li><a href="about">about</a></li>
                <li><a href="signup">signup</a></li>
                <li><a href="login">login</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
      <div class="clear"></div>
      <div id="page-main" class="page-main">
        <div id="main-content" class="grid_10 main-content push_5">
          <div class="content">
          <?php echo neighborly_register(); ?>
          </div>
        </div>
        <div id="sidebar-content" class="grid_5 sidebar sidebar-right push_5">
          SIDEBAR RIGHT
        </div>
        <div id="secondary-nav" class="grid_5 sidebar sidebar-left pull_15">
          SIDEBAR LEFT
        </div>
        <div class="clear"></div>
        <div id="tiles-bottom" class="grid_20 tiles tiles-bottom">
          <?php echo neighborly_tiles('bottom'); ?>
        </div>
        <div class="clear"></div>
        <div id="footer" class="grid_20 footer">
          <div class="content grid_18 push_1 alpha omega">
            <ul class="menu">
              <li><a href="besafe">Be safe</a></li>
              <li><a href="contact">Contact</a></li>
              <li><a href="get-involved">Get involved</a></li>
            </ul>
          </div>
        </div>
      	<div class="clear"></div>
        <div id="closure" class="grid_20 closure">
          <div class="content grid_18 push_1 alpha omega">
            &copy; 2010 e-democracy.org
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
<script type="text/javascript" src="theme/js/neighborly.js"></script>
</body>
</html>