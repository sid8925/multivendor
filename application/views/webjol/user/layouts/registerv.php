<!-- Main Container  -->
<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Register</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<h2 class="title">Register Account</h2>
				<p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
				<form action="<?php echo base_url() ?>registerc/insert" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
					<fieldset id="account">
						<legend>Your Personal Details</legend>
						<div class="form-group required" style="display: none;">
							<label class="col-sm-2 control-label">Customer Group</label>
							<div class="col -sm-10">
								<div class="radio">
									<label>
										<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
									</label>
								</div>
							</div>
                        </div>
                        <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<?php  print_r($this->session->flashdata('message')); ?>
</div>    
				
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-fname">First Name</label>
							<div class="col-sm-10">
								<input type="text" name="fname" value="" placeholder="First Name" id="input-fname" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-lname">Last Name</label>
							<div class="col-sm-10">
								<input type="text" name="lname" value="" placeholder="Last Name" id="input-lname" class="form-control">
							</div>
                        </div>
                        <div class="form-group required">
							<label class="col-sm-2 control-label" for="input-username">User Name</label>
							<div class="col-sm-10">
								<input type="text" name="username" value="" placeholder="Display Name" id="input-username" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
							<div class="col-sm-10">
								<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-mobile">Mobile No</label>
							<div class="col-sm-10">
								<input type="tel" name="mobile" value="" placeholder="Mobile No" id="input-mobile" class="form-control">
							</div>
						</div>
						
					</fieldset>
				<?php /*	<fieldset id="address">
						<legend>Your Address</legend>
						
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-address">Address </label>
							<div class="col-sm-10">
								<input type="text" name="address" value="" placeholder="Address " id="input-address" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="input-landmark">Landmark </label>
							<div class="col-sm-10">
								<input type="text" name="landmark" value="" placeholder="Landmark " id="input-landmark" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-city">City</label>
							<div class="col-sm-10">
								<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-pincode">Pin Code</label>
							<div class="col-sm-10">
								<input type="text" name="pincode" value="" placeholder="Post Code" id="input-pincode" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-country">Country</label>
							<div class="col-sm-10">
								<select name="country_id" id="input-country" class="form-control">
									<option value=""> --- Please Select --- </option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
								</select>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
							<div class="col-sm-10">
								<select name="zone_id" id="input-zone" class="form-control">
									<option value=""> --- Please Select --- </option>
									<option value="3513">Aberdeen</option>
									<option value="3514">Aberdeenshire</option>
									<option value="3515">Anglesey</option>
									<option value="3516">Angus</option>
								  
								</select>
							</div>
						</div>
			*/	?>	</fieldset>
					<fieldset>
						<legend>Your Password</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-pass">Password</label>
							<div class="col-sm-10">
								<input type="password" name="pass" value="" placeholder="Password" id="input-pass" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
							<div class="col-sm-10">
								<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
							</div>
						</div>
					</fieldset>
				<?php /*	<fieldset>
						<legend>Newsletter</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label">Subscribe</label>
							<div class="col-sm-10">
								<label class="radio-inline">
									<input type="radio" name="newsletter" value="1"> Yes
								</label>
								<label class="radio-inline">
									<input type="radio" name="newsletter" value="0" checked="checked"> No
								</label>
							</div>
						</div>
			*/	?>	</fieldset>
					<div class="buttons">
						<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
							<input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
							<input type="submit" value="Continue" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //Main Container -->