<?php snippet('header-black') ?>
<main class="main" role="main">
    <div class="text wrap">
        <?= $page->text()->kirbytext() ?>

    <?php foreach($page->find('screenshots')->images() as $image):  ?>
        <figure>
            <img src="<?= $image->url() ?>" alt="<?= $image->name() ?>" />
        </figure>
        <?php endforeach ?>

    </div>
    <?php snippet('prevnext') ?>
</main>
<?php snippet('footer') ?>