<div class="teachers form">
<?php echo $this->Form->create('Teacher'); ?>
	<fieldset>
		<legend><?php echo __('Editar Profesor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label'=>'Nombre'));
		echo $this->Form->input('last_name', array('label'=>'Apellido'));
		echo $this->Form->input('cv', array('label'=>'Curriculum Vitae'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Teacher.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Teacher.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listado de Profesores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado de Cursos'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Curso'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
