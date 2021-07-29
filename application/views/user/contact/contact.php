<div class="breadcrumb-bar">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumb-title">
				</div>
			</div>
			<div class="col-auto float-right ml-auto breadcrumb-menu">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="contact-blk-content">
				<form method="post" enctype="multipart/form-data" id="contact_form" >
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
    
					<div class="row">						
						<div class="col-lg-6">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="name" id="name" >
							</div>
						</div>	
						<div class="col-lg-6">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="text" name="email" id="email">
							</div>
						</div>					

						<div class="col-lg-12">
							<div class="form-group">
								<div class="text-center">
									<div id="load_div"></div>
								</div>
								<label>Message</label>
								<textarea class="form-control" name="message" id="message" rows="5"></textarea>
							</div>
						</div>
					</div>
					<div class="submit-section">
						<button class="btn btn-primary submit-btn submit_service_book"  type="submit" id="submit">Submit</button>
					</div>
				</form>					
				</div>
			</div>
		</div>


	</div>
</div>

