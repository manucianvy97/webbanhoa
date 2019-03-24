<!-- head -->
<?php $this->load->view('admin/product/head', $this->data)?>
</div>
	


<div class="row"></div>
<div id="main_product" class="box-body">
	<div class="col-md-2 form-group pull-left">
		<a href="<?php echo admin_url('product/add')?>" class="btn btn-block btn-success"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>
	</div>
	<div class="col-md-2 form-group pull-right">
			 	<ol class="breadcrumb">
		 	<div>Số lượng: <b><?php echo $total_rows?></b></div>
		 		</ol>
			</div>
	<div class="widget">
		
		
		<table id="checkAll" class="table table-hover">
			
			<thead><tr><td colspan="6">
				<form method="get" action="<?php echo admin_url('product')?>" class="list_filter form">
					<table class="table table-hover"><tbody>
					
						<tr>
							<td><label for="filter_id">Mã số</label></td>
							<td class="item"><input type="text" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>
							
							<td><label for="filter_id">Tên</label></td>
							<td  class="item"><input type="text" id="filter_iname" value="<?php echo $this->input->get('name')?>" name="name"></td>
							
							<td><label for="filter_status">Thể loại</label></td>
							<td class="item">
								<select name="catalog">
									<option value=""></option>
										<!-- kiem tra danh muc co danh muc con hay khong -->
										<?php foreach ($catalogs as $row):?>
										<?php if(count($row->subs) > 1):?>
    				      				<optgroup label="<?php echo $row->name?>">
    				      				    <?php foreach ($row->subs as $sub):?>
    				               			<option value="<?php echo $sub->id?>" <?php echo ($this->input->get('catalog') == $sub->id) ? 'selected' : ''?>> <?php echo $sub->name?> </option>
    						                <?php endforeach;?>
    				               		</optgroup>
    				               		<?php else:?>
    				               		  <option value="<?php echo $row->id?>" <?php echo ($this->input->get('catalog') == $row->id) ? 'selected' : ''?>><?php echo $row->name?></option>
    				               		<?php endif;?>
    				               		<?php endforeach;?>
								</select>
							</td>
							
							<td style="width:150px">
							<input type="submit" value="Lọc" class="button blueB">
							<input type="reset" onclick="window.location.href = '<?php echo admin_url('product')?>'; " value="Reset" class="basic">
							</td>
							
						</tr>
					</tbody></table>
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					
					<td>Mã số</td>
					<td>Tên</td>
					<td>Giá</td>
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
			     <tr>
					
					
					<td><?php echo $row->id?></td>
					
					<td>
					<div class="image_thumb">
						<img height="50" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
						<div class="clear"></div>
					</div>
					
					<a target="_blank" title="" class="tipS" href="">
					    <b><?php echo $row->name?></b>
					</a>
					
					<div class="f11">
					  Đã bán: <?php echo $row->buyed?>	| Xem: <?php echo $row->view?>					
					 </div>
						
					</td>
					
					<td>
					    <?php if($row->discount > 0):?>
					       <?php $price_new = $row->price - $row->discount;?>
					       <b style="color:red"><?php echo number_format($price_new)?> đ</b>
					       <p style="text-decoration:line-through"><?php echo number_format($row->price)?> đ</p>
					    <?php else:?>
					        <b style="color:red"><?php echo number_format($row->price)?> đ</b>
					    <?php endif;?>   				
					</td>
					
					<td><?php echo get_date($row->created)?></td>
					
					<td>
						<a title="Xem chi tiết sản phẩm" class="glyphicon glyphicon-list-alt" target="_blank" href="<?php echo admin_url('product/detail/'.$row->id)?>">
							
						 </a>
						 
						 <a class="glyphicon glyphicon-pencil" title="Chỉnh sửa" href="<?php echo admin_url('product/edit/'.$row->id)?>">
						</a>
						
						<a class="glyphicon glyphicon-trash" title="Xóa" href="<?php echo admin_url('product/del/'.$row->id)?>">
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


