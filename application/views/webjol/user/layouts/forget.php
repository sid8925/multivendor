
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Login</a></li>
			<li><a href="#">Forget Paasword</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-6 d-flex align-items-center" ">
				<div class="page-login">
				
			
							
							<form action="<?php echo base_url() ?>forget/forgot" method="post" enctype="multipart/form-data">
								<div class="col-sm-12 customer-login ">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Forget Password</h2>
										<p><strong>Enter your Registered Email </strong></p>
                                        <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<?php  print_r($this->session->flashdata('message')); ?>
</div>    
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address / Mobile No</label>
											<input type="email" name="email" value="" id="input-email" class="form-control" />
										</div>
										<div class="bottom-form">
									
										<input type="submit" value="Send Email" class="btn btn-default pull-right" />
									</div>
									</div>
								
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->