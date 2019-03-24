<!-- head -->
<?php $this->load->view('admin/footer/head', $this->data)?>

</div>
	<div class="box box-primary">
		
		<div class="box-body">

		<form method="post">
                            	<div class="form-group">
                            		<label style="color: blue;">Tên</label>
                            		<input type="text" name="name" class="form-control" value="<?php echo $row->name;?>">

                            	</div>
                            	<label style="color: blue;">Số Điện Thoại</label>
                            	<div class="form-group">
                            		<input type="text" name="phone" class="form-control" value="<?php echo $row->phone;?>">

                            	</div>	
                            	<label style="color: blue;">Email</label>
                            	<div class="form-group">
                            		<input type="email" name="email" class="form-control" value="<?php echo $row->email;?>">

                            	</div>		
                            		
                            <div class="box-footer">
			 <input type="submit" name="ok" value="saves" class="btn btn-primary">
		</div>
        </form>
        </div>

	</div>	
</div>
</div>
</div>
</section>


