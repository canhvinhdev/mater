<div class="bussinesses view">
<h2><?php echo __('Bussiness'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Favicon'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['favicon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Product'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['number_product']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Store'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['name_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Store'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['address_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Store'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['phone_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Store'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['email_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax Store'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['fax_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Fb'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['link_fb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Youtube'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['link_youtube']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Twitter'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['link_twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link G'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['link_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Edin'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['link_edin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Pinterest'); ?></dt>
		<dd>
			<?php echo h($bussiness['Bussiness']['link_pinterest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bussiness'), array('action' => 'edit', $bussiness['Bussiness']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bussiness'), array('action' => 'delete', $bussiness['Bussiness']['id']), array(), __('Are you sure you want to delete # %s?', $bussiness['Bussiness']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bussinesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bussiness'), array('action' => 'add')); ?> </li>
	</ul>
</div>
