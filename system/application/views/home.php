<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
		type="text/css" media="all">
</head>
<body>

<div>

	<?php if(Current_User::user()): ?>
		<h1>Hello <em><?php echo Current_User::user()->username; ?></em>.</h1>
		<h2><?php echo anchor('logout','Logout'); ?></h2>
		<hr />
		<h3><?php echo anchor('accounts','View Accounts'); ?></h3>
		<h3><?php echo anchor('add_account_form','Add Account'); ?></h3>
		
	<?php else: ?>
		<h2>New Users: <?php echo anchor('signup','Create an Account'); ?>.</h2>
		<h2>Members: <?php echo anchor('login','Login'); ?>.</h2>
	<?php endif; ?>

</div>

</body>
</html>
