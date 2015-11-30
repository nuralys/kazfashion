	<div class="title admin_t">Редактирование новости</div>
<?php 

echo $this->Form->create('Gallery', array('type' => 'file', ));
echo $this->Form->input('title', array('label' => '', 'class' => 'admin_input_f model ','placeholder' => 'Название'));
?>

<div class="edit_bot">
<img src="/img/gallery/thumbs/<?=$data['Gallery']['img']?>">
	
					
							<?php echo $this->Form->input('img', array('label' => '', 'type' => 'file', 'id' => 'LookbookImg')); ?>
			
</div>

	<?php echo $this->Form->end('Редактировать');?>
</div>