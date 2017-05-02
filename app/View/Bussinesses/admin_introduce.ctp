<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="">Cấu hình</li>
				<li class="active">Trang giới thiệu</li>
			</ul><!-- /.breadcrumb -->

			
		</div>

		<div class="page-content">
			<?php echo $this->Form->create('Bussiness', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
		
			<div class="col-sm-12">
				<h3 class="row header smaller lighter blue">
					<span class="col-xs-3"> Cấu hình trang giới thiệu </span><!-- /.col -->

						<span class="col-xs-9">
						<button type="submit" class="btn btn-default" style="    float: right;">Lưu</button>
					</span><!-- /.col -->
				</h3>

				<div id="accordion" class="accordion-style1 panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									&nbsp;Nội dung trang giới thiệu
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse in" id="collapseOne">
							<div class="panel-body">
								<?php echo $this->Form->textarea('content', array('class' => 'ckeditor form-control ', 'value'=>$Introduce['Introduce']['content'])); ?>
								<!-- <textarea name="" id="input " class="form-control ckeditor" rows="3" required="required"></textarea> -->
							</div>
						</div>
					</div>

				
					
				</div>
			</div><!-- /.col -->
			<?php echo $this->Form->end(); ?>	

		</div>

		<!-- /.page-content -->
	</div>
</div><!-- /.main-content -->