<?php $user = $this->requestAction('/app/get_user');?>
<?php $contacts = $this->requestAction('/app/contact');?>
<div id="navbar" class="navbar navbar-default          ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						ITec Admin
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="green dropdown-modal">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
							<span class="badge badge-success"><?php echo count($contacts); ?></span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-envelope-o"></i>
								<?php echo count($contacts); ?> Messages
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
								<?php if(isset($contacts)):
										foreach($contacts as $contact):
									?>
									<li>
										<a href="<?php echo Router::url('/',true ).'admin/contacts/sent_email/'. $contact['Contact']['id']; ?>" class="clearfix">
											<img src="/assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue"><?php echo $contact['Contact']['name']; ?>:</span>
													<?php echo $contact['Contact']['content']; ?>
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span><?php echo date('d/m/Y',$contact['Contact']['created']); ?></span>
												</span>
											</span>
										</a>
									</li>
								<?php endforeach;
								      endif;
									?>
									
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="<?php echo Router::url('/',true ); ?>admin/contact">
									Xem tất cả tin nhắn
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="light-blue dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="/assets/images/avatars/user.jpg" alt="Jason's Photo" />
							<span class="user-info">
								<small>Xin chào: </small>
								<?php echo $user['name'];?>
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Cài đặt
								</a>
							</li>

							<!-- <li>
								<a href="profile.html">
									<i class="ace-icon fa fa-user"></i>
									Thông tin cá nhân
								</a>
							</li> -->

							<li class="divider"></li>

							<li>
								<a href="<?php echo Router::url('/',true ); ?>admin/logout">
									<i class="ace-icon fa fa-power-off"></i>
									Đăng xuất
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
			<script type="text/javascript">
				try{ace.settings.loadState('sidebar')}catch(e){}
			</script>

			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-signal"></i>
					</button>

					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>

					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>

					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
				</div>

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>
			</div><!-- /.sidebar-shortcuts -->

			<ul class="nav nav-list">
				<li class="active">
					<a href="">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Giao diện quản lý </span>
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo Router::url('/',true ); ?>admin" >
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text">
							Quản lý chung
						</span>

					</a>

				</li>

				

				<li class="">
					<a href="<?php echo Router::url('/',true ); ?>admin/list_category_product">
						<i class="menu-icon fa fa-calendar"></i>

						<span class="menu-text">
							Nhóm sản phẩm
							<span class="badge badge-transparent tooltip-error" title="2 Important Events">

							</span>
						</span>
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo Router::url('/',true ); ?>admin/list_product">
						<i class="menu-icon fa fa-picture-o"></i>
						<span class="menu-text"> Sản phẩm</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="<?php echo Router::url('/',true ); ?>admin/list_category_post">
						<i class="menu-icon fa fa-file-o"></i>
						<span class="menu-text">
							Nhóm bài viết
						</span>
					</a>
				</li>
				<li class="">
					<a href="<?php echo Router::url('/',true ); ?>admin/list_post"" >
						<i class="menu-icon fa fa-file-o"></i>

						<span class="menu-text">
							Bài viết
							
						</span>

					</a>



				</li>

				<li class="">
					<a href="<?php echo Router::url('/',true ); ?>admin/contact">
						<i class="menu-icon fa fa-file-o"></i>

						<span class="menu-text">
							Liên hệ

							<span class="badge badge-primary"><?php echo count($contacts); ?></span>
						</span>

						
					</a>


				
				</li>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-cogs"></i>

						<span class="menu-text">
							Cấu hình

						
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<?php echo $this->Html->link('<i class="menu-icon fa fa-caret-right"></i>Trang chủ', array('controller'=>'bussinesses','action' => 'admin_home'), array('escape' => false)); ?>
							<!-- <a href="<?php echo Router::url('/',true ); ?>admin/bussinesses/home/1">
								<i class="menu-icon fa fa-caret-right"></i>
								Trang chủ
							</a> -->

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="<?php echo Router::url('/',true ); ?>admin/bussinesses/product">
								<i class="menu-icon fa fa-caret-right"></i>
								Trang sản phẩm
							</a>

							<b class="arrow"></b>
						</li>

						<!-- <li class="">
							<a href="<?php echo Router::url('/',true ); ?>admin/bussinesses/detail_product">
								<i class="menu-icon fa fa-caret-right"></i>
								Trang chi tiết
							</a>

							<b class="arrow"></b>
						</li> -->
						<li class="">
							<a href="<?php echo Router::url('/',true ); ?>admin/bussinesses/contact">
								<i class="menu-icon fa fa-caret-right"></i>
								Trang liên hệ
							</a>

							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo Router::url('/',true ); ?>admin/bussinesses/introduce">
								<i class="menu-icon fa fa-caret-right"></i>
								Trang giới thiệu
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>
			</ul><!-- /.nav-list -->

			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>