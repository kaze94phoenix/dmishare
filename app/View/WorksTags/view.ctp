<div class="worksTags view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Works Tag'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Works Tag'), array('action' => 'edit', $worksTag['WorksTag']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Works Tag'), array('action' => 'delete', $worksTag['WorksTag']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $worksTag['WorksTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Works Tags'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Works Tag'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Works'), array('controller' => 'works', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Work'), array('controller' => 'works', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tags'), array('controller' => 'tags', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tag'), array('controller' => 'tags', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($worksTag['WorksTag']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Work'); ?></th>
		<td>
			<?php echo $this->Html->link($worksTag['Work']['title'], array('controller' => 'works', 'action' => 'view', $worksTag['Work']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tag'); ?></th>
		<td>
			<?php echo $this->Html->link($worksTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $worksTag['Tag']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tag Date'); ?></th>
		<td>
			<?php echo h($worksTag['WorksTag']['tag_date']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

