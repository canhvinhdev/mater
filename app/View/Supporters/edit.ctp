<div class="supporters form">
<?php echo $this->Form->create('Supporter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Supporter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('hotline');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Supporter.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Supporter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Supporters'), array('action' => 'index')); ?></li>
	</ul>
</div>
