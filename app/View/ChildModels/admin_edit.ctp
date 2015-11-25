<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование Модели</h2>
	</div>
<?php 

echo $this->Form->create('ChildModel', array('type' => 'file'));
echo $this->Form->input('fio', array('label' => 'Название:'));
echo $this->Form->input('description', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('date_berth', array('label' => 'Дата рождения:'));
echo $this->Form->input('growth', array('label' => 'Рост:'));
echo $this->Form->input('weight', array('label' => 'Вес:'));
?>

<div class="edit_bot">
<img src="/img/models/thumbs/<?=$data['ChildModel']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>