<?php
    /* test with project in cart351 */
    $projects = page('portfolio')->children()->visible();
?>

<div class="showcase-flex__container wrap wide">

    <?php foreach($projects as $project): ?>
    <div class="showcase-flex__item">
        <a href="<?= $project->url() ?>" class="showcase-flex__link">
        <div class="showcase-flex__thumbnail">
            <div class="showcase-flex__overlay"></div>
            <img class="showcase-flex__image" src="<?= $project->coverimage()->toFile()->url(); ?>" alt="Thumbnail for <?= $project->title()->html() ?>" />
        </div>
        <h3 class="showcase-flex__title"><?= $project->title()->html() ?></h3>
        </a>
    </div>

    <? endforeach ?>
</div>