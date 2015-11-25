<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление модели</h2>
	</div>
<?php 

echo $this->Form->create('ChildModel', array('type' => 'file'));
echo $this->Form->input('fio', array('label' => 'ФИО:'));
echo $this->Form->input('description', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('date_berth', array('label' => 'Дата рождения:'));
echo $this->Form->input('growth', array('label' => 'Рост:'));
echo $this->Form->input('weight', array('label' => 'Вес:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>