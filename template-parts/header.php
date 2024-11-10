<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>VALENTINE ROSE | 女性専用の全国チェーン脱毛サロン</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="全国に店舗を構える女性向け脱毛サロン VALENTINVE ROSEは、VIO、脚、腕、背中などの全身の脱毛に対応しています。 痛みが少なく短期間で高い脱毛効果を得ることができ ある脱毛サービスをリーズナブルな価格で提供しています。">
  <link rel="canonical" href="【正規化するURL】" />
  <meta property="og:url" content="https://zekino0613.com">
  <meta property="og:title" content="VALENTINE ROSE | 女性専用の全国チェーン脱毛サロン">
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="VALENTINE ROSE | 女性専用の全国チェーン脱毛サロン">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/A-TECH-TESE-image/test-image/img/ogp-image.jpg">
  <meta name="robots" content="noindex"><!--公開前はnoindexを無効にする -->
  <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>assets/images/paspol-image/favicon.ico"> -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/d4a0aa4940.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- レイアウトシフト/フォントのプリロード -->
  <link rel="preload" href="path/to/font.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <!-- slick/CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

  <?php wp_head(); ?>
</head>

<body
  <?php body_class(); ?>>
  <header id="header">
    <div class="header__inner--pc">
      <a href="<?php echo home_url('/'); ?>">
        <h1>
          <img loading="lazy" class="header__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/siteLogo-pc@2x.png" alt="ヘッダーロゴ">
        </h1>
      </a>

      <ul class="header__nav">
        <li class="nav_li"><a href="<?php echo home_url('/'); ?>#top">TOP</a></li>
        <li><a href="<?php echo get_post_type_archive_link('product'); ?> ">PRODUCT</li></a>
        <li><a href="<?php echo home_url('/'); ?>#about">ABOUT</li></a>
        <li><a href="<?php echo get_post_type_archive_link('news'); ?> ">NEWS</li></a>
        <li><a href="<?php echo home_url('/contact2/'); ?>">CONTACT</li></a>
      </ul>
    </div><!-- /.header__inner--pc -->

    <div class="header__inner--sp">
      <nav class="hamburger">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>#top">TOP</a></li>
          <li><a href="<?php echo get_post_type_archive_link('product'); ?> ">PRODUCT</a></li>
          <li><a href="<?php echo home_url('/'); ?>#about">ABOUT</a></li>
          <li><a href="<?php echo get_post_type_archive_link('news'); ?> ">NEWS</a></li>
          <li><a href="<?php echo home_url('/contact2/'); ?>">CONTACT</a></li>
        </ul>
      </nav><!-- /.hamburger-menu -->

      <div class="sp-menu">
        <div class="menu">MENU</div><!-- /.menu -->
        <img loading="lazy" class="menu-tab" src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/navigation-toggle@2x.png" alt="メニュー画像">
      </div><!-- /.sp-menu -->

    </div><!-- /.header__inner--sp -->

  </header>