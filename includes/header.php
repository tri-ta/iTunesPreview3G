<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>iPhoneで音楽試聴 - 30sec.fm</title>
<?php if ($_SERVER['IS_30SEC_FM_PRODUCTION']) : ?>
  <link href="/stylesheets/min/minify.css" media="screen" rel="stylesheet" type="text/css" />
<?php else: ?>
  <link href="/stylesheets/jquery.mobile-1.0b2.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/common.css" media="screen" rel="stylesheet" type="text/css" />
<?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="apple-touch-icon" href="/images/icon.png" />
</head>
<body>
<div data-role="page" data-theme="a" id="container" class="container">
  <div data-role="header" data-backbtn="false" id="header">
    <h1>30sec.fm</h1>
  </div><!-- #header -->
