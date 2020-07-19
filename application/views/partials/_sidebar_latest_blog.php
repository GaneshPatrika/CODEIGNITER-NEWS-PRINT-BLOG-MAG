<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $menu_limit = $general_settings->menu_limit; ?>
  <!---Nav Action SideBar Begin----->
            
            
            <div class="gridlove-sidebar-action-wrapper" style="top: 0px;">
            
                <span class="gridlove-action-close"><i class="fa fa-times" aria-hidden="true"></i></span>
            
                <div class="gridlove-sidebar-action-inside">
                
               
                    <!-- Small Device Navigation Begins--->
                    
                    <div class="hidden-lg-up widget gridlove-box widget_nav_menu">
                    
                    
                    <nav>   
                                    <ul >
                                    
                      <?php
            $total_items = 1;
            $i = 1;
            foreach ($main_menu as $menu_item):
                if ($menu_item->item_location == "header"):

                    if ($i < $menu_limit):
                        $sub_links = get_sub_links($menu_item->item_id, $menu_item->item_type);
                        if (!empty($sub_links)): ?>
                            <li class="">
                                <a class="dropdown-toggle disabled" data-toggle="dropdown" href="<?php echo generate_menu_item_url($menu_item); ?>">
                                    <?php echo html_escape($menu_item->item_name); ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu top-dropdown">
                                    <?php foreach ($sub_links as $sub_item): ?>
                                        <li>
                                            <a role="menuitem" href="<?php echo generate_menu_item_url($sub_item); ?>">
                                                <?php echo html_escape($sub_item->item_name); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="">
                                <a href="<?php echo generate_menu_item_url($menu_item); ?>">
                                    <?php echo html_escape($menu_item->item_name); ?>
                                </a>
                            </li>
                        <?php endif;
                        $i++;
                    endif;


                    $total_items++;
                endif;
            endforeach; ?>
                
                    
                    
                    </ul>   </nav>
                    
                    
                    </div>
            
                    <!-- Small Device Navigation Ends--->
                           
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
                    
                        <?php $this->load->view("partials/_recentpost_blog",$latestblog); ?>
                        <?php $this->load->view("partials/_trending_blog"); ?>
                        <?php //$this->load->view("partials/_most_viewed_blog"); ?>
                        <?php //$this->load->view("partials/_category_blog"); ?>
                        <?php //$this->load->view("partials/_author_blog"); ?>
           
                </div>
            
            </div>
            
            <div class="gridlove-sidebar-action-overlay"></div>
                
            <!---Naav Action SideBar End----->