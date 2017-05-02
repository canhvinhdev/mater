<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="active">Sửa nhóm sản phẩm mới</li>
			</ul><!-- /.breadcrumb -->
		</div>
		<div class="page-content">
					<div class="page-content">

						<div class="page-header">
							<h1>
								Sửa nhóm sản phẩm mới
								
							</h1>

						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								 <?php echo $this->Form->create('Category', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tên nhóm sản phẩm mới</label>

										<div class="col-sm-9">
											 <?php echo $this->Form->input('name', array('class' =>'col-xs-10 col-sm-5','id'=>'form-field-1','placeholder'=>'Nhập tiêu đề nhóm bài viết')); ?>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Đường dẫn tôi ưu Seo</label>

										<div class="col-sm-9">
											 <?php echo $this->Form->input('slug', array('class' =>'col-xs-10 col-sm-5','id'=>'form-field-1','placeholder'=>'Nhập đường dẫn')); ?>
										</div>
									</div>								
									

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mô tả</label>

										<div class="col-sm-9">
										 <?php echo $this->Form->textarea('description', array('class' => 'form-control limited ckeditor col-xs-10 col-sm-10','id'=>'form-field-9','maxlength'=>'50')); ?>
								
											
										</div>
									</div>

									

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Hiển thị</label>

										<div class="col-sm-9">
											
													<label>
														<?php echo $this->Form->input('publish', array('class' => 'ace ace-switch','type'=>'checkbox')); ?>
														<span class="lbl"></span>
													</label>
										
											<div class="space-2"></div>

											<div class="help-block" id="input-span-slider"></div>
										</div>
									</div>


									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Thẻ từ khóa:</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('meta_keyword', array('class' =>'col-xs-10 col-sm-5','id'=>'form-field-1','placeholder'=>'key word','data-placement'=>'bottom','type'=>'text','data-rel'=>'tooltip')); ?>
											
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Thẻ mô tả:</label>

										<div class="col-sm-9">
											<?php echo $this->Form->textarea('meta_description', array('class' => 'form-control limited col-xs-10 col-sm-5','id'=>'form-field-9','maxlength'=>'50')); ?>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Sửa nhóm sản phẩm
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Làm mới
											</button>
										</div>
									</div>

									
				
									</div>
								<?php echo $this->Form->end(); ?>				
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
		
		</div>
			
		<!-- /.page-content -->
	</div>
</div><!-- /.main-content -->