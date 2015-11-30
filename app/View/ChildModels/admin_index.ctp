
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
						<a href="models/edit/<?=$item['ChildModel']['id']?>">
							<img src="/img/models/<?=$item['ChildModel']['img'] ?>"></a>
						<div class="gallery_item_des">
							<div class="gallery_item_title">
								<a href="models/edit/<?=$item['ChildModel']['id']?>"><?=$item['ChildModel']['fio'] ?></a>
							</div>
							<div class="date_gallery">Номер #ID:<?=$item['ChildModel']['id'] ?></div>
						</div>
					</div>
					<a href="models/edit/<?=$item['ChildModel']['id']?>" class=" buttons">редактировать</a>
					
					<?php echo $this->Form->postLink('удалить', array('action' => 'admin_delete', $item['ChildModel']['id']), array('class' => 'admin buttons'), 'Подтвердите удаление'); ?>
					<a href="/admin/lookbooks/edit/<?=$item['ChildModel']['id']?>" class=" buttons">lookbook</a>
					<a href="" class="admin buttons">видео</a>
		

			</li>
	<?php endforeach ?>
</ul>