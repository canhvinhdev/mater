<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="active">Quản lý người dùng</li>
			</ul><!-- /.breadcrumb -->

		
		</div>

		


		<div class="page-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
							   Thêm người dùng
								
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								 <?php echo $this->Form->create('User', array('enctype'=>'multipart/form-data','type'=>'file','role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tên tài khoản</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('username', array('class' =>'col-xs-10 col-sm-5','id'=>'form-field-1','placeholder'=>'Nhập tên tài khoản')); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mật khẩu</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('password', array('class' =>'col-xs-10 col-sm-5','id'=>'form-field-1','placeholder'=>'Nhập mật khẩu','type'=>'password')); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Tên người dùng </label>

										<div class="col-sm-9">
											<?php 
											echo $this->Form->input('name', array('class' => 'chosen-select form-control')); ?>
										</div>
									</div>
									
									<div class="space-4"></div>


									<div class="space-4"></div>

									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">email</label>

										<div class="col-sm-9">
										<?php echo $this->Form->input('email', array('class' =>'col-xs-10 col-sm-5','placeholder'=>'Nhập email','type'=>'email')); ?>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Thêm bài viết
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									
				
									</div>
								<?php echo $this->Form->end(); ?>						
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
		
		</div>