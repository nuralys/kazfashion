<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление фото</h2>
	</div>
<?php 
echo $this->Form->create('Gallery', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));?>
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
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>