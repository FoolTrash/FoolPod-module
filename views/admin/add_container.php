<div class="well">

<p><?= __('Notice that if a container with the same version is inserted, it will replace the previous and its file.') ?></p>

<?= Form::open(['enctype' => 'multipart/form-data', 'onsubmit' => 'fuel_set_csrf_token(this);']) ?>
<?= Form::hidden(\Config::get('security.csrf_token_key'), \Security::fetch_token()); ?>
<input type="file" name="container">
<br/>
<label for="form_hidden"><input id="form_hidden" type="checkbox" name="hidden"> <?= __('Hide from public') ?></label>
<br/>
<input type="submit" value="submit" class="btn btn-primary">
<?= Form::close(); ?>

</div>