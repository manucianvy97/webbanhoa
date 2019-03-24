<!-- head -->
<?php $this->load->view('admin/slide/head', $this->data)?>
</div>
<div class="box-body">
          <div class="col-md-2 form-group pull-right">
            <a href="<?php echo admin_url('slide/index')?>" class="btn btn-block btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Trở lại danh sách</a>
          </div>
    </div>
	   	<!-- Form -->
		<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('slide/add')?>" id="form">
			 <div class="box-body">
                <div class="nav-tabs-custom" >
				    <ul class="nav nav-tabs pull-left">
		                <li class="active"><a href="#tab1">Thông tin chung</a></li>
		             
					</ul>
					   
					<div class="tab-content no-padding">
					     <div class="chart tab-pane active" id="tab1" style="position: relative; height: 400px;">
                            <br>
					         <div class="form-group">
                            	<label for="param_name" class="col-sm-2 control-label">Tên slide:<span style="color: red;">*</span></label>
                            	<div class="col-sm-10">
                            		<span class=" "><input type="text" _autocheck="true" id="param_name" name="name" style="width: 500px;" class="form-control"></span>
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
                            	<label for="param_name" class="col-sm-2 control-label">Link:</label>
                            	<div class="col-sm-10">
                            		<span class=" "><input type="text" _autocheck="true" id="param_link" name="link" style="width: 500px;" class="form-control"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                            
                             <div class="form-group">
                            	<label for="param_name" class="col-sm-2 control-label">Mô tả:</label>
                            	<div class="col-sm-10">
                            		<span class=" "><input type="text" _autocheck="true" id="param_info" name="info" style="width: 600px;" class="form-control"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
                            	</div>
                            	<div class="clear"></div>
                            </div>
                            
                            <div class="form-group">
                            	<label for="param_name" class="col-sm-2 control-label">Thứ tự hiển thị:</label>
                            	<div class="col-sm-10">
                            		<span class=" "><input type="text" _autocheck="true" id="param_sort_order" name="sort_order" style="width: 100px;" class="form-control"></span>
                            		<span class="autocheck" name="name_autocheck"></span>
                            		<div class="clear error" name="name_error"></div>
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
			</div>>
		</form>
</div>
</div>
</div>

