<div id="content-1">
			<div class="container full-width">
				<div class="row">
					<?php echo $this->Element('new_right'); ?>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
						<aside>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">Dòng xe Huyndai</h3>
									</div>
								</div>
							</div>
							<?php 
								if(isset($products)):
								foreach ($products as $item): 
							?>	
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
									<!-- <a href="#" class="thumbnail thumbnail-car">
										<img data-src="" alt="" src="img/car-7.jpg">
									</a> -->
									<div class="car-des">
										<h4>Toyota Highlander</h4>
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
										<button type="button" class="btn btn-info">
										<?php echo $this->Html->link(
										'Xem chi tiết',array(
											'controller' => 'products',
											'action' => 'view',$item['Product']['id']
										),
										array(
											'escape' => false
										)
									);?></button>
											
										</div>
									</div>
								</div>
							</div>
							<?php 
							endforeach;
							endif;
						?>
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
								<ul class="pagination">
								<li><a href="#">&laquo;</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
							
							</div>

						</aside>
					</div>
				</div>
			</div>
		</div>