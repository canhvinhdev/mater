<div class="techniques index">
	<h2><?php echo __('Techniques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('property'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('detail'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($techniques as $technique): ?>
	<tr>
		<td><?php echo h($technique['Technique']['id']); ?>&nbsp;</td>
		<td><?php echo h($technique['Technique']['name']); ?>&nbsp;</td>
		<td><?php echo h($technique['Technique']['property']); ?>&nbsp;</td>
		<td><?php echo h($technique['Technique']['value']); ?>&nbsp;</td>
		<td><?php echo h($technique['Technique']['detail']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($technique['Product']['name'], array('controller' => 'products', 'action' => 'view', $technique['Product']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $technique['Technique']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $technique['Technique']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $technique['Technique']['id']), array(), __('Are you sure you want to delete # %s?', $technique['Technique']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Technique'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
