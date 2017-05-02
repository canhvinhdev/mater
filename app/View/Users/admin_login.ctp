<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Đăng nhập hệ thống
											</h4>
											<div class="space-6"></div>
											<?php echo $this->Form->create('User',array('controller'=>'users','action'=>'login')); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">

															<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															
															<a href="/admin/forget_password"><span class="lbl"> Quên mật khẩu ?</span></a>
														</label>
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">				<span class="bigger-110">Đăng nhập</span>
														</button>
													</div>
													<div class="space-4"></div>
												</fieldset>
											<?php echo $this->Form->end(); ?>  				
										</div><!-- /.widget-main -->								
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->	