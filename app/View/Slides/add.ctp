<div class="slides form">
<?php echo $this->Form->create('Slide'); ?>
	<fieldset>
		<legend><?php echo __('Add Slide'); ?></legend>
	<?php
		echo $this->Form->input('image');
		echo $this->Form->input('publish');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Slides'), array('action' => 'index')); ?></li>
	</ul>
</div>
