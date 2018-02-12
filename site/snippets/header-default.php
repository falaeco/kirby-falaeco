<?php snippet('head')?>

<body>
  <header class="header wrap wide" role="banner">
    <div class="grid">
      <div class="branding column">
        <a href="<?=url()?>" rel="home" class="brading__highlight branding__highlight--white">
          <?=$site->title()->html()?>
        </a>
      </div>

      <?php snippet('menu')?>

    </div>
  </header>