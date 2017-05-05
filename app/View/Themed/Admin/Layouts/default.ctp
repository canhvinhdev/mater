<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?php echo $this->fetch('title'); ?></title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<?php
	echo $this->Html->meta('icon');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<!-- bootstrap & fontawesome -->
	<?php echo $this->Html->css('/assets/css/bootstrap.min'); ?>
	<?php echo $this->Html->css('/assets/font-awesome/4.5.0/css/font-awesome.min'); ?>
	<?php echo $this->Html->css('/assets/css/fonts.googleapis.com'); ?>
	<?php echo $this->Html->css('/assets/css/ace.min.css'); ?>
	<!-- page specific plugin styles -->
	<?php echo $this->Html->css('/assets/css/ace-skins.min'); ?>
	<!-- text fonts -->
	<?php echo $this->Html->css('/assets/css/ace-rtl.min'); ?>
	<!-- ace styles -->

	<?php echo $this->Html->script('/assets/js/ckeditor/ckeditor'); ?>
	<?php echo $this->Html->script('/assets/js/ckfinder/ckfinder'); ?>
	<?php echo $this->Html->script('/assets/js/ace-extra.min'); ?>
	<?php echo $this->Html->script('/assets/js/my'); ?>
	<?php echo $this->Html->script('/assets/js/jquery-2.1.4.min'); ?>
	<?php echo $this->Html->script('/assets/js/bootstrap.min'); ?>
	<?php echo $this->Html->script('/assets/js/notify.min'); ?>
	
<?php echo $this->Html->script('/assets/js/jquery.edittreetable'); ?>
	

</head>
<body class="no-skin">
    <?php echo $this->Session->flash();?>
	<?php echo $this->Element('header'); ?>

	<?php echo $this->fetch('content'); ?>

	<?php echo $this->Element('footer'); ?>

	

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<?php echo $this->Html->script('/plugins/datatables/jquery.dataTables.min'); ?>
<?php echo $this->Html->script('/assets/js/duplicateFields'); ?>
<script  type="text/javascript">

        $('#additional-field-model').duplicateElement({
            "class_remove": ".remove-this-field",
            "class_create": ".create-new-field"
        });
        $('#additional-field-model1').duplicateElement({
            "class_remove": ".remove-this-field",
            "class_create": ".create-new-field"
        });


</script>





