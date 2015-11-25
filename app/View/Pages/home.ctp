<div class="content">
			<section class="slider" >
			<div class="slider__item">
				<a href=""><img src="img/slider1.jpg" alt=""></a>
				<div class="des_slider">COVER STORY LITTLE QUEENS bY WDmagazine</div>
			</div>
			<div class="slider__item">
				<a href=""><img src="img/slider2.jpg" alt=""></a>
				<div class="des_slider">KZfashion school-agency стали официальными лицами итальянского бренда "Petit"</div>
			</div>
			<div class="slider__item">
				<a href=""><img src="img/slider3.jpg" alt=""></a>
				<div class="des_slider">Учебная фотосессия с учениками школы KZfashion school-agency</div>
			</div>
		</section>
		<?php foreach($news as $item): ?>
				<div class="news_item">
					<div class="date"><?=$item['News']['date'] ?></div>
					<div class="news_item_img">
						<a href="/news/<?=$item['News']['id'] ?>"><img src="/img/news/thumbs/<?=$item['News']['img'] ?>" alt=""></a>
						<div class="news_item_img_shadow">
						
						</div>
					</div>
					<div class="news_item_title"><a href="/news/<?=$item['News']['id'] ?>"><?=$item['News']['title'] ?></a></div>
					<div class="news_item_des">
						<p>
							<?= $this->Text->truncate(strip_tags($item['News']['body']), 850, array('ellipsis' => '...', 'exact' => true)) ?>
						</p>
					</div>
				</div>
				<?php endforeach ?>
				
			</div>
			<?php echo $this->element('sidebar'); ?>