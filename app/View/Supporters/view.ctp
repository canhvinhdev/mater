<div class="supporters view">
<h2><?php echo __('Supporter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supporter['Supporter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($supporter['Supporter']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($supporter['Supporter']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($supporter['Supporter']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotline'); ?></dt>
		<dd>
			<?php echo h($supporter['Supporter']['hotline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($supporter['Supporter']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supporter'), array('action' => 'edit', $supporter['Supporter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supporter'), array('action' => 'delete', $supporter['Supporter']['id']), array(), __('Are you sure you want to delete # %s?', $supporter['Supporter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supporters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supporter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
