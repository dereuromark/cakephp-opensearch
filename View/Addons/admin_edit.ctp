<div class="page form">
<h2><?php echo __('Edit %s', __('Addon')); ?></h2>

<?php echo $this->Form->create('Addon');?>
	<fieldset>
 		<legend><?php echo __('Edit %s', __('Addon')); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('url');
		echo $this->Form->input('shortname');
		echo $this->Form->input('description');
		echo $this->Form->input('params');
		echo $this->Form->input('search_var');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<div class="actions">
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Addon.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Addon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List %s', __('Addons')), array('action' => 'index'));?></li>
	</ul>
</div>