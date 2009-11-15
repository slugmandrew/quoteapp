<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all">

	<title>Add Account</title>
</head>
<body>

<div id="signup_form">

	<p class="heading">New Account</p>

	<?php echo form_open('account/create'); ?>

	<?php echo validation_errors('<p class="error">','</p>'); ?>
	
	<p>
		<label for="name">Account name: </label>
		<?php echo form_input('name', set_value('name')); ?>
		
	</p>
	
	<p>
		<?php echo form_submit('submit','Create account'); ?>
	</p>
	
	<?php echo form_close(); ?>
	
	<p>
		<?php echo anchor('home','Home'); ?>
	</p>
	
</div>

</body>
</html>
