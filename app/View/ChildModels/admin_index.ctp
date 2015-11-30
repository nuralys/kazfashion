
<div class="admin_model">
				<div class="admin_title ">панель администратора</div>
				<div class="admin_button model">
					<a href="/admin/models/add">Добавить модель</a>
				</div>
				</div>
<ul class="model_list	">
	<?php foreach($data as $item): ?>
		<li class="model_item_container">
			<div class="model_item">
						
							<img src="/img/models/<?=$item['ChildModel']['img'] ?>">
						<div class="gallery_item_des">
							<div class="gallery_item_title">
								<?=$item['ChildModel']['fio'] ?>
							</div>
							<div class="date_gallery">Номер #ID:<?=$item['ChildModel']['id'] ?></div>
						</div>
					</div>
					<a href="models/edit/<?=$item['ChildModel']['id']?>" class=" buttons"><span>редактировать</span></a>
					<div class="admin_delete">
					<?php echo $this->Form->postLink(
   $this->Html->tag('span', 'удалить', array('class' => 'glyphicon glyphicon-remove')),
        array('action' => 'delete', $item['ChildModel']['id']),
        array('escape'=>false),
    __('Подтвердите удаление', $item['ChildModel']['id']),
   array('class' => 'buttons')
); ?>
</div>
					<a href="/admin/lookbooks/edit/<?=$item['ChildModel']['id']?>" class=" buttons"><span>lookbook</span></a>
					<a href="" class="admin buttons"><span>видео</span></a>
		

			</li>
	<?php endforeach ?>
</ul>