<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование альбома</h2>
	</div>
<?php 

echo $this->Form->create('Album', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('created', array('label' => 'Дата:'));?>

<div class="edit_bot">
<img src="/img/album/thumbs/<?=$data['Album']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>

</div>