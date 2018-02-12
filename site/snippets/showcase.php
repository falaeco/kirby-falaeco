<?php

if(isset($dirName)){
  $projects = page($dirName)->children()->visible();
} else {
  $projects = page('cart-351')->children()->visible();
}

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($projects as $project): ?>

    <li class="showcase__item column">
			<div class="showcase__item-wrap" style="width: 300; height: 300;">
				<!-- image -->
				<?php if($image = $project->coverimage()->toFile()): $thumb = $image->crop(475, 300); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase__image" />
          <?php endif ?>
				<!-- link -->
				<a href="<?= $project->url() ?>" class="showcase__link">

          <div class="showcase__caption">
            <h3 class="showcase__title"><?= $project->title()->html() ?></h3>
          </div>
        </a>
			</div>

    </li>

  <?php endforeach ?>

</ul>
