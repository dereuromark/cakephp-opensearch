<div class="page form">
<h2><?php echo __('Add %s', __('Addon')); ?></h2>

<?php echo $this->Form->create('Addon');?>
	<fieldset>
 		<legend><?php echo __('Add %s', __('Addon')); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List %s', __('Addons')), array('action' => 'index'));?></li>
	</ul>
</div>