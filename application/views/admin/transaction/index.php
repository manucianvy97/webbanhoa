<!-- head -->
<?php $this->load->view('admin/transaction/head', $this->data)?>
</div>
	


<div class="row"></div>
<div id="main_transaction" class="box-body">
	<div class="col-md-2 form-group pull-right">
			 	<ol class="breadcrumb">
		 	<div>Số lượng: <b><?php echo $total_rows?></b></div>
		 		</ol>
			</div>
	<div class="widget">
		
		
		<table id="checkAll" class="table table-hover">
			
			<thead><tr><td colspan="6">
				<form method="get" action="<?php echo admin_url('transaction')?>" class="list_filter form">
					<table class="table table-hover"><tbody>
					
						
					</tbody></table>
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					
					<td>Mã số</td>
					<td>Tên Khách Hàng</td>
					<td>Email</td>
					<td>Số điện thoại</td>
					<td>Số tiền</td>
					<td>Cổng thanh toán</td>
					<td>Trạng thái</td>
					<td>Ngày tạo</td>
					<td>Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
						
					     <div class="pagination">
					          <?php echo $this->pagination->create_links()?>
			             </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
			     <?php foreach ($list as $row):?>
			     <tr class="row_<?php echo $row->id?>">
					
					
					<td><?php echo $row->id?></td>
					<td><?php echo $row->user_name?></td>
					<td><?php echo $row->user_email?></td>
					<td><?php echo $row->user_phone?></td>
					
					<td>
					
					 	 <?php echo number_format($row->amount)?> đ				
					
						
					</td>
						<td><?php echo $row->payment ?></td>
						<td><?php
							if($row->status == 0)
							{
								echo 'Chưa thanh toán';
							}elseif ($row->status == 1) {

								echo 'Đã thanh toán';
							}else
							{
								echo 'Thanh toán thất bại';
							}

						 ?></td>
					
					
					<td><?php echo get_date($row->created)?></td>
					
					<td>
						
						
						
						<a class="glyphicon glyphicon-trash" title="Xóa" href="<?php echo admin_url('transaction/del/'.$row->id)?>">
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

</div>
</section>


