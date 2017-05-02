							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Khôi phục mật khẩu
											</h4>
											<div class="space-6"></div>
											<?php echo $this->Form->create('User'); ?>
												<fieldset>
													<div class="alert alert-danger" style="text-align: center;">

													   Mật khẩu nhập lại không đúng, vui lòng nhập lại.
													</div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Mật khẩu mới"  id="new_pass" />
															<i class="ace-icon fa fa-key"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Nhập lại mật khẩu" id="reset_pass" />
															<i class="ace-icon fa fa-key"></i>
														</span>
													</label>
													<div class="space"></div>

													<div class="col-sm-12" style="text-align: center;">
														<button type="submit" class="width-35 btn btn-sm btn-primary">				<span class="bigger-110" >Khôi phục</span>
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
							</div>
							