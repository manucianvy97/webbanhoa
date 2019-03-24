<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/head'); ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/header'); ?>
		<?php $this->load->view('admin/menu'); ?>
		<div class="content-wrapper">
			<section class="content">
      
     			<?php $this->load->view($temp,$this->data);?>

    		</section>
		</div><span>
		
		<?php $this->load->view('admin/footer'); ?></span>
	</div>
	<div>
		
		
		<?php $this->load->view('admin/script'); ?>
		</div>
</body>
</html>
