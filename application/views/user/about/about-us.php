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
<?php
$query = $this->db->query("select * from system_settings WHERE status = 1");
$result = $query->result_array();
?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="about-blk-content">
				<?php if(!empty($result))
						{
							foreach($result as $data){
								if($data['key'] == 'about_us'){
									$this->terms = $data['value'];
								}
							}
						}
					?>
					<p><?php echo $this->terms?></p>																	
				</div>
			</div>
		</div>
	</div>
</div>
