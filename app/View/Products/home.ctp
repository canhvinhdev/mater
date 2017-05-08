<div id="content-1">
			<div class="container full-width">
				<div class="row">
					 <?php echo $this->Element('new_right'); ?>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
						<aside>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">Danh sách ô tô hiện có</h3>
									</div>
								</div>
							</div>
							<?php 
								if(!empty($product_new)):
								foreach ($product_new as $item): 
							?>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="thumbnail-section-car">
								<a href="<?php echo '/san-pham/'.$item['Category']['slug'].'/'.$item['Product']['slug'].'-'.$item['Product']['id'].'.html';?>" title="<?php echo $item['Product']['name'];?>" class="thumbnail thumbnail-car"> <img src="<?php echo$item['Product']['thumbnail']; ?>" alt="<?php echo $item['Product']['name'];?>" class="thumbnail thumbnail-car img-responsive"> </a>
								
									<!-- <a href="#" class="thumbnail thumbnail-car">
										<img data-src="" alt="" src="img/car-7.jpg">
									</a> -->
									<div class="car-des">
										<h4><?php echo $this->Tool->substr($item['Product']['name'],0,23);?></h4>
										<div class="car-code">
											<div class="car-code-content">
												<span style="font-weight: bold;">Mã xe:</span>
												<span id="car-code-number" style="">
													<?php echo $item['Product']['referee'];?>
												</span>

											</div>

										</div>
										<div class="car-price-content">
											<span>Giá: <span id="car-price"><?php echo $item['Product']['price'];?> triệu</span></span>
										</div>
										<div id="button-info-car">
											<a href="<?php echo '/san-pham/'.$item['Category']['slug'].'/'.$item['Product']['slug'].'-'.$item['Product']['id'].'.html';?>" title="<?php echo $item['Product']['name'];?>" ><button type="button" class="btn btn-info">Xem chi tiết</button></a>
											
											
										</div>
									</div>
								</div>
							</div>
						<?php 
							endforeach;
							endif;
						?>

						</aside>
					</div>
				</div>
			</div>
		</div>
