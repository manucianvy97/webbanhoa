<!-- head -->
<?php $this->load->view('admin/admin/head', $this->data)?>
</div>


<div class="row"></div>
<div id="main_product" class="box-body">

    <?php $this->load->view('admin/message', $this->data);?>
    
	
	<div class="widget">
		<div class="col-md-2 form-group pull-left">
		<a href="<?php echo admin_url('admin/add')?>" class="btn btn-block btn-success"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
	</div>
		<div class="col-md-2 form-group pull-right">
			 	<ol class="breadcrumb">
		 	<div>Số lượng: <b><?php echo $total?></b></div>
		 		</ol>
			</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="table table-hover" id="checkAll">
			<thead>
				<tr>
					
					<td>Username</td>
					<td>Họ và tên</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach ($list as $row):?>
			<tr>
						
						<td><?php echo $row->id?></td>

						<td>
						<span title="<?php echo $row->name?>" class="tipS">
							<?php echo $row->name?>				
						</span></td>
						
						<td class="option">
							<a href="<?php echo admin_url('admin/edit/'.$row->id)?>" title="Chỉnh sửa" class="glyphicon glyphicon-pencil ">
							  
							</a>
							
							<a href="<?php echo admin_url('admin/delete/'.$row->id)?>" title="Xóa" class="glyphicon glyphicon-trash" >
							    
							</a>
						</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
	</div>
</div>
</div>
</div>


