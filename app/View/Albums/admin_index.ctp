<h2>Страница альбомов</h2>
<a href="/admin/albums/add">Добавить альбом</a>
<ul>
	<?php foreach ($albums as $item):?>
		<li class="gallery_item">
			<div class="gallery_item_des">
				<div class="gallery_item_title">
				<?=$item['Album']['title']; ?> (<a href="albums/edit/<?=$item['Album']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Album']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
				</div>
			</div>
		</li>
	<?php endforeach;?>
</ul>