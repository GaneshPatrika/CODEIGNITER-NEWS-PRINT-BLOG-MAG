<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Start Footer Section -->


            <!----Footer Begins-->
            
            
<div id="footer" class="gridlove-footer">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-6 col-sm-12">
				<div id="text-4" class="widget widget_text">
					<div class="textwidget"><p><img src="<?php echo base_url() . 'uploads/logo/footer_logo.png' ?>" alt="logo" width="159"></p>
					<br><br><p>Owner & Editor: Tamanna Bhanot <br>
Content Support: Foona App</br>
Printed At:Payorite Printers, Jaipur</p>
					</div>
				</div>
				<?php //$this->load->view("partials/_social_links_blog"); ?>

			
		</div>
				




				<div class="col-lg-3 col-md-6 col-sm-12">
                       <div id="text-5" class="widget widget_text">
                       	<h4 class="widget-title"> Subscribe Pinkbuzz </h4>
                       	<div class="textwidget"><div id="mc_embed_signup">
						 <p>We publish Pink Buzz fortnightly. Copies are delivered Digitally or by Registered Courier or Post.<br> 
Our content is designed for children from 5 to 15 years of age and we promise parents and grandparents that they will enjoy our articles too!<br>
Our first two editions are FREE through this quick subscription.
</p>

						  <?php echo form_open('subscribe'); ?>


						<div id="mc_embed_signup_scroll">

							<div class="mc-field-group">
							<label class="checkbox-inline"><input id="chk_print" name="sus_chk_print" type="checkbox" value="print"> Print Subscription </label>
							</div>
						
							<div class="mc-field-group">
							<label class="checkbox-inline"><input id="chk_digital" name="sus_chk_digital" type="checkbox" value="digital"> Digital Subscription </label>

							
							</div>
						
	               			<br>
            			
						
						
							<div class="clear sub-menu">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="gridlove-button-search">
							</div>
							</div>
            				<?php echo form_close(); ?>
            				</div>
            				<!--End mc_embed_signup-->
            				</div>
                    		</div>             
                            </div>
                    
                    
                    
<div class="col-lg-3 col-md-6 col-sm-12">
<div id="nav_menu-4" class="widget widget_nav_menu">
	<h4 class="widget-title">Help &amp; Support</h4>
		<div class="menu-gridlove-footer-container">
				<p class="introduction_text">
 					Parents and children can write to us on <br> pinkbuzznews@gmail.com.
      				<hr>
  					 Whataspp or call us on <br>  +91-63506887733. <br>[10:00 am to 5:00pm]
    				</p>
			<ul id="menu-gridlove-footer" class="menu">
				 <?php foreach ($pages as $item): ?>
				 	 <?php if (empty($item->link)): ?>
				 	 	<li id="" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1959"><a href="<?php echo base_url().$item->slug ?>">
				 	 		<?php echo html_escape($item->title); ?></a>
				 	 	</li>
				 <?php endif; endforeach; ?>
			</ul>
		</div>
	</div>
</div>
            
            

<div class="col-lg-3 col-md-6 col-sm-12">
<div id="nav_menu-4" class="widget widget_nav_menu">

		<div class="menu-gridlove-footer-container">
				<div class="textwidget"><p><img src="<?php echo base_url() . 'assets/img/recycle.png' ?>" alt="" width="50"></p>
					<p class="introduction_text">
 					We value the environment and our planet. All waste-paper from our printing process is recycled. And we use eco-friendly ink! We encourage you to recycle your used copy of Pink Buzz.
   					</p>
					</div>
			
		</div>
	</div>
</div>
</div>
</div>


					    <div class="gridlove-copyright">
                            <div class="container">
                            	<p style="text-align: center">Disclaimer:We try our best to ensure that the information given in Pink Buzz is factual and correct. Reproduction in part or whole of our content is strictly prohibited without prior consent.</p>
                                <p style="text-align: center"><?php echo $settings->copyright; ?></p>
                                <br>
                                <p style="text-align: center"><a href="https://shaleeni.com/"target="_blank">Created by shaleeni.com</a></p>
                            </div>
                        </div>
                
            </div>

            

            <?php $this->load->view("partials/_sidebarnewsletter"); ?>


<!-- End Footer Section -->
<?php if (!isset($_COOKIE["inf_cookies_warning"]) && $settings->cookies_warning): ?>
	<div class="cookies-warning">
		<div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
		<a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
	</div>
<?php endif; ?>

<script src="<?php echo base_url(); ?>assets/js/blog/more.js"></script>

<?php if (isset($page_type)):
	echo $general_settings->facebook_comment;
endif; ?>


<?php echo $general_settings->google_adsense_code; ?>
<?php echo $general_settings->google_analytics; ?>
</body>
</html>
