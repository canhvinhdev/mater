<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="">Cấu hình</li>
				<li class="active">Trang chủ</li>
			</ul><!-- /.breadcrumb -->

			
		</div>

		<div class="page-content">

			<div class="col-md-6">
				<img src="/img/index.png" class="img-responsive" alt="Image">
			</div>
			 <?php echo $this->Form->create('Bussiness', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
				<div class="col-sm-6">
					<h3 class="row header smaller lighter blue">
						<span class="col-xs-9"> Cấu hình trang chủ </span><!-- /.col -->

						<span class="col-xs-3">
							<button type="Submit" class="btn btn-default" style=" float: right;">Lưu</button>
						</span><!-- /.col -->
					</h3>

					<div id="accordion" class="accordion-style1 panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
										&nbsp;Đầu trang
									</a>
								</h4>
							</div>

							<div class="panel-collapse collapse in" id="collapseOne">
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Logo và Favicon</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Logo</td>
												<td><?php echo $this->Form->input('logo', array('label' => false,'class' => 'form-control', 'id' => 'thumbnail','value'=>(isset($bussiness['Bussiness']['logo']))?$bussiness['Bussiness']['logo']:'')); ?>
												<input type="button" value="Chọn..." onclick="BrowseServer();" class="form-control" /></td> 
											</tr>
											<tr>
												<td>Favicon</td>

												 <td><?php echo $this->Form->input('favicon', array('label' => false,'class' => 'form-control', 'id' => 'thumbnail1','value'=> (isset($bussiness['Bussiness']['logo']))?$bussiness['Bussiness']['favicon']:'')); ?>
												<input type="button" value="Chọn..." onclick="BrowseServer1();" class="form-control" /></td> 
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
										&nbsp;Slide
									</a>
								</h4>
							</div>

							<div class="panel-collapse collapse" id="collapseTwo">
								<div class="panel-body">
									<table class="table table-hover">
										
										<tbody>
											<tr>
												<td>Slide 1</td>
												<td><?php echo $this->Form->input('Slide.0.thumbnail', array('label' => false,'class' => 'form-control', 'id' => 'thumbnail2','value'=>(isset($slide[0]['Slide']['thumbnail']))?$slide[0]['Slide']['thumbnail']:'')); ?>
												<input type="button" value="Chọn..." onclick="BrowseServer2	();" class="form-control" /></td> 

												<td><?php echo $this->Form->input('Slide.0.name', array('label' => false,'class' => 'form-control','value'=>(isset($slide[0]['Slide']['name']))?$slide[0]['Slide']['name']:'')); ?></td>
											</tr>
											<tr>
												<td>Slide 2</td>
												<td><?php echo $this->Form->input('Slide.1.thumbnail', array('label' => false,'class' => 'form-control', 'id' => 'thumbnail3','value'=>(isset($slide[1]['Slide']['thumbnail']))?$slide[1]['Slide']['thumbnail']:'')); ?>
												<input type="button" value="Chọn..." onclick="BrowseServer3();" class="form-control" /></td> 
												<td><?php echo $this->Form->input('Slide.1.name', array('label' => false,'class' => 'form-control','value'=>(isset($slide[1]['Slide']['name']))?$slide[1]['Slide']['name']:'')); ?></td>
											</tr>
											<tr>
												<td>Slide 3</td>
												<td><?php echo $this->Form->input('Slide.2.thumbnail', array('label' => false,'class' => 'form-control', 'id' => 'thumbnail4','value'=>(isset($slide[2]['Slide']['thumbnail']))?$slide[2]['Slide']['thumbnail']:'')); ?>
												<input type="button" value="Chọn..." onclick="BrowseServer4();" class="form-control" /></td> 
												<td><?php echo $this->Form->input('Slide.2.name', array('label' => false,'class' => 'form-control','value'=>(isset($slide[2]['Slide']['name']))?$slide[2]['Slide']['name']:'')); ?></td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
										&nbsp;Khối bên trái
									</a>
								</h4>
							</div>

							<div class="panel-collapse collapse" id="collapseThree">
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Khối tin tức nổi bật</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Số lượng hiển thị</td>
												<td>
													<?php echo $this->Form->input('number_new', 
													    array( 
													        'type'=>'select',
													        'class'=>'form-control',
													        'options' => $options, 
													        'selected' => (isset($bussiness['Bussiness']['number_new']))?$bussiness['Bussiness']['number_new']:'')
													    );?>
												</td>
											</tr>
										</tbody>
									</table>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Hỗ trợ viên</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr class="active">
												<td >Hỗ trợ viên 1</td>
												<td>

												</td>
											</tr>
											<tr>
												<td>Hiển thị</td>
												<td>
													<?php 
													$checked='';
													if(isset($Supporter[0]['Supporter']['status'])){
														$checked = ($Supporter[0]['Supporter']['status'] == true) ? 'checked' : '';	
													}
													echo $this->Form->input('Supporter.0.publish1', array('class' => '','type'=>'checkbox','options'=>(isset($Supporter[0]['Supporter']['status']))?$Supporter[0]['Supporter']['status']:'','checked'=>$checked)); ?> Bật
												</td>
											</tr>
											<tr>
												<td>Tên hỗ trợ viên</td>
												<td>
													<?php echo $this->Form->input('Supporter.0.name1', array('label' => false,'class' => 'form-control','value'=>'canh vinh','value'=>(isset($Supporter[0]['Supporter']['name']))?$Supporter[0]['Supporter']['name']:'')); ?>
													
												</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>
													<?php echo $this->Form->input('Supporter.0.email1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[0]['Supporter']['email']))?$Supporter[0]['Supporter']['email']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Hotline</td>
												<td>
													<?php echo $this->Form->input('Supporter.0.hotline1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[0]['Supporter']['hotline']))?$Supporter[0]['Supporter']['hotline']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Địa chỉ</td>
												<td>
													<?php echo $this->Form->input('Supporter.0.address1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[0]['Supporter']['address']))?$Supporter[0]['Supporter']['address']:'')); ?>
												</td>
											</tr>
											<hr>
											<tr class="active">
												<td>Hỗ trợ viên 2</td>
												<td>

												</td>
											</tr>
											<tr>
												<td>Hiển thị</td>
												<td>
													<?php 
													$checked='';
													if(isset($Supporter[1]['Supporter']['status'])){
														$checked = ($Supporter[1]['Supporter']['status'] == true) ? 'checked' : '';	
													}
													echo $this->Form->input('Supporter.1.publish1', array('class' => '','type'=>'checkbox','options'=>(isset($Supporter[1]['Supporter']['status']))?$Supporter[1]['Supporter']['status']:'','checked'=>$checked)); ?> Bật
												</td>
											</tr>
											<tr>
												<td>Tên hỗ trợ viên</td>
												<td>
													<?php echo $this->Form->input('Supporter.1.name1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[1]['Supporter']['name']))?$Supporter[1]['Supporter']['name']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>
													<?php echo $this->Form->input('Supporter.1.email1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[1]['Supporter']['email']))?$Supporter[1]['Supporter']['email']:'')); ?>
											</tr>
											<tr>
												<td>Hotline</td>
												<td>
													<?php echo $this->Form->input('Supporter.1.hotline1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[1]['Supporter']['hotline']))?$Supporter[1]['Supporter']['hotline']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Địa chỉ</td>
												<td>
													<?php echo $this->Form->input('Supporter.1.address1', array('label' => false,'class' => 'form-control','value'=>(isset($Supporter[1]['Supporter']['address']))?$Supporter[1]['Supporter']['address']:'')); ?>
												</td>
											</tr>
											<hr>
										</tbody>
									</table>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Fanpage facebook</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Nhúng mã:</td>
												<td>
												<?php echo $this->Form->textarea('fanpage', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['fanpage']))?$bussiness['Bussiness']['fanpage']:'')); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						 <div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
										<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
										&nbsp;Khối bên phải
									</a>
								</h4>
							</div>

							<div class="panel-collapse collapse" id="collapseFour">
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Khối sản phẩm</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Số lượng hiển thị</td>
												<td>
												<?php echo $this->Form->input('number_product', 
													    array( 
													        'type'=>'select',
													        'class'=>'form-control',
													        'options' => $options, 
													        'selected' =>(isset($bussiness['Bussiness']['number_product']))?$bussiness['Bussiness']['number_product']:'')
													    );?>
													
												</td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>
						  </div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
										<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
										&nbsp;Cuối trang
									</a>
								</h4>
							</div>

							<div class="panel-collapse collapse" id="collapseFive">
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Khối chân trang 1</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tên cửa hàng</td>
												<td>
													<?php echo $this->Form->input('name_store', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['name_store']))?$bussiness['Bussiness']['name_store']:'')); ?>
													
												</td>
											</tr>
											<tr>
												<td>Địa chỉ cửa hàng</td>
												<td>
													<?php echo $this->Form->input('address_store', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['address_store']))?$bussiness['Bussiness']['address_store']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Số điện thoại 1</td>
												<td>
													<?php echo $this->Form->input('phone_store', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['phone_store']))?$bussiness['Bussiness']['phone_store']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>
													<?php echo $this->Form->input('email_store', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['email_store']))?$bussiness['Bussiness']['email_store']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>Fax</td>
												<td>
													<?php echo $this->Form->input('fax_store', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['fax_store']))?$bussiness['Bussiness']['fax_store']:'')); ?>
												</td>
											</tr>
										</tbody>
									</table>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Khối chân trang 2</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>link_fb</td>
												<td>
													<?php echo $this->Form->input('link_fb', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['link_fb']))?$bussiness['Bussiness']['link_fb']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>link_youtube</td>
												<td>
													<?php echo $this->Form->input('link_youtube', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['link_youtube']))?$bussiness['Bussiness']['link_youtube']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>link_twitter</td>
												<td>
													<?php echo $this->Form->input('link_twitter', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['link_twitter']))?$bussiness['Bussiness']['link_twitter']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>link_G+</td>
												<td>
													<?php echo $this->Form->input('link_G', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['link_g']))?$bussiness['Bussiness']['link_g']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>link_edin</td>
												<td>
													<?php echo $this->Form->input('link_edin', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['link_edin']))?$bussiness['Bussiness']['link_edin']:'')); ?>
												</td>
											</tr>
											<tr>
												<td>link_pinterest</td>
												<td>
													<?php echo $this->Form->input('link_pinterest', array('label' => false,'class' => 'form-control','value'=>(isset($bussiness['Bussiness']['link_pinterest']))?$bussiness['Bussiness']['link_pinterest']:'')); ?>
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