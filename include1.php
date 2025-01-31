<?php
include_once("/rcl/www/rcl/php/util.php");
if(!isset($path)) $path = ".";
?><!doctype html>
<html lang="<?php echo $rcl->lang; ?>">
<head>
<title>Robin C. Ladiges<?php if(isset($title)) echo " / ".$title; ?></title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="all" />

<!-- http://realfavicongenerator.net -->
<link rel="apple-touch-icon" sizes="57x57" href="/ico/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/ico/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/ico/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/ico/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/ico/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/ico/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/ico/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/ico/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/ico/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/ico/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/ico/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/ico/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/ico/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/ico/manifest.json">
<link rel="shortcut icon" href="/ico/favicon.ico">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="/ico/mstile-144x144.png">
<meta name="msapplication-config" content="/ico/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" type="text/css" href="/style/basic.css" title="Default (blue / orange)" />
<link rel="stylesheet" type="text/css" href="/style/reference.css" />
<script type="text/javascript" src="/scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/scripts/reference.js" defer async></script>
<script type="text/javascript" src="/scripts/textarea-autoheight.js" defer async></script>
<noscript><style type="text/css">.jsonly{display: none !important; visibility: hidden !important;}</style></noscript>
<script type="text/javascript">$(function(){$('noscript').remove();});</script>
</head>
<body>

<div>

    <div id="content"><div><article><b class="hidden"><?php echo $rcl->lang("Inhalt", "Content")."<a href='#navi'>".$rcl->lang(" springe zur Navigation"," jump to the navigation")."</a>"; ?><br/></b>

