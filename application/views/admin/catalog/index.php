		<?php $this->load->view('admin/catalog/head', $this->data)?>
			<div class="box-body">
				<div class="col-md-2 form-group pull-left">
					<a href="<?php echo admin_url('catalog/add')?>" class="btn btn-block btn-success"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
				</div>
		<?php $this->load->view('admin/message', $this->data);?>
			<div class="col-md-2 form-group pull-right">
			 	<ol class="breadcrumb">
			 		<div>Tổng số: <b><?php echo count($list)?></b></div>
			 		</ol>
			</div>
			<table class="table table-hover" id="sort">
				<tbody>
					<tr>
						<th>Mã số</th>
						<th>Thứ tự hiển thị</th>
						<th>Tên danh mục</th>
						<th class="col-md-5 form-group pull-right">Hành động</th>
					</tr>
				<?php foreach ($list as $row):?>
				<tr>
							
							
							<td><?php echo $row->id?></td>
	                        <td><?php echo $row->sort_order?></td>
	                        
							<td>
							<span>
								<?php echo $row->name?>				
							</span>
							</td>
							
							
							<td class="col-md-5 form-group pull-right">
								<a href="<?php echo admin_url('catalog/edit/'.$row->id)?>" title="Chỉnh sửa" class="glyphicon glyphicon-pencil">
								   
								</a>
								
								<a href="<?php echo admin_url('catalog/delete/'.$row->id)?>" title="Xóa" class="glyphicon glyphicon-trash" >
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
</section>
