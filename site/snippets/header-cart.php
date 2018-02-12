<?php snippet('head')?>

<body>
	  <?php $image = $page->coverimage()->toFile(); ?>
	  <?php if($image): ?>
	    <header class="header" role="banner"  style="background-image: url(<?php echo $image->url(); ?>); background-size: cover">
	    <?php else: ?>
	    <header class="header" role="banner">
	  <?php endif ?>

    <div class="grid wrap wide">
      <div class="branding column">
        <a href="<?= url() ?>" rel="home" class="branding__highlight branding__highlight--white"><?= $site->title()->html() ?></a>
      </div>

      <?php snippet('menu')?>

      <h1 class="page-title">
        <span class="page-title__highlight page-title__highlight--white">
          <?= $page->title()->html() ?>
        </span>
      </h1>
    </div>
    </header>

  
</body>