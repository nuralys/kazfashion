<div class="gallery_title">
	<div class="gallery_item_title"><?=$album_data[0]['Album']['title']?></div>
	<div class="date_gallery"><?=$this->Time->format($album_data[0]['Album']['created'], '%d-%m-%Y', 'invalid')?></div>
</div>
<ul class="gallery_list">
<?php foreach($data as $item): ?>
	<li class="gallery_item second_lvl">
	<a class="fancybox" rel="gallery" href="/img/gallery/<?=$item['Gallery']['img'] ?>">
		<img src="/img/gallery/thumbs/<?=$item['Gallery']['img'] ?>"></a>
	</li>
<?php endforeach; ?>
</ul>