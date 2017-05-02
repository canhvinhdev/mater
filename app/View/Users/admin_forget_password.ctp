							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Bạn quên mật khẩu
											</h4>
											<div class="space-6"></div>
											<?php echo $this->Form->create('User'); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															 <input type="text" name="email" class="form-control" placeholder="Email đăng nhập" /> 
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													

													<div class="space"></div>

													<div class="col-sm-12" style="text-align: center;">
														<button type="submit" class="width-35 btn btn-sm btn-primary">				<span class="bigger-110">Gửi email</span>
														</button>
													</div>
													<div class="col-sm-12" style="text-align: center;">
														
															<span class="lbl"><a href="/admin">Đăng nhập</a> </span>
													</div>
													<div class="space-4"></div>
												</fieldset>
											<?php echo $this->Form->end(); ?>  						
										</div><!-- /.widget-main -->								
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->