<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>" >
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <script src="https://use.typekit.net/frb6tpn.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <?= css('assets/css/mysassstyle.css') ?>


</head>