<div class="pictures form">
<?php echo $this->Form->create('Picture'); ?>
	<fieldset>
		<legend><?php echo __('Add Picture'); ?></legend>
	<?php
		echo $this->Form->input('image');
		echo $this->Form->input('title');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?></li>
	</ul>
</div>
