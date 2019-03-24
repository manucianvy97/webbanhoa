<html>
    <head>
        <?php $this->load->view('site/head');?>
    </head>
    <body>
        <a id="back_to_top" href="#" style="display: none;">
		   <img src="<?php echo public_url()?>/site/images/top.png">
	    </a>
	    
	    <div class="wraper">
	           <div class="header">
	                 <?php $this->load->view('site/header')?>
	           </div>
	           
	           <div id="container">
	                  <div class="left">
	                        <?php $this->load->view('site/left', $this->data);?>
	                  </div>
	                  
	                  <div class="content">
	                      <?php if(isset($message)):?>
	                      <h3 style="color:red"><?php echo $message?></h3>
	                      <?php endif;?>
	                      <?php $this->load->view($temp , $this->data);?>
	                  </div>
	                  
	                  <div class="right">
	                        <?php $this->load->view('site/right', $this->data);?>
	                  </div>
	                  <div class="clear"></div>
	           </div>
	           <center>
				<img src="<?php echo public_url()?>/site/images/bank.png"> 
			   </center>
		       
		       <div class="footer">
		             <?php $this->load->view('site/footer');?>
		       </div>		       
	    </div>
	    

	    <!-- <div class="drag-wrapper drag-wrapper-right">
        <div data-drag="data-drag" class="thing">
            <div class="circle facebook-messenger-avatar facebook-messenger-avatar-type0">
                <img class="facebook-messenger-avatar" src="https://nguyenhungplus.com/chat-fb/facebook-messenger.svg" />
            </div>
            <div class="content">
                <div class="inside">
                    <div class="fb-page" data-width="310" data-height="310" data-href="https://www.facebook.com/CarShop_1511060244-430302940746026/ " data-tabs="messages" data-small-header="true" data-hide-cover="false" data-show-facepile="true" data-adapt-container-width="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/blogcongdongcom"><a href="https://www.facebook.com/blogcongdongcom">Loading...</a></blockquote></div></div>
                </div>
            </div>
        </div>
        <div class="magnet-zone">
            <div class="magnet"></div>
        </div>
    </div> -->
    <link type='text/css' rel='stylesheet' href='https://nguyenhungplus.com/chat-fb/style.css' />
    <script type='text/javascript' src='https://nguyenhungplus.com/chat-fb/jquery.event.move.js'></script>
    <script type='text/javascript' src='https://nguyenhungplus.com/chat-fb//rebound.min.js'></script>
    <script type='text/javascript' src='https://nguyenhungplus.com/chat-fb/index.js'></script>
    </body>
</html>