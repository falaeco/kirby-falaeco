<?php snippet('header-cart') ?>

  <main class="main" role="main">


    <div class="text wrap">

      <?= $page->text()->kirbytext() ?>

      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>

    </div>

    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>
