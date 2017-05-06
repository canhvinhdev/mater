<div id="content-1">
			<div class="container full-width">
				<div class="row">
					<?php echo $this->Element('new_right'); ?>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
						<aside>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title"><?php echo $post['Category']['name'];?></h3>
									</div>
								</div>
							</div>	

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
								<!-- <?php 
									$title = $post['Post']['title'];
									echo $this->Html->image($post['Post']['thumbnail'],array('alt'=> $title,'class'=>'img-responsive'));?> -->
								<!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 full-width">
									
								</div> -->
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
									<h3><?php echo $post['Post']['title'];?></h3>
									<div class="entry-meta-progression">
										<div class="entry-meta-date"><i class="fa fa-calendar"></i> <time class="entry-date" datetime="2014-01-09T20:05:58+00:00"><?php echo date('d/m/Y',$post['Post']['created']);?></time></div>
										<div class="entry-meta-author"><i class="fa fa-user"></i> By <a href="" title="Posts by ProgressionStudios" rel="author"><?php echo $post['User']['name'];?></a></div>
									</div>
									<div class="descripton-blog">
										<p><span><?php echo $post['Post']['description'];?></span></p>
									</div>

								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
									<?php echo $post['Post']['content'];?>
								</div>
							</div>
						<div class="fb-comments" data-href="http://oto.com/posts/view/6" data-width="100%" data-numposts="5"></div>
						
					</div>
					
				</div>
			</div>
		</div>