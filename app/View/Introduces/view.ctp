<div class="introduces view">
<h2><?php echo __('Introduce'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($introduce['Introduce']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($introduce['Introduce']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($introduce['Introduce']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($introduce['Introduce']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Introduce'), array('action' => 'edit', $introduce['Introduce']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Introduce'), array('action' => 'delete', $introduce['Introduce']['id']), array(), __('Are you sure you want to delete # %s?', $introduce['Introduce']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Introduces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Introduce'), array('action' => 'add')); ?> </li>
	</ul>
</div>