<script>
	$(document).ready(function(){

		$('#example1').DataTable({
		    	  // "paging": true,
			      // "lengthChange": false,
			      // "searching": true,
			      // "ordering": true,
			      // "info": true,
			      "autoWidth": false,
			      "language": {
			      	"sProcessing":    "Procesando...",
			      	"sLengthMenu":    "Xem _MENU_ mục",
			      	"sZeroRecords":   "Không tìm thấy dữ liệu phù hợp",
			      	"sEmptyTable":    "Không có dữ li",
			      	"sInfo":          " Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục.",
			      	"sInfoEmpty":     "Đang xem 0 đến 0 trong tổng số 0 mục ",
			      	"sInfoFiltered":  "(được lọc từ _MAX_)",
			      	"sInfoPostFix":   "",
			      	"sSearch":        "Tìm kiếm:",
			      	"sUrl":           "",
			      	"sInfoThousands":  ",",
			      	"sLoadingRecords": "Đang tải ...",
			      	"oPaginate": {
			      		"sFirst":    "Trang đầu",
			      		"sLast":    "Trang cuối",
			      		"sNext":    "Trang sau",
			      		"sPrevious": "Trang trước"
			      	},
			      	"oAria": {
			      		"sSortAscending":  ": Sắp xếp tăng dần",
			      		"sSortDescending": ": Sắp xếp giảm dần"
			      	}
			      }
			       // "language": {
		        //     "lengthMenu": "Đang xem _MENU_ đến 10 trong tổng số 324 mục",
		        //     "zeroRecords": "Không tìm thấy dữ liệu",


		        //     "info": "Đang xem _PAGE_ trong tổng số _PAGES_ trang",
		        //     "infoEmpty": "Không tìm thấy dữ liệu",
		        //     "infoFiltered": "(filtered from _MAX_ total records)"
		   		// 	 }
		   	});
		$('.example2').DataTable({
		    	  // "paging": true,
			      // "lengthChange": false,
			      // "searching": true,
			      // "ordering": true,
			      // "info": true,
			      "autoWidth": false,
			      "language": {
			      	"sProcessing":    "Procesando...",
			      	"sLengthMenu":    "Xem _MENU_ mục",
			      	"sZeroRecords":   "Không tìm thấy dữ liệu phù hợp",
			      	"sEmptyTable":    "Không có dữ li",
			      	"sInfo":          " Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục.",
			      	"sInfoEmpty":     "Đang xem 0 đến 0 trong tổng số 0 mục ",
			      	"sInfoFiltered":  "(được lọc từ _MAX_)",
			      	"sInfoPostFix":   "",
			      	"sSearch":        "Tìm kiếm:",
			      	"sUrl":           "",
			      	"sInfoThousands":  ",",
			      	"sLoadingRecords": "Đang tải ...",
			      	"oPaginate": {
			      		"sFirst":    "Trang đầu",
			      		"sLast":    "Trang cuối",
			      		"sNext":    "Trang sau",
			      		"sPrevious": "Trang trước"
			      	},
			      	"oAria": {
			      		"sSortAscending":  ": Sắp xếp tăng dần",
			      		"sSortDescending": ": Sắp xếp giảm dần"
			      	}
			      }
			       // "language": {
		        //     "lengthMenu": "Đang xem _MENU_ đến 10 trong tổng số 324 mục",
		        //     "zeroRecords": "Không tìm thấy dữ liệu",


		        //     "info": "Đang xem _PAGE_ trong tổng số _PAGES_ trang",
		        //     "infoEmpty": "Không tìm thấy dữ liệu",
		        //     "infoFiltered": "(filtered from _MAX_ total records)"
		   		// 	 }
		   	});
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
	});
</script>

