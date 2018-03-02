<?php snippet('header-black') ?>
<main class="main" role="main">
    <div class="text wrap">
        <?= $page->text()->kirbytext() ?>
    </div>
    <?php snippet('prevnext') ?>
</main>
<?php snippet('footer') ?>