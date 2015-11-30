<!-- <div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование Lookbook</h2>
	</div>
<?php 

//echo $this->Form->create('Lookbook', array('type' => 'file'));
//echo $this->Form->input('title', array('label' => 'Название:'));
?>

<div class="edit_bot">
<img src="/img/lookbook/thumbs/<?=$data['Lookbook']['img']?>">
	<div class="bot_r">
	<?
	//echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	//echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
</div> -->
<form action="/admin/lookbooks/add" id="LookbookAdminAddForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
	<div class="input text required"><label for="LookbookTitle"></label>
	<input name="data[Lookbook][title]" maxlength="255" type="text" id="LookbookTitle" placeholder="Название"required="required" class="admin_input_f model"></div>
	
	<div class="fileform">
					<div class="selectbutton">Обзор</div>
					<input id="LookbookImg" type="file" name="upload" />
				</div>


	<input type="hidden" name="data[Lookbook][model_id]" value="<?=$model_id ?>">
	<div class="submit"><input type="submit" value="Создать"></div>
</form>
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