<table class="table table-bordered table-striped">
	<thead>
		<th><?= __('ID') ?></th>
		<th><?= __('Name') ?></th>
		<th><?= __('Slug') ?></th>
		<th><?= __('Actions') ?></th>
	</thead>
	<tbody>
		<?php foreach($types as $type) : ?>
		<tr>
			<td>
				<?= e(__($type->id)) ?>
			</td>
			<td>
				<?= e(__($type->name)) ?>
			</td>
			<td>
				<?= e(__($type->slug)) ?>
			</td>
			<td>
				<a href="<?= \Uri::create('admin/containers/container_type/'.$type->slug) ?>" class="btn btn-primary btn-small"><?= __('Edit') ?></a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>