<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Contact Page Content Area Begins---->
            
            <div id="cover" class="gridlove-cover-area">
        <div class="gridlove-cover-item">
            <div class="gridlove-cover-bg">
            <span class="gridlove-cover">
                <img src="<?php echo base_url() . 'assets/img/gridlock_55-1500x500.jpg' ?>" class="attachment-gridlove-cover size-gridlove-cover wp-post-image" alt="" width="1500" height="500">                
            </span>  
        </div>
      
</div>
    </div>
            
            
            <div id="content" class="gridlove-site-content container gridlove-sidebar-right">

    <div class="row">

        <div class="gridlove-content gridlove-page-layout-4">

                            
               <article id="post-2035" class="gridlove-box box-vm post-2035 page type-page status-publish has-post-thumbnail hentry">

                   <div class="box-inner-p-bigger box-single">
    <div class="entry-header">
        <h1 class="entry-title">Contact</h1></div>
    <div class="entry-content">
                            
    
<p>


<strong>
Please send us feedback, comments and questions. We would love to hear from you.

</strong>
<br>

Note : We respect your privacy and assure you that your contact information will not be shared with any other entity.


</p>



<div class="wpforms-container " id="wpforms-2512">
 <?php $this->load->view('partials/_messages_blog'); ?>
    <?php echo form_open('home_controller/contact_post', ['id' => 'form_validate', 'class' => 'validate_terms']); ?>




      <noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
      <div class="wpforms-field-container">
      
         <div id="wpforms-2512-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0"><label class="wpforms-field-label" for="wpforms-2512-field_0">Your name <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-2512-field_0" class="wpforms-field-large wpforms-field-required" name="name" required></div>
            
            <br>
         
         <div id="wpforms-2512-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label" for="wpforms-2512-field_1">Your email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-2512-field_1" class="wpforms-field-large wpforms-field-required" name="email" required></div>
         
         <br>
         
         <div class="wpforms-field wpforms-field-hp"><label for="wpforms-2512-field-hp" class="wpforms-field-label">Phone</label><input type="number" name="mobile" required id="wpforms-2512-field-hp" class="wpforms-field-medium"></div>
 
         <br>
         
         <div id="wpforms-2512-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-2512-field_2">Your message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-2512-field_2" class="wpforms-field-medium wpforms-field-required" name="message" required></textarea></div>
         
         
      </div>
      <br>
      <div class="wpforms-submit-container"><button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-2512" value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..." data-submit-text="Submit">Submit Message</button></div>
   </form>
</div>
<!-- .wpforms-container -->



        
</div>
</div>

                </article>

            
            

        </div>
        
        

    <div class="gridlove-sidebar">
    
    
                        
                                                                                                    
                                                       
                                           <!--Custom Introduction Widget Begins-->         
                                                                                                                                   
                                              <div class="gridlove-inject gridlove-box gridlove-post custom_intoduction_post allears_post">
                                              
                                              
                                              <div class="custom_intoduction_widget">
                                              
                                                 
      <p class="introduction_text">
      
      <strong> We are new and we are all ears.
      
      
       </strong>
       
       <img src="<?php echo base_url() . 'assets/img/ear.jpg' ?>" width="20" height="20" alt="Pink Buzz" class="custom_widget_ears_logo">
     <br>
    
     Parents and children can write to us on pinkbuzznews@gmail.com
      <hr>
    
    Whataspp or call us on +91-63506887733 <br>[10:00 am to 5:00pm]

      
      
    </p>
    
                                                    
                                                    
                                                 
                                                
                                                </div>
                                                                        
                                                </div>
                                                

                                             <!--Custom Introduction Widget Ends-->                                                         
                                                                                                    
                                         
   <?php /* <div id="mks_social_widget-3" class="widget gridlove-box mks_social_widget"><h4 class="widget-title">Social Widget</h4>
                    <p>Collaboratively harness market-driven processes whereas resource-leveling internal or "organic" sources. </p>
        
                                <ul class="mks_social_widget_ul">
           <?php if (!empty($settings->facebook_url)) : ?> 
          <li><a href="<?php echo html_escape($settings->facebook_url); ?>" title="Facebook" class="socicon-facebook soc_circle" target="_blank" style="width: 40px; height: 40px; font-size: 16px;line-height:45px;"><span>facebook</span></a></li>
          <?php endif; ?>
          <!--if twitter url exists-->
          <?php if (!empty($settings->twitter_url)) : ?>
          <li><a href="<?php echo html_escape($settings->twitter_url); ?>" title="Twitter" class="socicon-twitter soc_circle" target="_blank" style="width: 40px; height: 40px; font-size: 16px;line-height:45px;"><span>twitter</span></a></li>
          <?php endif; ?>
          <!--if pinterest url exists-->
          <?php if (!empty($settings->pinterest_url)) : ?>
          <li><a href="<?php echo html_escape($settings->pinterest_url); ?>" title="Pinterest" class="socicon-pinterest soc_circle" target="_blank" style="width: 40px; height: 40px; font-size: 16px;line-height:45px;"><span>pinterest</span></a></li>
          <?php endif; ?>
          <!--if youtube url exists-->
          <?php if (!empty($settings->vk_url)) : ?>
          <li><a href="<?php echo html_escape($settings->vk_url); ?>" title="YouTube" class="socicon-youtube soc_circle" target="_blank" style="width: 40px; height: 40px; font-size: 16px;line-height:45px;"><span>youtube</span></a></li>
          <?php endif; ?>

          </ul>
        

        </div> */ ?>
        
    </div>

        
    </div>

</div>
            
            
            
            
             <!-- Contact Page Content Area Ends---->

<?php if (!empty($settings->contact_address)): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="contact-map-container">
                <iframe id="contact_iframe" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=<?php echo $settings->contact_address; ?>&ie=UTF8&t=&z=8&iwloc=B&output=embed&disableDefaultUI=true" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
<?php endif; ?>
<script>
    var iframe = document.getElementById("contact_iframe");
    iframe.src = iframe.src;
</script>
<style>
    #footer {
        margin-top: 0;
    }
</style>
