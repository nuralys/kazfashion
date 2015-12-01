
<form action="/admin/lookbooks/add" id="LookbookAdminAddForm" enctype="multipart/form-data" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><div class="input text required"><label for="LookbookTitle">Название:</label><input name="data[Lookbook][title]" maxlength="255" type="text" id="LookbookTitle" required="required"></div><div class="input file"><label for="LookbookImg">Изображение:</label><input type="file" name="data[Lookbook][img]" id="LookbookImg"></div><input type="hidden" name="data[Lookbook][model_id]" value="<?=$model_id ?>"><div class="submit"><input type="submit" value="Создать"></div></form>
<ul>
	<?php foreach($data as $item): ?>
		<li class="admin_lookbook">
		<div class="admin_lookbook_container">
		<img src="/img/lookbook/thumbs/<?=$item['Lookbook']['img'] ?>" width="100px">  
	</div>
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Lookbook']['id']), array('class' => 'look_del  buttons'),  'Подтвердите удаление'); ?>
			</li>
	<?php endforeach ?>
</ul>