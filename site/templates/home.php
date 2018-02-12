<?php snippet('head')?>

<header class="hero">
	<div class="hero-text">
		<h1 class="branding" id="branding-home">
			<span class="branding__highlight branding__highlight--white">
				<?=$site->title()->html()?>
			</span>
		</h1>
		<ul class="menu" id="menu-home">
			<?php foreach ($pages->visible() as $item): ?>
					<li class="menu__item<?=r($item->isOpen(), ' is-active')?>">
						<a href="<?=$item->url()?>"><?=$item->title()->html()?></a>
					</li>
			<?php endforeach?>
		</ul>
	</div>
</header>

<main class="main" role="main">

	<header class="wrap">
		<h1><?=$page->title()->html()?></h1>
		<div class="intro text">
		<?=$page->intro()->kirbytext()?>
		</div>
		<hr />
	</header>

	<div class="text wrap">
		<?=$page->text()->kirbytext()?>
	</div>

	<section class="projects-section">
		<div class="wrap wide">
		<h2>Latest Projects</h2>
		<?php snippet('showcase', ['limit' => 3])?>
		<p class="projects-section-more"><a href="<?=page('cart-351')->url()?>" class="btn">show all projects &hellip;</a></p>
		</div>
	</section>

</main>

<?php snippet('footer')?>
