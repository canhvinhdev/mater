	<?php $post = $this->requestAction('/app/new_right');?>
<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
	<aside>
		<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Tin tức và sự kiện</h3>
		</div>
		<div class="panel-body">
				<?php 
				$count = 0;
				if(isset($post)):
				foreach($post as $item):
				$count++;	
				?>	
				<?php if(isset($item['Post']['thumbnail']) && $count == 1  ):  ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
					<div class="blog">
						<div class="blog-img">
							<img src="<?php echo $item['Post']['thumbnail']; ?>" class="img-responsive" alt="Image">
						</div>
						<div class="blog-title"><p><a href=""><?php echo $item['Post']['title']; ?></a></p></div>
					</div>
					<hr class="small-hr">
				</div>
				<?php else: ?>
					<!-- <hr class="small-hr"> -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  full-width">
						<div class="blog">

							<div class="blog-title"><p><i class="fa fa-file-text-o" aria-hidden="true"></i>  <a href=""><?php echo $item['Post']['title']; ?></a></p></div>
						</div>
						<hr class="small-hr">
					</div>
				<?php endif;?>
			<?php endforeach;
			endif;
			?>	
		</div>
	</div>
	</aside>
	<aside>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Hỗ trợ trực tuyến</h3>
		</div>
		<div class="panel-body">
			<div class="support col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<img src="/theme/Truck/img/support-1.png" alt="" class="img-responsive" width="15%" style="    float: left;">
				<span class="phone-support"><a href="tel:0987789697">0987789697</a> (Mr.John)</span>
				<span class="gmail-support"><a href="mailto:">john@gmail.com</a></span>		
			</div>
				
			<div class="support col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
					<hr class="small-hr">
				<img src="/theme/Truck/img/support-1.png" alt="" class="img-responsive" width="15%" style="    float: left;">
				<span class="phone-support"><a href="tel:0987789697">0987789697</a> (Mr.John)</span>
				<span class="gmail-support"><a href="mailto:">john@gmail.com</a></span>	
			</div>
		</div>
	</div>
	</aside>
	<aside>
	<div class="panel panel-info">
		<div class="fb-page"
		data-href="https://www.facebook.com/congnghethongtin2013/" 
		data-width="340"
		data-hide-cover="false"
		data-show-facepile="true"></div>
	</div>
	</aside>
</div>