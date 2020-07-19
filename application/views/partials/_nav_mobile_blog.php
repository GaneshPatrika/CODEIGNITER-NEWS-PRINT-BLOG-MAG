<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $menu_limit = $general_settings->menu_limit; ?>
 <!-- Small Device Header Begins -->

	<div id="gridlove-header-responsive" class="gridlove-header-responsive hidden-lg-up" style="top: 0px;">

	<div class="container">
		
	<div class="gridlove-site-branding mini">
	<span class="site-title h1"><a href="<?php echo lang_base_url(); ?>" rel="home"><img class="gridlove-logo-mini" src="<?php echo get_mobile_logo($general_settings); ?>" alt="Gridlove"></a></span>
	</div>

	<ul class="gridlove-actions gridlove-menu">
            
            
                                        <li class="gridlove-actions-button">
                                            <span class="gridlove-sidebar-action-subscribe">
                                                
                                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span class=" hidden-sm-down">Subscribe</span>
                                                 
                                            </span>
                                        </li>
                                            
                                            
                                           <!-- <li class="gridlove-actions-button">
                                            <span>
                                                <a href="#" target="_blank">
                                                <i class="fa fa-user-circle" aria-hidden="true"></i> <span class=" hidden-md-down">Sign In</span>
                                                 </a>
                                            </span>
                                        </li>---->
            
                                        
            
                                            <li class="gridlove-actions-button gridlove-action-search">
                <span>
                    <i class="fa fa-search"></i>
                </span>
                <ul class="sub-menu">
                    <li>
                        <form class="gridlove-search-form" action="https://demo.mekshq.com/gridlove/" method="get"><input name="s" type="text" placeholder="Type here to search..."><button type="submit" class="gridlove-button-search">Search</button></form>
                    </li>
                </ul>
            </li>
                <li class="gridlove-actions-button">
                <span class="gridlove-sidebar-action">
                    <i class="fa fa-bars"></i>
                </span>
            </li>
                            
                
            </ul>

	</div>

</div>

	 <!-- Small Device Header Ends -->

            