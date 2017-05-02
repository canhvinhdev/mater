<?php $menu = $this->requestAction('/app/menu');
 

?>
<div class="container hidden-lg hidden-md">
			<div id="nav-mobile ">
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<nav class="nav-mobile-setting" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->


							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="">
								<ul class="nav navbar-nav">
									<li><a href="/">Trang chủ</a></li>
									<li><a href="#news">Giới thiệu</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Xe đang bán <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="#">Loại xe đang bán 1</a>
											</li>			
											<li><a href="#">Loại xe đang bán 1</a></li>			
											<li><a href="#">Loại xe đang bán 1</a></li>			
											<li><a href="#">Loại xe đang bán 1</a></li>			
											<li><a href="#">Loại xe đang bán 1</a></li>							
										</ul>
									</li>
									<li><a href="#about">Liên hệ</a></li>
									<li><a href="#about">Tin tức và sự kiện</a></li>
								</ul>


							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</div>

				<div id="main">

					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
				</div>
				<script>
					function openNav() {
						document.getElementById("mySidenav").style.width = "100%";

					}

					function closeNav() {
						document.getElementById("mySidenav").style.width = "0";
						document.getElementById("main-body").style.marginLeft= "0";
					}
				</script>
			</div>
		</div>	

		<div id="nav">
			<div class="container hidden-xs hidden-sm">
				<div class="row">
					<div class="main-menu">
						<nav>
							<ul>								

								<li class="li_lv1">
									<a href="/">Trang chủ</a>
								</li>	
								<li class="li_lv1">
									<a href="/gioi_thieu">Giới thiệu</a>
								</li>	
								<li class="li_lv1">
									<a href="#"><span>Hãng xe</span>
									</a>
									<ul class="sup-menu">	
									<?php
									if(isset($menu['products'])):
										  foreach($menu['products'] as $item):

									?>						
										<li>
										<?php echo $this->Html->link($item['Category']['name'], array('controller'=>'products','action' => 'list_product',$item['Category']['id']), array('escape' => false)); ?>
											<!-- <ul class="sup-menu-1">			
												<li><a href="#">Loại xe đang bán 2</a></li>	
											</ul> -->
										</li>		
									<?php  endforeach;
										   endif;
									?>							
									</ul>
								</li>						
								<li class="li_lv1">
									<a href="/contact">Liên hệ</a>
								</li>							
								<li class="li_lv1">
									<a href="#">Tin tức và sự kiện</a>
									<ul class="sup-menu">	
									<?php
									if(isset($menu['news'])):
										  foreach($menu['news'] as $item):

									?>						
										<li>
										<?php echo $this->Html->link($item['Category']['name'], array('controller'=>'posts','action' => 'list_new',$item['Category']['id']), array('escape' => false)); ?>
										
										</li>		
									<?php  endforeach;
										   endif;
									?>							
									</ul>
								</li>			
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>