
<div id="content-1">
			<div class="container full-width">
				<div class="row">
					<?php echo $this->Element('new_right'); ?>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
						<aside>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">Tin khuyến mãi</h3>
									</div>
								</div>
							</div>
							<?php 
								if(isset($posts)):
								foreach ($posts as $item): 
							?>	

							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
								<article>
								<div id="post">
									<a href=""><h3 id="title-post"><?php echo $item['Post']['title'];?>/</h3></a>		
									<?php 
									$title = $item['Post']['title'];
									$image = $this->Html->image($item['Post']['thumbnail'],array('alt'=> $title,'class'=>'img-responsive'));
									echo $this->Html->link(
										$image,array(
											'controller' => 'posts',
											'action' => 'view',$item['Post']['id']
										),
										array(
											'title' => $item['Post']['title'],
											'escape' => false
										)
									);?>
									
									
									<div class="entry-meta-progression" >
										<div class="entry-meta-date" style=""><i class="fa fa-calendar"></i> <time class="entry-date" datetime="2014-01-09T20:05:58+00:00"><?php echo date('d/m/Y',$item['Post']['created']);?></time></div>
										
										<div class="entry-meta-author" style=""><i class="fa fa-user"></i> By <a href="" title="Posts by ProgressionStudios" rel="author"><?php echo $item['User']['name'];?></a></div>		
									</div>
							
									<div class="descripton-blog">
										<?php echo $this->Tool->substr($item['Post']['description'], 0, 185);?>
									</div>		
									
							
								</div>
								</article>
							</div>
							<?php 
							endforeach;
							endif;
						?>

						</aside>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
							<ul class="pagination">
								 <?php 
										echo $this->Paginator->prev('Trước', array(
											        'tag'=>'li',
											        'disabledTag'=>'a'
     												 ));
										echo $this->Paginator->numbers(array('tag'=>'li','separator' => '', 'currentTag' => 'a', 'currentClass' => 'active',  'modulus' => 5));
										echo $this->Paginator->next('Sau', array(
																	        'tag'=>'li',
																	        'disabledTag'=>'a'
						     												 ));
						 		?> 
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>