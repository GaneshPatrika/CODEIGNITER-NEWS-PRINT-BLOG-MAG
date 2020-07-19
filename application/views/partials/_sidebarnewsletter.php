<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Start Footer Section -->

        <?php $this->load->view("partials/_sidebar_latest_blog",$latestblog); ?>



         <!---Nav Action SideBar Begin----->
            
            
            <div class="gridlove-sidebar-action-subscribe-wrapper" style="top: 10px;">
            
                <span class="gridlove-action-subscribe-close"><i class="fa fa-times" aria-hidden="true"></i></span>
            
                <div class="gridlove-sidebar-action-inside">
                
                                    
                    <!-- Newsletter Widget Begins--->
                    
                    <div id="text-5" class="widget widget_text gridlove-box"><h4 class="widget-title"> Subscribe Pinkbuzz </h4>           <div class="textwidget"><div id="mc_embed_signup">
                    <p>We publish Pink Buzz fortnightly. Copies are delivered Digitally or by Registered Courier or Post.<br> 
Our content is designed for children from 5 to 15 years of age and we promise parents and grandparents that they will enjoy our articles too!<br>
Our first two editions are FREE through this quick subscription.
</p>
                    
           
            <?php echo form_open('subscribe'); ?>


                    <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                    <label class="checkbox-inline"><input  id="sus_chk_print" name="sus_chk_print" type="checkbox" value="print"> Print Subscription </label>
                    </div>
                    
                    <div class="mc-field-group">
                    <label class="checkbox-inline"><input id="sus_chk_digital" name="sus_chk_digital" type="checkbox" value="digital"> Digital Subscription </label>
                    </div>
                    <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="color:red"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                    <br>
                <div class="clear sub-menu"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="gridlove-button-search"></div>
                </div>
           <?php echo form_close(); ?>
            </div>
            
                </div>
                    </div>
            
                    <!-- Newsletter Widget Ends--->
                    
                
            
                </div>
            
            </div>
            
            <div class="gridlove-sidebar-action-subscribe-overlay"></div>
            
            
            
                
            <!---Naav Action SideBar End----->