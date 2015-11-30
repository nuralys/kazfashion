	<div class="title admin_t">Добавление модели</div>
	
<?php 

echo $this->Form->create('ChildModel', array('type' => 'file'));
echo $this->Form->input('fio', array('label' => '', 'class' => 'admin_input_f model', 'placeholder' => 'ФИО'));
echo $this->Form->input('description', array('label' => '', 'id' => 'editor','placeholder' => 'Текст'));
echo $this->Form->input('date_berth', array('label' => 'Дата рождения:'));
echo $this->Form->input('growth', array('label' => '', 'class' => 'admin_input_f age', 'placeholder' => 'Рост'));
echo $this->Form->input('weight', array('label' => '', 'class' => 'admin_input_f age', 'placeholder' => 'Вес'));


?>
<div class="fileform">
						<div id="fileformlabel"></div>
							<div class="selectbutton">Обзор</div>
					
							<?php echo $this->Form->input('img', array('label' => '', 'type' => 'file', 'id' => 'LookbookImg')); ?>
						</div>

<?
	
	echo $this->Form->end('Добавить');
	?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>