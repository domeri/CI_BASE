<!doctype html>
<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	<title>...</title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?=BASE;?>data/login/css/reset.css">
	<link rel="stylesheet" href="<?=BASE;?>data/login/css/animate.css">
	<link rel="stylesheet" href="<?=BASE;?>data/login/css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<h1><?php echo lang('login_heading');?></h1>
		<p><?php echo lang('login_subheading');?></p>
		
		<div id="infoMessage"><?php echo $message;?></div>
		
	<div id="container">
		
		
		<?php echo form_open("auth/login");?>
		
		<?php echo lang('login_identity_label', 'identity');?>
    	<?php echo form_input($identity);?>
	
		<?php echo lang('login_password_label', 'password');?>
		<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
    	<?php echo form_input($password);?>
		
		
		<div id="lower">
		
		<?php echo lang('login_remember_label', 'remember', array('class'=>'check'));?>
    	<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
		
		<?php echo form_submit('submit', lang('login_submit_btn'));?>
		
		</div>
		
		<?php echo form_close();?>

		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>