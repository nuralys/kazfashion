<h1>Галерея</h1>
<a href="/admin/gallery/add">Добавление галереи</a>
<ul>
<?php foreach($data as $item): ?>
	<li><img src="/img/gallery/thumbs/<?=$item['Gallery']['img'] ?>"><?=$item['Gallery']['title'] ?> (<a href="/admin/gallery/edit/<?=$item['Gallery']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)</li>
<?php endforeach; ?>
</ul>