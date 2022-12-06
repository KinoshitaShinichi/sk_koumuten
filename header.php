<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
 
  <?php wp_head(); ?>
</head>
<body>
  <header id="header">
      <div class="header_left">
        <a href="<?php echo home_url(); ?>/">
        <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        </a>
      </div>

      <div class="header_right">
        <ul class="gnavi">
          <li class="current"><a href="<?php echo home_url(); ?>/">トップ</a></li>
          <li><a href="<?php echo home_url(); ?>/business">業務内容</a></li>
          <li><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
          <li><a href="<?php echo home_url(); ?>/category/caseall">施工実例</a></li>
          <li><a href="<?php echo home_url(); ?>/form">お問い合わせ</a></li>
          <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
          </ul>
      </div>
    </header>