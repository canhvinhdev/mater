<div id="content-1">
			<div class="container full-width">
				<div class="row">
					 <?php echo $this->Element('new_right'); ?>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
						<h2>Thông tin liên hệ</h2>
						<div class="maps-contact">
									<p></p>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.620271782319!2d105.82162411404002!3d21.007853393869613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9c7032b815901df8!2zTmhhzIAgc2HMgWNoIFRpw6rMgG4gUGhvbmcgVGjhu6d5IEzhu6Np!5e0!3m2!1svi!2s!4v1492708644232" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>	

						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						
							<div id="form-contact">
							<?php echo $this->Form->create('Contact', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
								<legend>Gửi liên hệ</legend>
							
								<div class="form-group">
									<?php echo $this->Form->input('name', array('class' => 'form-control','placeholder'=>'Họ tên','type'=>'text')); ?>
								</div>
								<div class="form-group">
									
									<?php echo $this->Form->input('company', array('class' => 'form-control','placeholder'=>'Công ty','type'=>'text')); ?>
								</div>
								<div class="form-group">
									
									<?php echo $this->Form->input('address', array('class' => 'form-control','placeholder'=>'Địa chỉ','type'=>'text')); ?>
								</div>
								<div class="form-group">
									
									<?php echo $this->Form->input('email', array('class' => 'form-control','placeholder'=>'Email của bạn','type'=>'email')); ?>
								</div>
								<div class="form-group">
									
									<?php echo $this->Form->input('phone', array('class' => 'form-control','placeholder'=>'Điện thoại','type'=>'number')); ?>
								</div>
								<div class="form-group">
									
									<?php echo $this->Form->input('fax', array('class' => 'form-control','placeholder'=>'Fax','type'=>'text')); ?>
								</div>
								<div class="form-group">
									
									<?php echo $this->Form->input('title', array('class' => 'form-control','placeholder'=>'Tiêu đề"','type'=>'text')); ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->textarea('content', array('class' => 'form-control limited col-xs-10 col-sm-5','id'=>'form-field-9')); ?>
								</div>
								
							
								<button type="submit" class="btn btn-primary">Gửi liên hệ</button>
								<button type="reset" class="btn btn-danger">Làm mới</button>
							<?php echo $this->Form->end(); ?>	
							</div>
						</div>
						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<address>
							<div class="widget-wrapper ">
								<div id="logo-footer-1" >
									<a href="" >
										<h3 style="color: red">Công ty THHH REALINE</h3>
									</a>
								</div>
								<div class="inner about_us">
									<ul class="list-unstyled">
										<li>
											<i class="fa fa-home"></i> Hà Nội: 175, Tây Sơn Đống Đa. <br><i class="fa fa-home"></i> Hà Nội: 175, Tây Sơn Đống Đa.<br><i class="fa fa-home"></i> Hà Nội: 175, Tây Sơn Đống Đa.
										</li>


										<li>
											<i class="fa fa-envelope-o"></i>  <a href="mailto:cskh@gmail.vn">  cskh@gmail.vn</a>
										</li>


										<li>
											<i class="fa fa-phone"></i>  Hà Nội: 097789697
										</li>


										<li>
											<i class="fa fa-print"></i>  HCM:  097789697
										</li>

									</ul>
								</div>
							</div>
						</address>
						</div>
					</div>
					
				</div>
			</div>
		</div>