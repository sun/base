<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
  <head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php print $styles; ?>
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <?php print $scripts; ?>
</head>
<body<?php print $body_attributes;?>>
  <a href="#content" class="invisible focusable"><?php print t('Skip to main content'); ?></a>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>