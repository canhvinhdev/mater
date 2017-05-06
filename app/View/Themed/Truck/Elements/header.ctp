        <?php $bussiness = $this->requestAction('/app/bussiness');?>

        <div class="container-fluid full-width">
		    <div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
						<div id="logo">
							<a href="/"><img src="<?php echo $bussiness['logo']; ?>" class="img-responsive" alt="Isuzu Always beside you"></a>
						</div>
					</div>	
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
						<div id="contact">
							<div id="header-text">
								<strong><?php echo 'Isuzu Always beside you' ?></strong>
							</div>
							
						</div>
					</div>
					<style>
						.typeahead{
							position: relative;
						}
						#content-search{
							position: absolute;
							width: 80%;
							background: #ffffff;
							height: 200px;
							overflow: auto;
							    margin-top: 45px;
   							 z-index: 999;
   							 display: none;
						}
						#content-search ul li{
							/*//border-bottom: 1px dotted gray;*/
							list-style: none;
							padding: 10px 0px;
						}
						#content-search ul li img{
							
							padding: 0px 5px;
						}
						/*.active-sear{
							display: block !important;
						}*/	
					</style>
					<script>
						$(document).ready(function(){
							$('#search-input').on('keyup', function(ev){
								var a  = $("#search-input").val();
								if(a=== ""){
									$("#content-search").hide();
								}else{
									
									$("#content-search").show();
								}

							});
						});
					</script>
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
						<div id="search-form">
							<!-- <form id="">
								<input type="text" name="search" placeholder="Tìm kiếm.." class="form-control">
							</form> -->
							 <form class="navbar-form navbar-left" id="nav-search" style="padding: 0px !important">
						      <div class="input-group">
								<input class="typeahead form-control" id="search-input" type="text" placeholder="Tìm kiếm">
						        <div class="input-group-btn">
						          <button class="btn btn-default" type="submit">
						            <i class="glyphicon glyphicon-search" style="font-size: 14px !important"></i>
						          </button>
						        </div>
						      </div>
						    </form>
							<div id="content-search">
								<ul>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 1</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 2</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 3</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 4</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 5</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 1</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 2</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 3</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 4</li>
									<li><img src="https://www.w3schools.com/images/compatible_chrome.gif" alt="">Test 5</li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>