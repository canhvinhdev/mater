<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Đăng nhập quản trị</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<?php
			echo $this->Html->meta('icon');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<!-- bootstrap & fontawesome -->
		<?php echo $this->Html->css('/assets/css/bootstrap.min'); ?>
		<?php echo $this->Html->css('/assets/font-awesome/4.5.0/css/font-awesome.min'); ?>
		<?php echo $this->Html->css('/assets/css/fonts.googleapis.com'); ?>
		<?php echo $this->Html->css('/assets/css/ace.min'); ?>
		<?php echo $this->Html->css('/assets/css/ace-rtl.min'); ?>
	</head>
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<a href="https://web.facebook.com/ITec-1944617972437287/"><span class="red">ITec</span></a>
									<span class="white" id="id-text2">Web</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Information Technology</h4>
							</div>
							<div class="space-6"></div>
							<!-- content	 -->
								<?php echo $this->fetch('content'); ?>					
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<?php echo $this->Html->script('/assets/js/jquery-2.1.4.min'); ?>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

	</body>
</html>
