
			    <!-- The box-footer-->
		        
     <div id="footer_text"> <!-- The footer_text --> 
	     <?php foreach ($content as $row) {
	     	
	     ?>
	     	<p>
	     		<?php echo $row->content; ?>
	     	</p>
	     	<?php }; ?>
		 
		 
	 </div><!-- End footer_text -->
	 
	  <div id="footer_face">  <!-- The footer_face -->            
	        <a title="trên facebook" target="_blank" href="https://www.facebook.com/leduchoangviet1997unukute" rel="nofollow">
	             <img alt="trên facebook" src="<?php echo public_url()?>/site/images/facebook.png">
	        </a>
	         
		    <a title="trên twitter" target="_blank" href="https://twitter.com/" rel="nofollow">
		        <img alt="trên twitter" src="<?php echo public_url()?>/site/images/twitter.png">
		    </a>
		      
		    <a title="trên google" target="_blank" href="https://plus.google.com/" rel="nofollow">
		        <img alt="trên google" src="<?php echo public_url()?>/site/images/google.png">
		    </a>   
      </div><!-- End footer_face -->
     <div class="clear"></div><!-- clear float --> 		        <!-- End box-footer -->
		  