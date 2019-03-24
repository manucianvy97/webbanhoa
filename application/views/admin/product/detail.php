<?php $this->load->view('admin/product/head', $this->data)?>


<div class="box-body">
          <div class="col-md-2 form-group pull-left">
            <a href="<?php echo admin_url('product/index')?>" class="btn btn-block btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Trở lại danh sách</a>
          </div>
    </div>
		      <table class="table table-hover"><!-- The box-content-center -->
		           <td class='product_view_img'>
		                <a href="<?php echo base_url('upload/product/'.$product->image_link)?>" class="jqzoom" rel='gal1'  title="triumph" >
				            <img  src="<?php echo base_url('upload/product/'.$product->image_link)?>" alt='Tivi LG 520' style="width:280px !important">
				        </a>
				         <div class='clear' style='height:10px'></div>
		           </td>
		           
		           <td class='product_view_content'>
		               <h1><?php echo $product->name?></h1>
		               
		                  
				              
		               <p>
		                   Giá:
		                  <?php if($product->discount > 0):?>
                              <?php $price_new = $product->price - $product->discount;?>
                              <span class='product_price'><?php echo number_format($price_new)?> đ</span>
                               <span class="price_old"><?php echo number_format($product->price)?> đ</span>
			              <?php else:?>
			                 <span class='product_price'><?php echo number_format($product->price)?> đ</span> 
			              <?php endif;?>
				              
		                 
		               </p>
		               <p>Ngày tạo: <?php echo get_date ($product->created)?></p>
		                <p>
		                  Danh mục: 
		                  <a href="<?php echo base_url('product/catalog/'.$catalog->id)?>" title="<?php echo $catalog->name?>">
		                     <b><?php echo $catalog->name?></b>    
		                  </a>
		               </p>
		               <?php if($product->warranty != ''):?>
		               <p>
		                  Bảo hành: <b><?php echo $product->warranty?></b> 
		               </p>
		               <?php endif;?>
		               <?php if($product->gifts != ''):?>
		               <p>
		                  Tặng quà: <b><?php echo $product->gifts?></b> 
		               </p>
		               <?php endif;?>
		               		              
		            
		           </td>
		         
		           
</table>




<div class="usual-content">
     <div id="tab2"> 
    		<?php echo $product->content?>
    		<!-- comment facebook -->
    </div>
    <div id="tab3" style="display: none;"> 
	    <!-- the div chay video -->
	    <div id='mediaspace' style="margin:5px;"></div>
	</div>
</div>



