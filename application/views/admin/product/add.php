<!-- head -->
<?php $this->load->view('admin/product/head', $this->data)?>

<div class="box-body">
          <div class="col-md-2 form-group pull-left">
            <a href="<?php echo admin_url('product/index')?>" class="btn btn-block btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Trở lại danh sách</a>
          </div>
    </div>
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('product/add')?>" id="form" >
			 <div class="box-body">
				<div class="nav-tabs-custom" >
					
				    <ul class="nav nav-tabs pull-left">
		                <li class="active"><a href="#tab1" data-toggle="tab">Thông tin chung</a></li>
		                <li class=""><a href="#tab2" data-toggle="tab">SEO Onpage</a></li>
		                <li class=""><a href="#tab3" data-toggle="tab">Bài viết</a></li>
		                
					</ul>
					<div class="tab-content no-padding">
					     <div class="chart tab-pane active" id="tab1" style="position: relative; height: 500px;">
					         <div class="form-group">
	<label for="param_name" class="col-sm-2 control-label">Tên:<span style="color: red;">*</span></label>
	<div class="col-sm-10">
		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name" style="width: 500px;" class="form-control"></span>
		<span class="autocheck" name="name_autocheck"></span>
		<div class="clear error" name="name_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Hình ảnh:<span style="color: red;">*</span></label>
	<div class="col-sm-10">
		<div>
    		<input type="file" name="image" id="image" size="25">
		</div>
		<div class="clear error" name="image_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Ảnh kèm theo:</label>
	<div class="col-sm-10">
		<div>
    		<input type="file" multiple="" name="image_list[]" id="image_list" size="25" >
		</div>
		<div class="clear error" name="image_list_error"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- Price -->
<div class="form-group">
	<label for="param_price" class="col-sm-2 control-label">
		Giá :
		<span style="color: red;">*</span>
	</label>
	<div class="col-sm-10">
		<span class="oneTwo">
			<input type="text" _autocheck="true"  class="form-control" id="param_price" style="width:100px" name="price">
			
		</span>
		<span class="autocheck" name="price_autocheck"></span>
		<div class="clear error" name="price_error"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- Price -->
<div class="form-group">
	<label for="param_discount" class="col-sm-2 control-label">
		Giảm giá (VND) 
		<span></span>:
	</label>
	<div class="col-sm-10">
		<span>
			<input type="text" class="form-control" id="param_discount" style="width:100px" name="discount">
			
		</span>
		<span class="autocheck" name="discount_autocheck"></span>
		<div class="clear error" name="discount_error"></div>
	</div>
	<div class="clear"></div>
</div>


<div class="form-group">
	<label for="param_cat" class="col-sm-2 control-label">Thể loại:<span style="color: red;">*</span></label>
	<div class="col-sm-10">
	    <select name="catalog"  class="form-control" style="width: 200px;" >
			<option value=""></option>
				<!-- kiem tra danh muc co danh muc con hay khong -->
				<?php foreach ($catalogs as $row):?>
				<?php if(count($row->subs) > 1):?>
  				<optgroup label="<?php echo $row->name?>">
  				    <?php foreach ($row->subs as $sub):?>
           			<option value="<?php echo $sub->id?>"> <?php echo $sub->name?> </option>
	                <?php endforeach;?>
           		</optgroup>
           		<?php else:?>
           		  <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
           		<?php endif;?>
           		<?php endforeach;?>
		</select>
		<span class="autocheck" name="cat_autocheck"></span>
		<div class="clear error" name="cat_error"></div>
	</div>
	<div class="clear"></div>
</div>


<!-- warranty -->
<div class="form-group">
	<label for="param_warranty" class="col-sm-2 control-label">
		Bảo hành :
	</label>
	<div class="col-sm-10">
		<span class="oneFour"><input type="text" id="param_warranty" name="warranty" class="form-control"></span>
		<span class="autocheck" name="warranty_autocheck"></span>
		<div class="clear error" name="warranty_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="form-group">
	<label for="param_sale" class="col-sm-2 control-label">Tặng quà:</label>
	<div class="col-sm-10">
		<span class="oneTwo"><textarea cols="" rows="4" id="param_gifts" name="gifts" class="form-control"></textarea></span>
		<span class="autocheck" name="sale_autocheck"></span>
		<div class="clear error" name="sale_error"></div>
	</div>
	<div class="clear"></div>
</div>					         
						 </div>
						 
						 <div class="chart tab-pane" id="tab2" style="position: relative; height: 500px;">
						     			
<div class="form-group">
	<label for="param_site_title" class="col-sm-2 control-label">Title:</label>
	<div class="col-sm-10">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_site_title" name="site_title" class="form-control"></textarea></span>
		<span class="autocheck" name="site_title_autocheck"></span>
		<div class="clear error" name="site_title_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="form-group">
	<label for="param_meta_desc" class="col-sm-2 control-label">Meta description:</label>
	<div class="col-sm-10">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc" class="form-control"></textarea></span>
		<span class="autocheck" name="meta_desc_autocheck"></span>
		<div class="clear error" name="meta_desc_error"></div>
	</div>
	<div class="clear"></div>
</div>

<div class="form-group">
	<label for="param_meta_key" class="col-sm-2 control-label">Meta keywords:</label>
	<div class="col-sm-10">
		<span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key" class="form-control"></textarea></span>
		<span class="autocheck" name="meta_key_autocheck"></span>
		<div class="clear error" name="meta_key_error"></div>
	</div>
	<div class="clear"></div>
</div>
						     <div class="form-group hide"></div>
						 </div>
						 
						 <div class="chart tab-pane" id="tab3" style="position: relative; height: 500px;">
						      <div class="form-group">
						      <br>
                            	<label class="col-sm-2 control-label">Nội dung:</label>
                            	<div class="col-sm-10">
                            		<textarea class="editor" id="param_content" name="content"></textarea>
                            		<div class="clear error" name="content_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
						      <div class="form-group hide"></div>
						 </div>
						
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit">
	           			<input type="submit" class="btn btn-info pull-right" value="Thêm mới">
	           			<input type="reset" class="btn btn-default" value="Hủy bỏ">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</div>
		</form>
</div>
</div>
</div>
</section>