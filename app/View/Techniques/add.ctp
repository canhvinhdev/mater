<div class="techniques form">
<?php echo $this->Form->create('Technique'); ?>
	<fieldset>
		<legend><?php echo __('Add Technique'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('property');
		echo $this->Form->input('value');
		echo $this->Form->input('detail');
		echo $this->Form->input('product_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Techniques'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
