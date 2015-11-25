<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование фото</h2>
	</div>
<?php 

echo $this->Form->create('Gallery', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
?>

<div class="edit_bot">
<img src="/img/gallery/thumbs/<?=$data['Gallery']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>

</div>