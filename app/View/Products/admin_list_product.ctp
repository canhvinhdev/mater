<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Trang chủ</a>
				</li>
				<li class="active">Sản phẩm</li>
			</ul><!-- /.breadcrumb -->

		
		</div>
		<div class="page-content">
				<div class="page-header " >
							
							<button type="button" class="btn btn-success" style="float: right;"><a href="<?php echo Router::url('/',true ); ?>admin/products/add"">Thêm sản phẩm</a></button>
						</div>

			<div class="box-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Số thứ tự</th>
							<th>Tên sản phẩm</th>
							<th>Ảnh đại diện</th>
							<th>Danh mục</th>
							<th>Thời gian tạo</th>
							<th>Hành động</th>
						</tr>
					</thead>
					<tbody>
					<?php 
							$count=0;
							if(isset($products)):
							foreach($products as $item):
							$count++;
						?>

						<tr>
							<td><?php echo $count;?>
							</td>
							<td><?php echo $item['Product']['name'];?>
							</td>
							<td><img src="<?php echo $item['Product']['thumbnail'];?>" alt="Mountain View" style="width:204px;height:128px;">
							</td>
							<td><?php echo $item['Category']['name'];?>
							</td>
							<td><?php echo date('d/m/Y',$item['Product']['created']);?>

							</td>
							<td>								
								<div id="btn-limited" class="btn-group btn-group-xs btn-group-action btn-limited"><label for="" class="hidden">a</label>
									<?php echo $this->Html->link('<i class="fa fa-edit"></i>', array('action' => 'edit',$item['Product']['id']), array('escape' => false, 'class' => 'btn btn-flat btn-danger', 'name' => 'sửa thông tin')); ?>
								</div>


								</div>
								<div id="btn-limited" class="btn-group btn-group-xs btn-group-action btn-limited"><label for="" class="hidden">a</label>
									 <?php echo $this->Html->link('<i class="fa fa-remove"></i>', array('action' => 'delete',$item['Product']['id']), array('escape' => false, 'class' => 'btn btn-flat btn-danger', 'name' => 'xóa thông tin')); ?>
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