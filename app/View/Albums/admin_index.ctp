<div class="admin_model">
	<div class="admin_title ">Фотосессии</div>
<a href="/admin/albums/add" class="admin_button model">Добавить фотосессию</a>
</div>
<ul class="gallery_list">
<?php foreach ($albums as $item):?>
	<li class="model_item_container">
	<div class="model_item gallery_admin">
	<img src="/img/album/thumbs/<?=$item['Album']['img'] ?>">
	<div class="gallery_item_des">
	<div class="gallery_item_title"><?=$item['Album']['title'] ?></div>
	</div>
	</div>
	<a href="/admin/albums/edit/<?=$item['Album']['id']?>" class=" buttons"><span>Редактировать</span></a> 
			<div class="admin_delete">
					<?php echo $this->Form->postLink(
   $this->Html->tag('span', 'удалить', array('class' => 'glyphicon glyphicon-remove')),
        array('action' => 'delete', $item['Album']['id']),
        array('escape'=>false),
    __('Подтвердите удаление', $item['Album']['id']),
   array('class' => 'buttons')
); ?>
</div>
			</li>
			
<?php endforeach; ?>
</ul>