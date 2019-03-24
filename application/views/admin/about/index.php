<!-- head -->
<?php $this->load->view('admin/about/head', $this->data)?>

</div>
	<div class="box-body">
		
		<div class="col-md-12">

		<form method="post">
                            		<textarea class="editor" id="param_content" name="main"><?php echo $row->Content ?></textarea>
                            		
                            <div class="col-md-3 form-group pull-right">
			 <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
		</div>
        </form>
        </div>

	</div>	
</div>
</div>
</div>
</section>


