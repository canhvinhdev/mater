<div class="supporters index">
	<h2><?php echo __('Supporters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('hotline'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($supporters as $supporter): ?>
	<tr>
		<td><?php echo h($supporter['Supporter']['id']); ?>&nbsp;</td>
		<td><?php echo h($supporter['Supporter']['status']); ?>&nbsp;</td>
		<td><?php echo h($supporter['Supporter']['name']); ?>&nbsp;</td>
		<td><?php echo h($supporter['Supporter']['email']); ?>&nbsp;</td>
		<td><?php echo h($supporter['Supporter']['hotline']); ?>&nbsp;</td>
		<td><?php echo h($supporter['Supporter']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $supporter['Supporter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $supporter['Supporter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $supporter['Supporter']['id']), array(), __('Are you sure you want to delete # %s?', $supporter['Supporter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Supporter'), array('action' => 'add')); ?></li>
	</ul>
</div>
