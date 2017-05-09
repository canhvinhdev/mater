<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="">Cấu hình</li>
				<li class="active">Trang danh mục sản phẩm</li>
			</ul><!-- /.breadcrumb -->

			
		</div>

		<div class="page-content">

			<div class="col-md-6">
				<img src="/img/index.png" class="img-responsive" alt="Image">
			</div>
			 <?php echo $this->Form->create('Bussiness', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<div class="col-sm-6">
				<h3 class="row header smaller lighter blue">
					<span class="col-xs-9"> Cấu hình trang danh mục sản phẩm </span><!-- /.col -->

					<span class="col-xs-3">
						<button type="submit" class="btn btn-default" style="    float: right;">Lưu</button>
					</span><!-- /.col -->
				</h3>

				<div id="accordion" class="accordion-style1 panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									&nbsp;Số lượng sản phẩm hiển thị
								</a>
							</h4>
						</div>
						

						<div class="panel-collapse collapse in" id="collapseOne">
							<div class="panel-body">
								<table class="table table-hover">
									
									<tbody>
										<tr>
											<td>Số lượng</td>
											<td>
											      <?php echo $this->Form->input('category_list', 
													    array( 
													        'type'=>'select',
													        'class'=>'form-control',
													        'options' => $options, 
													        'selected' =>(isset($Supporter[1]['Supporter']['category_list']))?$Supporter[1]['Supporter']['category_list']:'' )
													    );  ?>
												<!-- <select name="" id="input" class="form-control" required="required">
													<option value="1">12</option>
													<option value="2">18</option>
													<option value="3">24</option>
													<option value="4">30</option>
													<option value="5">36</option>													
												</select> -->
											</td>
										</tr>
									</tbody>
								</table>
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