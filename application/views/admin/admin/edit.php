<!-- head -->
<?php $this->load->view('admin/admin/head', $this->data)?>

<div class="box-body">
          <div class="col-md-2 form-group pull-left">
            <a href="<?php echo admin_url('admin/index')?>" class="btn btn-block btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Trở lại danh sách</a>
          </div>
    </div>
 
      <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
           <div class="box-body">
                <div class="form-group">
                  <label for="param_name" class="col-sm-2 control-label">Tên:<span style="color: red" > *</span></label>
                	<div class="col-sm-10">
                		<span class=" "><input type="text" _autocheck="true" id="param_name" value="<?php echo $info->name?>" name="name" class="form-control" style="width:200px"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('name')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                  <div class="form-group">
                  <label for="param_username" class="col-sm-2 control-label">Username:<span style="color: red"> *</span></label>
                	<div class="col-sm-10">
                		<span class=" "><input type="text" _autocheck="true" value="<?php echo $info->username?>" id="param_username" name="username" class="form-control" style="width:200px"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('username')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                 <div class="form-group">
                  <label for="param_username" class="col-sm-2 control-label">Password:<span style="color: red"> *</span></label>
                	<div class="col-sm-10">
                		<span class=" ">
                		<input type="password" _autocheck="true" id="param_password" name="password" class="form-control" style="width:200px">
                		<p>Nếu cập nhật mật khẩu thì mới nhập giá trị</p>
                		</span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('password')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                
                 <div class="form-group">
                  <label for="param_username" class="col-sm-2 control-label">Nhập lại mật khẩu:<span style="color: red"> *</span></label>
                	<div class="col-sm-10">
                		<span class=" "><input type="password" _autocheck="true" id="param_re_password" name="re_password"  class="form-control" style="width:200px"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('re_password')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                
                <div class="formSubmit">
	           			<input type="submit" class="redB" value="Cập nhật">
	           	</div>
          </div>
      </form>
      
      </div>
</div>
