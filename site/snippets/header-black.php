<!doctype html>
<html lang="<?=site()->language() ? site()->language()->code() : 'en'?>" class="black-theme">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?=$site->title()->html()?> | <?=$page->title()->html()?></title>
  <meta name="description" content="<?=$site->description()->html()?>">
  <meta name="keywords" content="<?=$site->keywords()->html()?>">
  <script src="https://use.typekit.net/frb6tpn.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <?=css('assets/css/mysassstyle.css')?>


</head>

<body>
    <?php $image = $page->coverimage()->toFile();?>
    <?php if ($image): ?>
        <header class="header header__long header__fade" role="banner"  style="background-image: url(<?php echo $image->url(); ?>); background-size: cover">
    <?php else: ?>
	    <header class="header" role="banner">
	  <?php endif?>

            <div class="grid wrap wide">
                <div class="branding column">
                    <a href="<?=url()?>" rel="home" class="branding__highlight branding__highlight--black"><?=$site->title()->html()?></a>
                </div>
                <nav class="navigation column" role="navigation">
                  <ul class="menu">
                    <?php foreach($pages->visible() as $item): ?>
                    <li class="menu__item<?= r($item->isOpen(), ' is-active') ?>">
                      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                    </li>
                    <?php endforeach ?>
                  </ul>
                </nav>
            </div>
            <h1 class="page-title">
            <span class="page-title__highlight page-title__highlight--white">
                <?=$page->title()->html()?>
            </span>
            </h1>
        </header>