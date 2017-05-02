<div class="techniques view">
<h2><?php echo __('Technique'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($technique['Technique']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($technique['Technique']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo h($technique['Technique']['property']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($technique['Technique']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($technique['Technique']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($technique['Product']['name'], array('controller' => 'products', 'action' => 'view', $technique['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Technique'), array('action' => 'edit', $technique['Technique']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Technique'), array('action' => 'delete', $technique['Technique']['id']), array(), __('Are you sure you want to delete # %s?', $technique['Technique']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
