<div class="bussinesses form">
<?php echo $this->Form->create('Bussiness'); ?>
	<fieldset>
		<legend><?php echo __('Add Bussiness'); ?></legend>
	<?php
		echo $this->Form->input('logo');
		echo $this->Form->input('favicon');
		echo $this->Form->input('number_product');
		echo $this->Form->input('name_store');
		echo $this->Form->input('address_store');
		echo $this->Form->input('phone_store');
		echo $this->Form->input('email_store');
		echo $this->Form->input('fax_store');
		echo $this->Form->input('link_fb');
		echo $this->Form->input('link_youtube');
		echo $this->Form->input('link_twitter');
		echo $this->Form->input('link_g');
		echo $this->Form->input('link_edin');
		echo $this->Form->input('link_pinterest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bussinesses'), array('action' => 'index')); ?></li>
	</ul>
</div>
