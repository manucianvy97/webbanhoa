<!-- head -->
<?php $this->load->view('admin/slide/head', $this->data)?>

</div>
	


<div class="row"></div>
<div id="main_product" class="box-body">
	<div class="col-md-2 form-group pull-left">
		<a href="<?php echo admin_url('slide/add')?>" class="btn btn-block btn-success"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
	</div>
	<div class="col-md-2 form-group pull-right">
			 	<ol class="breadcrumb">
		 	<div>Số lượng: <b><?php echo $total_rows?></b></div>
		 		</ol>
			</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			<thead>
				<tr>
					<td><center>Mã số</center></td>
					<td><center>Tiêu đề</center></td>
					<td><center>Thứ tự</center></td>
					<td> <center> Hành động</center></td>
				</tr>
			</thead>
			
			
			<tbody class="list_item">
			     <?php foreach ($list as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					
					<td><center><?php echo $row->id?></center></td>
					
					<td><center>
					<div class="img-responsive">
						<img height="50" src="<?php echo base_url('upload/slide/'.$row->image_link)?>">
						<div class="clear"></div>
					</div>
					
					<a target="_blank" title="" class="tipS" href="">
					    <b><?php echo $row->name?></b>
					</a>
					</center>
					</td>
					<td><center><?php echo $row->sort_order?></center></td>
					
					<td><center>
						 
						 
						 <a class="glyphicon glyphicon-pencil" title="Chỉnh sửa" href="<?php echo admin_url('slide/edit/'.$row->id)?>">
							
						</a>
						
						<a class="glyphicon glyphicon-trash" title="Xóa" href="<?php echo admin_url('slide/del/'.$row->id)?>">
						   
						</a>
						</center>
					</td>
				</tr>
				<?php endforeach;?>
		   </tbody>
			
		</table>
	</div>
	
</div>
</div>
</div>
</section>


