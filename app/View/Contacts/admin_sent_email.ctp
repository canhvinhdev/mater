<div class="main-content">
<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		
		</ul><!-- /.breadcrumb -->

	
	</div>

	<div class="page-content">

		<div class="box-body">
			
					<div class="page-header">
						<h1>
							Liên hệ
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								Trả lời phản hồi : <span><?php  echo $contact[0]['Contact']['name'];?></span>
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							 <?php echo $this->Form->create('Contact', array('role' => 'form', 'class' => 'form-horizontal', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
								<div class="row">
									<div class="col-xs-12">
										<div class="tab-content no-border no-padding">
											<div id="inbox" class="tab-pane in active">
												<div class="message-container">
												
													<div id="id-message-new-navbar" class="message-navbar clearfix">
																<div class="message-bar">
																	<div class="message-toolbar">
																		

																	
																	</div>
																</div>

																<div>
																	<div class="messagebar-item-left">
																		<a href="#" class="btn-back-message-list">
																			<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
																			<b class="middle bigger-110">Trở lại</b>
																		</a>
																	</div>

																	<div class="messagebar-item-right">
																		<span class="inline btn-send-message">
																			<button type="submit" class="btn btn-sm btn-primary no-border btn-white btn-round">
																				<span class="bigger-110">Gửi</span>

																				<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																			</button>
																		</span>
																	</div>
																</div>
															</div>
													<div class="message-list-container">
												        <form id="id-message-form" class="form-horizontal message-form col-xs-12">
														<div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Người nhận:</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="email" name="receive" id="form-field-recipient" data-value="<?php echo $contact[0]['Contact']['email'];?>" value="<?php echo $contact[0]['Contact']['email'];?>" placeholder="Recipient(s)">
																		<i class="ace-icon fa fa-user"></i>
																	</span>
																</div>
															</div>

															<div class="hr hr-18 dotted"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Tiêu đề:</label>

																<div class="col-sm-6 col-xs-12">
																	<div class="input-icon block col-xs-12 no-padding">
																		<input maxlength="100" name="subject" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject">
																		<i class="ace-icon fa fa-comment-o"></i>
																	</div>
																</div>
															</div>

															<div class="hr hr-18 dotted"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">
																	<span class="inline space-24 hidden-480"></span>
																	Nội dung tin nhắn:
																</label>

																<div class="col-sm-9">
																	<?php echo $this->Form->textarea('content', array('label' => false,'class' => 'form-control ckeditor')); ?>
																	<!-- <textarea class="form-control limited ckeditor" id="form-field-9" maxlength="50" class="col-xs-10 col-sm-5"></textarea> -->
																</div>
															</div>

															<div class="hr hr-18 dotted"></div>

															<!-- <div class="form-group no-margin-bottom">
																<label class="col-sm-3 control-label no-padding-right">File đính kèm:</label>

																<div class="col-sm-9">
																	<div id="form-attachments">
																		<div class="form-group file-input-container"><div class="col-sm-7"><label class="ace-file-input width-90 inline"><input type="file" name="attachment[]"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label></div></div>
																	</div>
																</div>
															</div> -->

										
										                    <div class="space"></div>
									                    </div>
								                     </form>
								                   </div>
												</div>
											</div>
										</div>
									</div><!-- /.span -->
								</div><!-- /.row -->
							<?php echo $this->Form->end(); ?>
	<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
		        </div>


		</div>

	<!-- /.page-content -->
</div>
</div><!-- /.main-content -->