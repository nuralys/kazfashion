	<div class="title admin_t">Добавление Фотосессии</div>
<?php 
echo $this->Form->create('Album', array('type' => 'file'));
echo $this->Form->input('title', array('label' => '', 'class' => 'admin_input_f model ','placeholder' => 'Название'));
echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->input('created', array('label' => 'Дата'));
echo $this->Form->end('Создать');
?>
</div>