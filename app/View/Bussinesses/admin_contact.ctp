<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="">Cấu hình</li>
				<li class="active">Trang liên hệ</li>
			</ul><!-- /.breadcrumb -->

			
		</div>

		<div class="page-content">

			<div class="col-md-6">
				<img src="/img/index.png" class="img-responsive" alt="Image">
			</div>
			<?php echo $this->Form->create('Bussiness', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
			<div class="col-sm-6">
				<h3 class="row header smaller lighter blue">
					<span class="col-xs-9"> Cấu hình trang liên hệ </span><!-- /.col -->

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
									&nbsp;Google map
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse in" id="collapseOne">
							<div class="panel-body">
								<table>
									<tbody><tr>
										<td><label for="show_google_maps">Hiển thị Google Maps?</label></td>
										<td><?php 
													$checked = ($bussiness['Bussiness']['map_status'] == true) ? 'checked' : '';	
													echo $this->Form->input('map_status', array('type'=>'checkbox','options'=>$bussiness['Bussiness']['map_status'],'checked'=>$checked));?> </td>
									</tr>
									<tr>
										<td><label for="google_maps_code">Nhúng mã</label></td>
										<td>
											<?php echo $this->Form->textarea('map', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['map'])); ?>
										<!-- <textarea rows="4" cols="50" id="google_maps_code" name="google_maps_code" class="text long" style="margin: 0px; height: 93px; width: 256px;" data-bind="value: Data().ThemeFileSettingData().FileContent().current()['google_maps_code']"></textarea> --></td>
									</tr>
									<tr>
										<td colspan="2"><p>Xem <a target="_blank" href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=vi">cách lấy mã Google Map</a> để được hướng dẫn cách thêm Google Map vị trí của bạn theo các tài liệu cung cấp</p></td>
									</tr>
								</tbody></table>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									&nbsp;Thông tin liên hệ
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse" id="collapseTwo">
							<div class="panel-body">
								<table>
									<tbody><tr>
										<td class="sf-w">
											<label for="footer_text">Tiêu đề</label>
										</td>
										<td>
											<?php echo $this->Form->input('title', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['title'])); ?>
										</td>
									</tr>

									<tr>
										<td class="sf-w">
											<label for="footer_company">Công ty:</label>
										</td>
										<td>
											<?php echo $this->Form->input('company', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['company'])); ?>
										</td>
									</tr>
									<tr>
										<td class="sf-w">
											<label for="footer_address">Địa chỉ:</label>
										</td>
										<td>
											<?php echo $this->Form->input('company_address', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['company_address'])); ?>
										</td>
									</tr>
									<tr>
										<td class="sf-w">
											<label for="footer_phone">Điện thoại:</label>
										</td>
										<td>
											<?php echo $this->Form->input('company_phone', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['company_phone'])); ?>
									</tr>
									<tr>
										<td class="sf-w">
											<label for="footer_email">Email:</label>
										</td>
										<td>
											<?php echo $this->Form->input('company_email', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['company_email'])); ?>
										</td>
									</tr>
									<tr>
										<td class="sf-w">
											<label for="footer_email">Fax:</label>
										</td>
										<td>
											<?php echo $this->Form->input('company_fax', array('label' => false,'class' => 'form-control','value'=>$bussiness['Bussiness']['company_fax'])); ?>
										</td>
									</tr>
								</tbody></table>
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