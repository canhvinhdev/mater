			 <?php $bussiness = $this->requestAction('/app/bussiness');?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<address>
							<div class="widget-wrapper ">
								<div id="logo-footer">
									<a href="/">
										<img src="<?php echo $bussiness['logo']; ?>" alt="Isuzu Always beside you" class="img-responsive">
									</a>
								</div>
								<div class="inner about_us">
									<ul class="list-unstyled">
										<li>
											<i class="fa fa-home"></i> <?php echo $bussiness['name_store']; ?> <br>
											<i class="fa fa-home"></i> <?php echo $bussiness['address_store']; ?><br>
										</li>


										<li>
											<i class="fa fa-envelope-o"></i>  <a href="mailto:<?php echo $bussiness['email_store']; ?>">  <?php echo $bussiness['email_store']; ?></a>
										</li>


										<li>
											<i class="fa fa-phone"></i> <?php echo $bussiness['phone_store']; ?>
										</li>


										<li>
											<i class="fa fa-print"></i> <?php echo $bussiness['fax_store']; ?>
										</li>

									</ul>
								</div>
							</div>
						</address>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<address>
							<div class="widget-wrapper animated">
								<h3 class="title title_left">Liên kết</h3>
								<div class="inner">
									<ul class="list-unstyled list-styled">
										<li><a href="/">Trang chủ</a></li>
										<li><a href="/gioi_thieu">Giới thiệu</a></li>
										<li><a href="#about">Xe đang bán</a></li>
										<li><a href="#about">Tin tức</a></li>
										<li><a href="/contact">Liên hệ</a></li>
									</ul>
								</div>
							</div>
						</address>
					</div>
					<?php if($bussiness['map_status']==1):?>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<address>
							<div class="widget-wrapper ">
								<h3>Kết nối với chúng tôi</h3>
								<div class="maps">
									
									<iframe src="<?php echo $bussiness['map']; ?>" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</address>
					</div>
					<?php endif;?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 20px; border-top: 1px solid gray;">
						<div class="col-md-8 full-width" >
							<div id=" copyright"  style="">
								Copyright © 2017 . Thiết kế và phát triển bởi ...
							</div>
						</div>
						<div class=" col-md-4 social-ico">
							<a href=" <?php echo $bussiness['link_fb']; ?>" target="_blank">
								<i class="fa fa-facebook">

								</i>
							</a>					
							<a href=" <?php echo $bussiness['fax_store']; ?>" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>					
							<a href=" <?php echo $bussiness['link_twitter']; ?>" target="_blank">
								<i class="fa fa-google-plus"></i>
							</a>					
							<a href=" <?php echo $bussiness['link_edin']; ?>" target="_blank">
								<i class="fa fa-linkedin"></i>
							</a>										
							<a href=" <?php echo $bussiness['link_pinterest']; ?>" target="_blank">
								<i class="fa fa-pinterest"></i>
							</a>										
							<a href=" <?php echo $bussiness['link_youtube']; ?>" target="_blank">
								<i class="fa fa-youtube-play"></i>
							</a>																		</div>
						</div>
					</div>
				</div>