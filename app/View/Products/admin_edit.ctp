<style>
	body { background-color:#fafafa; font-family:'Open Sans';}
	.treetable{

	}
	.treetable .fa{
		cursor: pointer;
		padding-right: 5px;
	}
	.treetable .rowhidden{
		display: none;
	}
	.treetable .j-addChild{
		display: none;
	}
	.treetable .selected .j-addChild{
		display: block;
	}
	.treetable .btn-outline{
		background-color: transparent;
	}
	.treetable .form-control{
		width: auto;
		display: inline-block;
	}
	.treetable .textalign-center{
		text-align: center;
	}
	.treetable .j-expend{
		cursor: pointer;
		width: 35% !important;
		text-align: left !important;
	}
	.treetable .maintitle{
		width: 35% !important;
	}
	.treetable .j-remove{
		padding: 8px;
		cursor: pointer;
		font-size: 16px;
		color:red;
	}
	.treetable .tt-header{
		margin-top:10px;
	}
	.treetable .class-level-2 .class-level-ul .j-expend{
		position: relative;
		left: 22px;
	}
	.treetable .class-level-3 .class-level-ul .j-expend{
		position: relative;
		left: 44px;
	}
	.treetable .class-level-4 .class-level-ul .j-expend{
		position: relative;
		left: 66px;
	}
	.treetable .class-level-1 {
		border-bottom: dashed 1px #eee;
	}
	.treetable .class-level-ul{
		padding: 0;
		margin-bottom: 2px;
	}
	.treetable .class-level-ul li {
		float: left;
		text-align: center;
		vertical-align: middle;
		padding: 1px 10px;
		min-width: 195px;
		list-style: none;
	}
	.treetable .class-level-ul:after {
		display: block;
		clear: both;
		height: 0;
		content: "\0020";
	}
	.treetable .tt-header div span {
		width: auto;
		line-height: 29px;
		display: inline-block;
		min-width: 73px;
		/*text-align: center;*/
		margin-left: 50px;
	}
	.treetable .tt-body{
		border: solid 1px #DDD;
		padding-top: 1px;
		background-color:#FFF;
	}
	.treetable .tt-header div{
		border: solid 1px #DDD;
		border-bottom:none;
		background-color:#FFF;
	}
</style>
<div class="" id="main-content-id" style="margin-left: 190px !important;">
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
			<div class="page-content">

				<div class="page-header">
					<h1>
						Sửa sản phẩm
					</h1>
				</div><!-- /.page-header -->				
				<div class="row">
					<div class="col-xs-12">
						
						<div class="tabbable">
							<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
								<li class="active">
									<a data-toggle="tab" href="#home4">Thông số cơ bản</a>
								</li>

								<li>
									<a data-toggle="tab" href="#profile4">Hình ảnh nội thất</a>
								</li>

								<li>
									<a data-toggle="tab" href="#dropdown14">Hình ảnh ngoại thất</a>
								</li>
								<li>
									<a data-toggle="tab" href="#dropdown15">Thông số kỹ thuật</a>
								</li>
							</ul>
							<?php echo $this->Form->create('Product', array('enctype'=>'multipart/form-data','multiple'=>'multiple','type'=>'file','role' => 'form', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

							<div class="tab-content">
								<div id="home4" class="tab-pane in active">

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tên sản phẩm mới</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('name', array('class' =>'col-xs-10 col-sm-5','placeholder'=>'Nhập tên sản phẩm mới','label'=>false)); ?>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Đường dẫn tôi ưu Seo</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('slug', array('class' =>'col-xs-10 col-sm-5','placeholder'=>'Nhập đường dẫn','label'=>false)); ?>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Danh mục sản phẩm </label>

										<div class="col-sm-9">
											<?php 
											echo $this->Form->input('category_id', array('class' => 'chosen-select form-control','type' => 'select','options' => $categories,'default' => '0','label'=>false)); ?>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Giá sản phẩm </label>

										<div class="col-sm-9">
											<?php 
											echo $this->Form->input('referee', array('class' => 'chosen-select form-control','label'=>false)); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Mã sản phẩm </label>

										<div class="col-sm-9">
											<?php 
											echo $this->Form->input('price', array('class' => 'chosen-select form-control','label'=>false)); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Tổng trọng tải</label>

										<div class="col-sm-9">
											<?php 
											echo $this->Form->input('arbitration', array('class' => 'chosen-select form-control','label'=>false)); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Tải trọng </label>

										<div class="col-sm-9">
											<?php 
											echo $this->Form->input('weight', array('class' => 'chosen-select form-control','label'=>false)); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ảnh đại diện </label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('thumbnail', array('class' => 'form-control', 'id' => 'thumbnail7','label'=>false)); ?>
											<input type="button" value="Chọn..." onclick="BrowseServer7();" class="form-control" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mô tả ngắn</label>

										<div class="col-sm-9">

											<?php echo $this->Form->textarea('description', array('class' => 'form-control limited ckeditor col-xs-10 col-sm-10','id'=>'form-field-9')); ?>


										</div>
									</div>

									<div class="space-4"></div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Nội dung chi tiết</label>

										<div class="col-sm-9">

											<?php echo $this->Form->textarea('content', array('class' => 'form-control limited ckeditor col-xs-10 col-sm-10','id'=>'form-field-9')); ?>


										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Hiển thị</label>

										<div class="col-sm-9">

											<label>
												<?php echo $this->Form->input('publish', array('class' => 'ace ace-switch','type'=>'checkbox')); ?>
												<span class="lbl"></span>
											</label>

											<div class="space-2"></div>

											<div class="help-block" id="input-span-slider"></div>
										</div>
									</div>


									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Thẻ từ khóa:</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('meta_keyword', array('class' =>'col-xs-10 col-sm-5','placeholder'=>'Nhập từ khóa','label'=>false)); ?>
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Thẻ mô tả:</label>

										<div class="col-sm-9">
											<?php echo $this->Form->textarea('meta_description', array('class' => 'form-control limited ckeditor col-xs-10 col-sm-10','id'=>'form-field-9','maxlength'=>50)); ?>

										</div>
									</div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Thêm mới
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Làm mới
											</button>
										</div>
									</div>
									
								</div>

								<div id="profile4" class="tab-pane ">	


									<script>
										 var count=0;
										
										$(document).ready(function(){
											$(".btn-success").click(function(){
												count++;
												 $("#insertImg").append('<fieldset id="additional-field-model"  class="img-list'+count+'" style="padding: 10px;"><div class="form-group"><div id="img-list"><div class="col-md-4"><?php echo $this->Form->input("image.", array("type" => "file", "multiple","class"=>"form-control input-md","required"=>false)); ?></div><div class="col-md-4"><?php echo $this->Form->input("title.",array("placeholder"=>"Nhập tiêu đề","class"=>"form-control input-md","required"=>false)); ?> </div><?php echo $this->Form->input("id.",array("type"=>"hidden","class"=>"form-control input-md","required"=>false)); ?> </div><div class="col-md-4"><p  class="btn btn-warning del-img" onclick=\'myFunction(".img-list'+count+'")\'><i class="fa fa-remove"></i><span > Xóa </span></p></div></div></fieldset>');
											});	
										});
										function myFunction(a) {
											$(a).remove();
										};
										 var data5=[];
										function myFunction1(a,b) {
											$(a).remove();
											data5.push(b);
											$("#test").val(data5);
											
										};	
									</script>

									<p class="btn btn-success create-new-field">
										<i class="fa fa-plus"></i>
										<span class="hidden-xs"> Tạo thêm ảnh </span>
									</p>
									<section id="insertImg">
									<input type="hidden" name="img" id="test">
									<?php
										$count=0;
										if(isset($pictures)):
										foreach($pictures as $item):
										if($item['Picture']['type']==0):
										$count++;
									?>
										<fieldset id="additional-field-model" class="img-list<?php echo $count;?> " style="padding: 10px;">
											<div class="form-group">
												<div id="img-list">
												<div class="col-md-4">
													<?php echo $this->Form->input("image.", array("type" => "file", "multiple","class"=>"form-control input-md","required"=>false)); ?>
												</div>
												<div class="col-md-4">
													<?php echo $this->Form->input('title.',array('placeholder'=>'Nhập tiêu đề','class'=>'form-control input-md','required'=>false,'value'=> $item['Picture']['title'])); ?> 
												</div>
												<?php echo $this->Form->input("id.",array("type"=>"hidden","class"=>"form-control input-md","required"=>false,"value"=> $item["Picture"]["id"])); ?> 
												 
												</div>	
												<div class="col-md-4">
													<p  class="btn btn-warning del-img " onclick="myFunction1('.img-list<?php echo $count;?>',<?php echo $item['Picture']['id'];?>)">
														<i class="fa fa-remove"></i>
														<span class=""> Xóa </span>
													</p>
												</div>
											</div>
										</fieldset>
										<?php 
										endif;
										endforeach;
										endif; 
									?>
									</section>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Thêm mới
											</button>
										</div>
									</div>


								</div>

								<div id="dropdown14" class="tab-pane">
									<script>
										 var count1=0;
										
										$(document).ready(function(){
											$(".btn-success").click(function(){
												count1++;
												 $("#insertImgs").append('<fieldset id="additional-field-model"  class="img-lists'+count1+'" style="padding: 10px;"><div class="form-group"><div id="img-list"><div class="col-md-4"><?php echo $this->Form->input("image1.", array("type" => "file", "multiple","class"=>"form-control input-md","required"=>false)); ?></div><div class="col-md-4"><?php echo $this->Form->input("title1.",array("placeholder"=>"Nhập tiêu đề","class"=>"form-control input-md","required"=>false)); ?> </div><?php echo $this->Form->input("id1.",array("type"=>"hidden","class"=>"form-control input-md","required"=>false)); ?> </div><div class="col-md-4"><p  class="btn btn-warning del-img" onclick=\'myFunction2(".img-lists'+count1+'")\'><i class="fa fa-remove"></i><span > Xóa </span></p></div></div></fieldset>');
											});	
										});
										function myFunction2(a) {
											$(a).remove();
										};
										 var data6=[];
										function myFunction3(a,b) {
											$(a).remove();
											data6.push(b);

											$("#test1").val(data6);

											
										};	
									</script>

									<p class="btn btn-success create-new-field">
										<i class="fa fa-plus"></i>
										<span class="hidden-xs"> Tạo thêm ảnh </span>
									</p>
									<section id="insertImgs">
									<input type="hidden" name="img1" id="test1">
									<?php
										$count=0;
										if(isset($pictures)):
										foreach($pictures as $item):
										if($item['Picture']['type']==1):
										$count++;
									?>
										<fieldset id="additional-field-model" class="img-lists<?php echo $count;?> " style="padding: 10px;">
											<div class="form-group">
												<div id="img-list">
												<div class="col-md-4">
													<?php echo $this->Form->input("image1.", array("type" => "file", "multiple","class"=>"form-control input-md","required"=>false)); ?>
												</div>
												<div class="col-md-4">
													<?php echo $this->Form->input('title1.',array('placeholder'=>'Nhập tiêu đề','class'=>'form-control input-md','required'=>false,'value'=> $item['Picture']['title'])); ?> 
												</div>
												<?php echo $this->Form->input("id1.",array("type"=>"hidden","class"=>"form-control input-md","required"=>false,"value"=> $item["Picture"]["id"])); ?> 
												 
												</div>	
												<div class="col-md-4">
													<p  class="btn btn-warning del-img " onclick="myFunction3('.img-lists<?php echo $count;?>',<?php echo $item['Picture']['id'];?>)">
														<i class="fa fa-remove"></i>
														<span class=""> Xóa </span>
													</p>
												</div>
											</div>
										</fieldset>
										<?php 
										endif; 
										endforeach;
										endif; 
									?>
									</section>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Thêm mới
											</button>
										</div>
									</div>

								</div>

										<div id="dropdown15" class="tab-pane">
											<div class="container" >						
												<h5>Thêm thuộc tính sản phẩm</h5>
												<div id="bs-ml-treetable" class="treetable">
													Loading ...
												</div>
												<input type="hidden" name="techniques" id="techniques">
												<input type="hidden" name="tech" id="tech">
											</div>
											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<button class="btn btn-info" type="submit">
														<i class="ace-icon fa fa-check bigger-110"></i>
														Thêm mới
													</button>
												</div>
											</div>
										</div>
 

									</div>
									<?php echo $this->Form->end(); ?>	
								</div>

							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->

		</div>
		<script type="text/javascript">

			var data= [];

			<?php foreach($picture as $item):?>
			data.push({id:<?php echo $item['id'];?>,name:<?php echo $item['name'];?>,pid:<?php echo $item['pid'];?>,innercode:<?php echo $item['innercode'];?>});
		<?php endforeach;?>

		var data1=[];
		var data2=[];
		var dem=<?php echo $technique;?>;
		alert(dem);


		$("#bs-ml-treetable").bstreetable({
			data:data,
			maintitle:"Tên trường",
			nodeaddCallback:function(data,callback){
			//alert(JSON.stringify(data));
			
			callback({id:dem++,name:data.name,innercode:data.innercode,pid:data.pid});
		},
		noderemoveCallback:function(data,callback){
			data2.push(data);
			alert(data2);
			$("#tech").val(data2);
			//do your things then callback
			callback();
		},
		nodeupdateCallback:function(data,callback){
			data1.push(data);
			alert(JSON.stringify(data1));
			$("#techniques").val(JSON.stringify(data1));
			//do your things then callback
			callback();
		},
		extfield:[
		{title:"Giá trị",key:"innercode",type:"input"}
		]
	})
</script>