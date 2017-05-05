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
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
						<div id="search-form">
							<!-- <form id="">
								<input type="text" name="search" placeholder="Tìm kiếm.." class="form-control">
							</form> -->
							 <form class="navbar-form navbar-left">
						      <div class="input-group">
						        <input type="text" class="form-control" placeholder="Tìm kiếm">
						        <div class="input-group-btn">
						          <button class="btn btn-default" type="submit">
						            <i class="glyphicon glyphicon-search" style="font-size: 14px !important"></i>
						          </button>
						        </div>
						      </div>
						    </form>
						</div>
					</div>
				</div>
			</div>
		</div>