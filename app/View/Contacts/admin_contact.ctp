<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">Dashboard</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">

			<div class="box-body">
				
						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table "  class="table example3  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="">Chi tiết</th>
													<th>Tên người gửi</th>
													<th>Email</th>
													

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Thời gian
													</th>
													<th class="hidden-480">Trạng thái</th>

													<th></th>
												</tr>
											</thead>

											<tbody>
											<?php 
												if(isset($contacts)):
												foreach($contacts as $item):
											?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													<td class="center">
														<div class="action-buttons">
															<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
																<i class="ace-icon fa fa-angle-double-down"></i>
																<span class="sr-only">Details</span>
															</a>
														</div>
													</td>

													<td>
														<a href="#"><?php echo $item['Contact']['name'];?></a>
													</td>
													<td><?php echo $item['Contact']['email'];?></td>
													
													<td><?php echo date('d/m/Y',$item['Contact']['created']);?></td>

													<td class="hidden-480">
													    <?php if($item['Contact']['publish']==1):?>
														   <span class="label label-sm label-success">Đã gửi</span>
														<?php else:?>
															<span class="label label-sm label-warning">Chưa gửi</span>
													    <?php endif; ?>
													</td>

													<td>
														<div class="hidden-sm hidden-xs btn-group">
															    <button class="btn btn-xs btn-danger">
															    <?php echo $this->Html->link('<i class="ace-icon fa fa-trash-o bigger-120"></i>', array('action' => 'delete',$item['Contact']['id']),array('escape' => false)); ?>
																		
															    </button>
															

															
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<a href="<?php echo Router::url('/',true ).'admin/delete/'.$item['Contact']['id']; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo Router::url('/',true ).'admin/delete/'.$item['Contact']['id']; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>

												<tr class="detail-row">
													<td colspan="8">
														<div class="table-detail">
															<div class="row">
															

																<div class="col-xs-12 col-sm-4">
																	<div class="space visible-xs"></div>

																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Tên người liên hệ </div>

																			<div class="profile-info-value">
																				<span><?php echo $item['Contact']['name'];?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Công ty </div>

																			<div class="profile-info-value">
																				<i class="fa fa-map-marker light-orange bigger-110"></i>
																				<span><?php echo $item['Contact']['company'];?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Địa chỉ </div>

																			<div class="profile-info-value">
																				<span><?php echo $item['Contact']['address'];?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Ngày gửi </div>

																			<div class="profile-info-value">
																				<span><?php echo date('d/m/Y',$item['Contact']['created']);?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">Email</div>

																			<div class="profile-info-value">
																				<span><?php echo $item['Contact']['email'];?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Điện thoại</div>

																			<div class="profile-info-value">
																				<span><?php echo $item['Contact']['phone'];?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name">Fax</div>

																			<div class="profile-info-value">
																				<span><?php echo $item['Contact']['fax'];?></span>
																			</div>
																		</div>
																	
																	</div>
																</div>

																<div class="col-xs-12 col-sm-8">
																	<div class="space visible-xs"></div>
																	<h4 class="header blue lighter less-margin">Tiêu đề<span>: <?php echo $item['Contact']['title'];?></span></h4>


																	<div class="space-12"></div>
																	
															
																		<fieldset>
																			<h4 class="header blue lighter less-margin">Nội dung<span></h4><?php echo $item['Contact']['content'];?></span>
																		</fieldset>

																		<div class="hr hr-dotted"></div>

																		<div class="clearfix">
																			<label class="pull-left">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"> Email me a copy</span>
																			</label>

																			<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																			<?php echo $this->Html->link('Gửi phản hồi', array('action' => 'sent_email',$item['Contact']['id'])); ?>
																				<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																			</button>
																		</div>
																
																</div>
															</div>
														</div>
													</td>
												</tr>
												<?php endforeach;
											      endif;
											    ?>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

							

								

							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
			</div>


		</div>

		<!-- /.page-content -->
	</div>
</div><!-- /.main-content -->