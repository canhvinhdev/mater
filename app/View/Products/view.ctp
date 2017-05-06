<div id="content-1">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">


				<ul class="breadcrumb">
					<li><a href="#">Sản phẩm </a></li>
					<li>
					<?php echo $this->Html->link($product['Category']['name'], array('controller'=>'products','action' => 'list_product',$product['Category']['id']), array('escape' => false,'alt'=>$product['Category']['name'])); ?>
					<!-- <a href="#"><?php echo $product['Category']['name'];?> </a></li> -->
					<li class="active"><?php echo $product['Product']['name'];?></li>

				</ul>
			<!-- <ul class="breadcrum">	
					<li class="bread-element"> <i class="fa fa-caret-right" aria-hidden="true"></i></li>
					<li class="bread-element"> <i class="fa fa-caret-right" aria-hidden="true"></i></li>
					<li class="active">  </li>
				</ul> -->
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<img src="/theme/Truck/img/car.png" class="img-responsive" alt="Image">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-info">
						<div class="panel-heading danger">

						</div>
						<div class="panel-body car-des-detail">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h2 class="title-detail-car "><?php echo $product['Product']['name'];?></h2>
							</div>
							<div class="weight col-md-6">
								<p>Tổng trọng tải đầu kéo: <?php echo $product['Product']['arbitration'];?> kg</p>
								<p>
									Tổng trọng tải tổ hợp: <?php echo $product['Product']['weight'];?> kg</p>
								</div>
								<div class="car-price-content col-md-6">
									<h4>Giá: <span id="car-price">Liên hệ</span></h4>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<hr>
									<?php echo $product['Product']['description'];?>

									<?php echo $product['Product']['content'];?>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="mxh">
											<div style="float:left; margin-right:10px; display:block;">
												<div class="fb-like" data-href="http://oto.com/posts/view/6" data-width="121px" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
											</div>
											
											<div style="float:left; margin-right:-23px; display:block;">
												<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
												<g:plusone size="medium" href="http://oto.com/posts/view/6">></g:plusone>
											</div>
											<div style="float:left; margin-right:10px; display:block;">
												<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="TWITTER-USERNAME">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
											</div>
											<div style="clear:left"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="container">
							<h2>Thông tin chi tiết</h2>
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Thông số kỹ thuật</a></li>
								<!-- <li><a data-toggle="tab" href="#menu1">Thư viện hình ảnh</a></li> -->
								<li><a data-toggle="tab" href="#menu2">Nội thất</a></li>
								<li><a data-toggle="tab" href="#menu3">Ngoại thất</a></li>
								<li><a data-toggle="tab" href="#menu4">Bình luận</a></li>
							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<div class="desciption">
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											<?php 
											$count=0;
												if(isset($product['Technique'])):
												foreach ($product['Technique'] as $item): 
												if($item['pater']==0):
												$count++;
											?>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading<?php echo $count; ?>">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse<?php echo $count; ?>">
																<i class="fa fa-plus" aria-hidden="true"></i>  <?php echo $item['name'];?>
															</a>
														</h4>
													</div>
													<div id="collapse<?php echo $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
														<div class="panel-body">
															<h2><?php echo $product['Product']['name'];?></h2>      
															<table class="table">
																<!-- <thead>
																	<tr>
																		<th>Firstname</th>
																		<th>Lastname</th>

																	</tr>
																</thead> -->
																<tbody>
																<?php 
																	if(isset($product['Technique'])):
																	foreach ($product['Technique'] as $item1): 
																	if($item1['pater']==$item['id']):
																?>
																	<tr>
																		<td><?php echo $item1['name'];?></td>
																		<td><?php echo $item1['value'];?></td>

																	</tr>
																<?php
																	endif;
																	endforeach;
																	endif;
																?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											<?php
												endif;
												endforeach;
												endif;
											?>

										</div>
									</div>
								</div>
								<div id="menu1" class="tab-pane fade">

								</div>
								<div id="menu2" class="tab-pane fade">
								<h3>Hình ảnh nội thất</h3>
									<?php 
										if(isset($product['Picture'])):
										foreach ($product['Picture'] as $item): 
										if($item['type']==0):
									?>
										<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

											<img src="<?php echo $item['image'];?>" class="img-responsive" alt="<?php echo $item['title'];?>">
										</div>
									<?php
										endif;
										endforeach;
										endif;
									?>
								</div>
								<div id="menu3" class="tab-pane fade">
									<h3>Hình ảnh ngoại thất</h3>
									<?php 
										if(isset($product['Picture'])):
										foreach ($product['Picture'] as $item): 
										if($item['type']==1):
									?>
										<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

											<img src="<?php echo $item['image'];?>" class="img-responsive" alt="<?php echo $item['title'];?>">
										</div>
									<?php
										endif;
										endforeach;
										endif;
									?>
								</div>
								<div id="menu4" class="tab-pane fade">
									<div class="fb-comments" data-href="http://oto.com/posts/view/6" data-width="100%" data-numposts="5"></div>

								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h2>Loại xe cùng dòng</h2>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">	
						<?php 
							if(isset($truck)):
							foreach ($truck as $item): 
						?>		
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="thumbnail-section-car">
								<?php 
									$title = $item['Product']['name'];
									$image = $this->Html->image($item['Product']['thumbnail'],array('alt'=> $title,'class'=>'thumbnail thumbnail-car img-responsive '));
									echo $this->Html->link(
										$image,array(
											'controller' => 'products',
											'action' => 'view',$item['Product']['id']
										),
										array(
											'title' => $item['Product']['name'],
											'escape' => false,
											'class' => 'thumbnail thumbnail-car'
										)

									);?>
								<div class="car-des">
									<h4><?php echo $item['Product']['name']; ?></h4>
									<div class="car-code">
										<div class="car-code-content">
											<span style="font-weight: bold;">Mã xe:</span>
											<span id="car-code-number" style="">
											<?php echo $item['Product']['discount']; ?>
											</span>

										</div>

									</div>
									<div class="car-price-content">
										<span>Giá: <span id="car-price"><?php echo $item['Product']['price']; ?>  triệu</span></span>
									</div>
									<div id="button-info-car">
										<?php echo $this->Html->link(
												'<button type="button" class="btn btn-info">Xem chi tiết</button>',array(
													'controller' => 'products',
													'action' => 'view',$item['Product']['id']
												),
												array(
													'title' => $item['Product']['name'],
													'escape' => false
												)

											);?>
									</div>
									

								</div>
							</div>
						</div>
					<?php
						endforeach;
						endif;
					?>	
					</div>
				</div>
			</section>