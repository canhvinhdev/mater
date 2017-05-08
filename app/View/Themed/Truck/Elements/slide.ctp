			<?php $slide = $this->requestAction('/app/slide');?>
			<div class="container">
				<div class="row">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-id" data-slide-to="0" class=""></li>
							<li data-target="#carousel-id" data-slide-to="1" class=""></li>
							<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
							
						</ol>

						<div class="carousel-inner">
						<?php if(isset($slide)):
							$count=0;
							foreach($slide as $item):
							$count++;
						?>
							<div class="item <?php echo ($count==1) ? 'active':'';?>">
								<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="<?php echo $item['Slide']['name'];?>" src="<?php echo $item['Slide']['thumbnail'];?>">
								
							</div>
						<?php endforeach; endif;?>
							<!-- <div class="item">
								<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="/theme/Truck/img/slide-2.jpg">
								
							</div>
							<div class="item active">
								<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="/theme/Truck/img/slide-3.jpg">
								
							</div> -->
							
						</div>
						<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left " id="glyphicon-chevron-left-1"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right " id="glyphicon-chevron-right-1"></span></a>
					</div>
				</div>
			</div>