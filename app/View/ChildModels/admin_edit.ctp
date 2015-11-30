	<div class="title admin_t">александрова луиза василиевна</div>
<?php 

echo $this->Form->create('ChildModel', array('type' => 'file'));?>
<div class="model_info_img">
					<div class="model_item_container">
						<div class="model_item">
							
								<img src="/img/models/thumbs/<?=$data['ChildModel']['img']?>">
						</div>
						<div class="fileform">
						<div id="fileformlabel"></div>
							<div class="selectbutton">Обзор</div>
					
							<?php echo $this->Form->input('img', array('label' => '', 'type' => 'file', 'id' => 'LookbookImg')); ?>
						</div>
					</div>
				</div>
				<div class="model_info">
<?php
echo $this->Form->input('fio', array('label' => '', 'class' => 'admin_input_f model'));
echo $this->Form->input('description', array('label' => '', 'id' => 'editor'));
echo $this->Form->input('date_berth', array('label' => 'Дата рождения:'));
echo $this->Form->input('growth', array('label' => '', 'class' => 'admin_input_f age', 'placeholder' => 'Рост'));
echo $this->Form->input('weight', array('label' => '', 'class' => 'admin_input_f age', 'placeholder' => 'Вес'));
?>
	
</div>

<?
	
	echo $this->Form->end('Редактировать');
	?>



<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>