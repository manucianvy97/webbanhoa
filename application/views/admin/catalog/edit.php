  <!-- head -->
  <?php $this->load->view('admin/catalog/head', $this->data)?>
  <div class="box-body">
          <div class="col-md-2 form-group pull-left">
            <a href="<?php echo admin_url('catalog/index')?>" class="btn btn-block btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Trở lại danh sách</a>
          </div>
               

        <form method="post" id="form" enctype="multipart/form-data">
            
               <div class="col-md-2 form-group pull-right">
                    <input type="submit" class="btn btn-primary btn-block" value="Cập Nhật">
                </div>
              <div class="col-md-12 form-group pull-right">
                <div class="form-group">
                  <table class="table">
                    <tr>
                      <td for="param_name"><h4>Tên:<font color="red">*</font></h4></td>
                      <td> 
                        
                        <input type="text" _autocheck="true" id="param_name" value="<?php echo $info->name?>" name="name">
                          <span name="name_autocheck"></span>
                        <div name="name_error"><?php echo form_error('name')?></div>
                      </td>
                    </tr>
                    

                     <tr>
                      <td for="param_name"><h4>Danh mục cha:</h4></td>
                      <td>
                        <span class="oneTwo">
                            <select _autocheck="true" id="param_parent_id"  name="parent_id">
                                 <option value="0">Là danh mục cha</option>
                                 <?php foreach ($list as $row):?>
                                   <option value="<?php echo $row->id?>" <?php echo ($row->id == $info->parent_id) ? 'selected' : '';?>><?php echo $row->name?></option>
                                 <?php endforeach;?>
                            </select>
                        </span>
                        <span class="autocheck" name="parent_id_autocheck"></span>
                        <div class="clear error" name="parent_id_error"><?php echo form_error('parent_id')?></div>
                      </td>
                      <div class="clear"></div>
                    </tr>
                    
                     <tr>
                      <td for="param_name"><h4>Thứ tự hiển thị:</h4></td>
                      <td>
                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_sort_order" value="<?php echo $info->sort_order?>" name="sort_order"></span>
                        <span class="autocheck" name="sort_order_autocheck"></span>
                        <div class="clear error" name="sort_order_error"><?php echo form_error('sort_order')?></div>
                      </td>
                      <div class="clear"></div>
                    </tr>
                  </table>
                </div>
              </div>
        </form>
        
        </div>
      </div>
    </div>
  </div>
</section>