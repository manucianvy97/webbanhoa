
			                  <!-- The Support -->
	     <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Hỗ trợ trực tuyến </h2>
			    </div>
			    <div class="content-box">
			         <!-- goi ra phuong thuc hien thi danh sach ho tro -->
			         <div class="support">
			         <?php foreach ($sp as $row) {
	     	
	     ?>
                    <strong><?php echo $row->name; ?> </strong>				
	      <?php } ?>
	      			<p>
	         <img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/phone.png"> 
	         <?php foreach ($sp as $row) {
	     	
	     ?><?php echo $row->phone; ?>     
	         		</p>
	      <?php } ?>
		  <?php foreach ($sp as $row) {
	     	
	     ?>
			<a rel="nofollow" href="mailto:<?php echo $row->email; ?>">
			    <img style="margin-bottom:-3px" src="<?php echo public_url()?>/site/images/email.png"> 
			   
			    Email: <?php echo $row->email; ?>
			    <?php } ?>
		    </a>
		 
		  </div>
		</div>			        
          
       <!-- End Support -->
       
          <!-- <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Bản đồ </h2>
			    </div>
			    <div class="content-box">
			       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.494677970557!2d106.7148458!3d10.8018391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c3d29d370b52a7e!2sHutech+University!5e0!3m2!1svi!2s!4v1523346097068"
                                        width="190" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
	    </div> -->
   </div>		<!-- End news -->
		
        <!-- The Ads -->
		<!-- End Ads -->
		
		 <!-- The Fanpage -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2>Fanpage</h2>
			        </div>
			   	       <script type="text/javascript">
    window.fbAsyncInit = function () {
        FB.init({
            appId: '657549527725084',
            xfbml: true,
            version: 'v2.6'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-page"
     data-href="https://www.facebook.com/Shophoavip/"
     data-tabs="messages"
     data-width="190"
     data-height="300"
     data-small-header="true">
    <div class="fb-xfbml-parse-ignore">
        <blockquote></blockquote>
    </div>
</div>
</div>
		
		    <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Thống kê truy cập </h2>
			    </div>
			    <div class="content-box">
			        <center>
			        <!-- Histats.com  START  (standard)-->
					<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script><script src="http://s10.histats.com/js15.js" type="text/javascript"></script>
					<a href="http://www.histats.com" target="_blank" title="hit counter"><script type="text/javascript">
					try {Histats.start(1,2138481,4,401,118,80,"00011111");
					Histats.track_hits();} catch(err){};
					</script><div id="histats_counter_456" style="display: block;"><a href="http://www.histats.com/viewstats/?sid=2138481&amp;ccid=401" target="_blank"><canvas id="histats_counter_456_canvas" width="119" height="81"></canvas></a></div></a>
					<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2138481&101" alt="hit counter" border="0"></a></noscript>
				    <!-- Histats.com  END  -->
					</center>                
			    </div>
		   </div>
		     </div>