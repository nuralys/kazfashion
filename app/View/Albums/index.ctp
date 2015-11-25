<ul class="gallery_list">
	<?php foreach ($albums as $item):?>
		<li class="gallery_item">
			<a href="/albums/<?=$item['Album']['id']; ?>"><img src="/img/album/thumbs/<?=$item['Album']['img']; ?>"></a>
			<div class="gallery_item_des">
				<div class="gallery_item_title">
				<a href="gallery_2lvl.html"><?=$item['Album']['title']; ?></a>
				</div>
				<div class="date_gallery">

				<?=$this->Time->format($item['Album']['created'], '%d-%m-%Y', 'invalid'); ?>
				</div>
			</div>
		</li>
	<?php endforeach;?>
</ul>