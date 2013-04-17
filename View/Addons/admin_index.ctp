<div class="page index">
	<h2><?php echo __('Addons');?></h2>

	<table class="list">
		<tr>
		<th><?php echo $this->Paginator->sort('name');?></th>
		<th><?php echo $this->Paginator->sort('url');?></th>
		<th><?php echo $this->Paginator->sort('shortname');?></th>
		<th><?php echo $this->Paginator->sort('description');?></th>
		<th><?php echo $this->Paginator->sort('params');?></th>
		<th><?php echo $this->Paginator->sort('search_var');?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
<?php
$i = 0;
foreach ($addons as $addon) { ?>
	<tr>
		<td>
			<?php echo h($addon['Addon']['name']); ?>
		</td>
		<td>
			<?php if ($addon['Addon']['url']) {
				echo h($addon['Addon']['url']);
			} else {
				echo HTTP_BASE;
			} ?>
		</td>
		<td>
			<?php echo h($addon['Addon']['shortname']); ?>
		</td>
		<td>
			<?php echo h($addon['Addon']['description']); ?>
		</td>
		<td>
			<?php echo h($addon['Addon']['params']); ?>
		</td>
		<td>
			<?php echo h($addon['Addon']['search_var']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Format->icon('view'), array('admin' => false, 'action'=>'index', $addon['Addon']['name'], 'ext' => 'xml'), array('escape'=>false)); ?>
			<?php echo $this->OpenSearch->installLink($this->Format->cIcon('action_add.png', __('Install')), $addon['Addon']['name'], array('escape'=>false)); ?>
			<?php echo $this->Html->link($this->Format->icon('edit'), array('action'=>'edit', $addon['Addon']['id']), array('escape'=>false)); ?>
			<?php echo $this->Form->postLink($this->Format->icon('delete'), array('action'=>'delete', $addon['Addon']['id']), array('escape'=>false), __('Are you sure you want to delete # %s?', $addon['Addon']['id'])); ?>
		</td>
	</tr>
<?php } ?>
	</table>

	<div class="pagination-container">
<?php echo $this->element('Tools.pagination'); ?>
	</div>

</div>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New %s', __('Addon')), array('action' => 'add')); ?></li>
	</ul>
</div>