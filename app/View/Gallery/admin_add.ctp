	<div class="title admin_t">Добавление фото</div>
<?php 
echo $this->Form->create('Gallery', array('type' => 'file'));
echo $this->Form->input('title', array('label' => '', 'class' => 'admin_input_f model ','placeholder' => 'Название'));?>
<div class="input select">
	<label for="GalleryAlbumId">Альбом:</label>
	<select name="data[Gallery][album_id]" id="GalleryAlbumId" required="required">
	<option>Выберите альбом</option>
		<?php foreach($albums as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<?php
echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>