<!-- head -->
<?php $this->load->view('admin/users/head', $this->data)?>
</div>


<div class="row"></div>
<div id="main_product" class="box-body">

     <?php $this->load->view('admin/message', $this->data);?>
    
	
	<div class="widget">
		<div class="col-md-2 form-group pull-right">
			 	<ol class="breadcrumb">
		 	<div>Số lượng: <b><?php echo $total?></b></div>
		 		</ol>
			</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="table table-hover" id="checkAll">
			<thead>
				<tr>
					
					<td>Name</td>
					<td>Email</td>
					<td>Address</td>
					<td>Phone</td>
					<td>Action</td>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach ($list as $row):?>
			<tr>
						
						<td class="tipS"><?php echo $row->name?></td>

						<td>
						<span class="tipS">
							<?php echo $row->email?>				
						</span></td>
						
						<td><span class="tipS">
							<?php echo $row->address?>					
						</span></td>
						<td><span class="tipS">
							<?php echo $row->phone?>					
						</span></td>
						<td>	
						<a class="glyphicon glyphicon-trash" title="Xóa" href="<?php echo admin_url('users/del/'.$row->id)?>">
						</a></td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
	</div>
</div>
</div>
</div>


