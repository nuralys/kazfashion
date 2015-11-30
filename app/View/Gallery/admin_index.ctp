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
	<a href="/admin/gallery/edit/<?=$item['Gallery']['id']?>" class=" buttons"><span>Редактировать</span></a> 
			<div class="admin_delete">
					<?php echo $this->Form->postLink(
   $this->Html->tag('span', 'удалить', array('class' => 'glyphicon glyphicon-remove')),
        array('action' => 'delete', $item['Gallery']['id']),
        array('escape'=>false),
    __('Подтвердите удаление', $item['Gallery']['id']),
   array('class' => 'buttons')
); ?>
</div>
			</li>
			
<?php endforeach; ?>
</ul>