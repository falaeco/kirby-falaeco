<?php snippet('header-cart') ?>

  <main class="main" role="main">

    <header class="wrap">
      
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="wrap wide">
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>
