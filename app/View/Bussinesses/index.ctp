<div class="bussinesses index">
	<h2><?php echo __('Bussinesses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('logo'); ?></th>
			<th><?php echo $this->Paginator->sort('favicon'); ?></th>
			<th><?php echo $this->Paginator->sort('number_product'); ?></th>
			<th><?php echo $this->Paginator->sort('name_store'); ?></th>
			<th><?php echo $this->Paginator->sort('address_store'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_store'); ?></th>
			<th><?php echo $this->Paginator->sort('email_store'); ?></th>
			<th><?php echo $this->Paginator->sort('fax_store'); ?></th>
			<th><?php echo $this->Paginator->sort('link_fb'); ?></th>
			<th><?php echo $this->Paginator->sort('link_youtube'); ?></th>
			<th><?php echo $this->Paginator->sort('link_twitter'); ?></th>
			<th><?php echo $this->Paginator->sort('link_g'); ?></th>
			<th><?php echo $this->Paginator->sort('link_edin'); ?></th>
			<th><?php echo $this->Paginator->sort('link_pinterest'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bussinesses as $bussiness): ?>
	<tr>
		<td><?php echo h($bussiness['Bussiness']['id']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['logo']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['favicon']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['number_product']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['name_store']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['address_store']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['phone_store']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['email_store']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['fax_store']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['link_fb']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['link_youtube']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['link_twitter']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['link_g']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['link_edin']); ?>&nbsp;</td>
		<td><?php echo h($bussiness['Bussiness']['link_pinterest']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bussiness['Bussiness']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bussiness['Bussiness']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bussiness['Bussiness']['id']), array(), __('Are you sure you want to delete # %s?', $bussiness['Bussiness']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bussiness'), array('action' => 'add')); ?></li>
	</ul>
</div>
