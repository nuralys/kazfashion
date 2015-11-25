<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление фото в Lookbook</h2>
	</div>
<?php 

echo $this->Form->create('Lookbook', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>