<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<?php echo $this->Html->script('/assets/js/jquery-ui.custom.min'); ?>
<?php echo $this->Html->script('/assets/js/jquery.ui.touch-punch.min'); ?>
<?php echo $this->Html->script('/assets/js/jquery.easypiechart.min'); ?>
<?php echo $this->Html->script('/assets/js/jquery.sparkline.index.min'); ?>
<?php echo $this->Html->script('/assets/js/jquery.flot.min'); ?>
<?php echo $this->Html->script('/assets/js/jquery.flot.pie.min'); ?>
<?php echo $this->Html->script('/assets/js/jquery.flot.resize.min'); ?>
<?php echo $this->Html->script('/assets/js/ace-elements.min'); ?>
<?php echo $this->Html->script('/assets/js/ace.min'); ?>
<?php echo $this->Html->script('/assets/js/bootstrap-tag.min'); ?>
<script type="text/javascript">

	jQuery(function($) {
		$('.easy-pie-chart.percentage').each(function(){
			var $box = $(this).closest('.infobox');
			var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
			var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
			var size = parseInt($(this).data('size')) || 50;
			$(this).easyPieChart({
				barColor: barColor,
				trackColor: trackColor,
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: parseInt(size/10),
				animate: ace.vars['old_ie'] ? false : 1000,
				size: size
			});
		})

		$('.sparkline').each(function(){
			var $box = $(this).closest('.infobox');
			var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
			$(this).sparkline('html',
			{
				tagValuesAttribute:'data-values',
				type: 'bar',
				barColor: barColor ,
				chartRangeMin:$(this).data('min') || 0
			});
		});


				  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
				  //but sometimes it brings up errors with normal resize event handlers
				  $.resize.throttleWindow = false;
				  
				  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
				  var data = [
				  { label: "social networks",  data: 38.7, color: "#68BC31"},
				  { label: "search engines",  data: 24.5, color: "#2091CF"},
				  { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				  { label: "direct traffic",  data: 18.6, color: "#DA5430"},
				  { label: "other",  data: 10, color: "#FEE074"}
				  ]
				  function drawPieChart(placeholder, data, position) {
				  	$.plot(placeholder, data, {
				  		series: {
				  			pie: {
				  				show: true,
				  				tilt:0.8,
				  				highlight: {
				  					opacity: 0.25
				  				},
				  				stroke: {
				  					color: '#fff',
				  					width: 2
				  				},
				  				startAngle: 2
				  			}
				  		},
				  		legend: {
				  			show: true,
				  			position: position || "ne", 
				  			labelBoxBorderColor: null,
				  			margin:[-30,15]
				  		}
				  		,
				  		grid: {
				  			hoverable: true,
				  			clickable: true
				  		}
				  	})
				  }
				  drawPieChart(placeholder, data);
				  
				 /**
				 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
				 so that's not needed actually.
				 */
				 placeholder.data('chart', data);
				 placeholder.data('draw', drawPieChart);
				 
				 
				  //pie chart tooltip example
				  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
				  var previousPoint = null;
				  
				  placeholder.on('plothover', function (event, pos, item) {
				  	if(item) {
				  		if (previousPoint != item.seriesIndex) {
				  			previousPoint = item.seriesIndex;
				  			var tip = item.series['label'] + " : " + item.series['percent']+'%';
				  			$tooltip.show().children(0).text(tip);
				  		}
				  		$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				  	} else {
				  		$tooltip.hide();
				  		previousPoint = null;
				  	}
				  	
				  });
				  
					/////////////////////////////////////
					$(document).one('ajaxloadstart.page', function(e) {
						$tooltip.remove();
					});
					
					
					
					
					var d1 = [];
					for (var i = 0; i < Math.PI * 2; i += 0.5) {
						d1.push([i, Math.sin(i)]);
					}
					
					var d2 = [];
					for (var i = 0; i < Math.PI * 2; i += 0.5) {
						d2.push([i, Math.cos(i)]);
					}
					
					var d3 = [];
					for (var i = 0; i < Math.PI * 2; i += 0.2) {
						d3.push([i, Math.tan(i)]);
					}
					
					
					var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
					$.plot("#sales-charts", [
						{ label: "Domains", data: d1 },
						{ label: "Hosting", data: d2 },
						{ label: "Services", data: d3 }
						], {
							hoverable: true,
							shadowSize: 0,
							series: {
								lines: { show: true },
								points: { show: true }
							},
							xaxis: {
								tickLength: 0
							},
							yaxis: {
								ticks: 10,
								min: -2,
								max: 2,
								tickDecimals: 3
							},
							grid: {
								backgroundColor: { colors: [ "#fff", "#fff" ] },
								borderWidth: 1,
								borderColor:'#555'
							}
						});
					
					
					$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
					function tooltip_placement(context, source) {
						var $source = $(source);
						var $parent = $source.closest('.tab-content')
						var off1 = $parent.offset();
						var w1 = $parent.width();
						
						var off2 = $source.offset();
						//var w2 = $source.width();
						
						if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
						return 'left';
					}
					
					
					$('.dialogs,.comments').ace_scroll({
						size: 300
					});
					
					
					//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
					//so disable dragging when clicking on label
					var agent = navigator.userAgent.toLowerCase();
					if(ace.vars['touch'] && ace.vars['android']) {
						$('#tasks').on('touchstart', function(e){
							var li = $(e.target).closest('#tasks li');
							if(li.length == 0)return;
							var label = li.find('label.inline').get(0);
							if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
						});
					}
					
					$('#tasks').sortable({
						opacity:0.8,
						revert:true,
						forceHelperSize:true,
						placeholder: 'draggable-placeholder',
						forcePlaceholderSize:true,
						tolerance:'pointer',
						stop: function( event, ui ) {
							//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
							$(ui.item).css('z-index', 'auto');
						}
					}
					);
					$('#tasks').disableSelection();
					$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
						if(this.checked) $(this).closest('li').addClass('selected');
						else $(this).closest('li').removeClass('selected');
					});
					
					
					//show the dropdowns on top or bottom depending on window height and menu position
					$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
						var offset = $(this).offset();
						
						var $w = $(window)
						if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
							$(this).addClass('dropup');
						else $(this).removeClass('dropup');
					});
					
				})
			</script>
			
		</body>
		</html>