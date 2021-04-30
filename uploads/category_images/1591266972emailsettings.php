<div class="page-wrapper">
	<div class="content container-fluid">
			
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Email Settings </h3>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
	
		<ul class="nav nav-tabs menu-tabs">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url().'admin/settings'; ?>">General Settings</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url().'admin/emailsettings';?>">Email Settings</a>
			</li>
			<li class="nav-item">
				 <a class="nav-link" href="<?php echo base_url().'admin/stripe_payment_gateway'; ?>">Payment Gateway</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url().'admin/sms-settings'; ?>">SMS Gateway</a>
			</li>
		</ul>
		
		<div class="row">
			<div class="col-xl-8 col-lg-12">
				
				<div class="card">
					<div class="card-body">
						<form id="form_emailsetting" action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
    
							<div class="form-group">
								<label >Email From Address</label>
								<input type="email" id="website_name" name="email_address" value="<?php if (isset($email_address)) echo $email_address;?>" class="form-control">
							</div>
							<div class="form-group">
								<label >Email Password</label>
								<input type="password" id="email_password" name="email_password" value="<?php if (isset($email_password)) echo $email_password;?>" class="form-control">
							</div>
							<div class="form-group">
								<label>Emails From Name</label>
								<input type="text" id="email_tittle" name="email_tittle" value="<?php if (isset($email_tittle)) echo $email_tittle;?>" class="form-control only_alphabets">
							</div>
							<div class="mt-4">
								<?php if($user_role==1){?>
								<button name="form_submit" type="submit" class="btn btn-primary center-block" value="true">Save Changes</button>
								 <?php }?>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
