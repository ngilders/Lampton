<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><link rel="stylesheet" href="/sites/all/themes/lampton/css/old-ie7.css"><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><link rel="stylesheet" href="/sites/all/themes/lampton/css/old-ie8.css"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
<html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">
  <meta name="description" content="Lampton360 operates a diverse range of individually focused businesses which combine expertise and knowledge from the commercial and public sectors." />
  <meta name="keywords" content="Hounslow, London, Creative design, advertising, sponsorship, business transformation, continuous improvement, consultancy, training, lean, educate, education, schools, teaching, teachers, events, event, lampton park conference centre, AV, audio visual, video, venue, catering, weddings, designing, print, flyers, posters, pamphlets, magazines, brochures, newsletters, branding, marketing, annual reports, banners, signage, web design, photography, illustration, photography" />

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
    <![endif]-->
  <?php endif; ?>
  <link href="/sites/all/libraries/bxslider/jquery.bxslider.css" rel="stylesheet" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php if ($skip_link_text && $skip_link_anchor): ?>
  <!--[if (IE 7)&(!IEMobile)]><link rel="stylesheet" href="/sites/all/themes/lampton/css/old-ie7.css"><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
  <!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><link rel="stylesheet" href="/sites/all/themes/lampton/css/old-ie8.css"><![endif]-->
    <p id="skip-link">
      <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
