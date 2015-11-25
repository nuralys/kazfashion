<a href="/admin/models/add">Добавить модель</a>

<ul>
	<?php foreach($data as $item): ?>
		<li><?=$item['ChildModel']['fio'] ?> (<a href="models/edit/<?=$item['ChildModel']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['ChildModel']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)</li>
	<?php endforeach ?>
</ul>