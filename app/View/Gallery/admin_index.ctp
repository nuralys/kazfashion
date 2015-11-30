<div class="admin_model">
	<div class="admin_title ">Галерея</div>
<a href="/admin/gallery/add" class="admin_button model">Добавление галереи</a>
</div>
<ul class="gallery_list">
<?php foreach($data as $item): ?>
	<li class="model_item_container">
	<div class="model_item gallery_admin">
	<img src="/img/gallery/thumbs/<?=$item['Gallery']['img'] ?>">
	<div class="gallery_item_des">
	<div class="gallery_item_title"><?=$item['Gallery']['title'] ?></div>
	</div>
	</div>
	 <a href="/admin/gallery/edit/<?=$item['Gallery']['id']?>" class=" buttons">Редактировать</a> 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Gallery']['id']), array('class' => 'admin  buttons'),array('confirm' => 'Подтвердите удаление')); ?>
			</li>
<?php endforeach; ?>
</ul>