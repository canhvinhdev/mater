<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="active">Tin tức</li>
			</ul><!-- /.breadcrumb -->

		
		</div>

		


		<div class="page-content">
				<div class="page-header " >
							
							<button type="button" class="btn btn-success" style="float: right;"><a href="<?php echo Router::url('/',true ); ?>admin/category_post">Thêm nhóm bài viết</a></button>
						</div>

			<div class="box-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Số thứ tự</th>
							<th>Tên nhóm bài viết</th>

							<th>Ngày tạo</th>
							<th>Mô tả</th>
								<th>Hiển thị</th>
							<th>Hành động</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							$count=0;
							if(isset($categories)):
							foreach($categories as $item):
							$count++;
						?>
						<tr>
							<td><?php echo $count;?>
							</td>
							<td><?php echo $item['Category']['name'];?>
							</td>
							<td><?php echo date('d/m/Y',$item['Category']['created']);?>
							</td>
							<td><?php echo $item['Category']['description'];?>
							</td>
							<td>	
								<?php echo ($item['Category']['publish']==1)?'Hiển thị':'Không hiển thị';?>
							</td>
							<td>								
								<div id="btn-limited" class="btn-group btn-group-xs btn-group-action btn-limited"><label for="" class="hidden">a</label>
									<?php echo $this->Html->link('<i class="fa fa-edit"></i>', array('action' => 'category_post_edit',$item['Category']['id']), array('escape' => false, 'class' => 'btn btn-flat btn-info', 'title' => 'sửa thông tin')); ?>

								</div>
								<div id="btn-limited" class="btn-group btn-group-xs btn-group-action btn-limited"><label for="" class="hidden">a</label>
									 <?php echo $this->Html->link('<i class="fa fa-remove"></i>', array('action' => 'category_post_delete',$item['Category']['id']), array('escape' => false, 'class' => 'btn btn-flat btn-danger', 'title' => 'xóa thông tin')); ?>

								</div>
							</td>
						</tr>
					<?php endforeach;
						  endif;
					?>
					</tbody>
					<tfoot>

					</tfoot>
				</table>
			</div>


		</div>

		<!-- /.page-content -->
	</div>
</div><!-- /.main-content -->