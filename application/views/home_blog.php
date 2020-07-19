<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

$item = $ourpick; 
$video = $ourpick_video; ?>

<div id="content" class="gridlove-site-content container">
            
            
            <div id="gridlove-module-7" class="gridlove-module module-type-posts  gridlove-module-layout-combo">
				
		<div class="row gridlove-posts ">
			
							                    
                   						 <div class="col-lg-9 col-md-12 col-sm-12 push-lg-3">
                                                                                                    
                                                       
                                           <!--Custom Introduction Widget Begins-->         
                                                                                                                                   
                                              <div class="gridlove-inject gridlove-box gridlove-post custom_intoduction_post ">
                                              <div class="custom_intoduction_widget">
                                                 
      											<p class="introduction_text"><?php echo ($settings->about_footer); ?>  </p>
    
                                                    
                                                    
                                                 <img src="<?php echo get_logo($general_settings); ?>" alt="Pink Buzz" class="custom_widget_footer_logo">
                                                
                                                </div>
                                                                        
                                                </div>
                                                

                                             <!--Custom Introduction Widget Ends-->                                                         
                                                                                                    
                                          </div>
                                          
                                    
                                     	 
                                    <?php if(!empty($item[0])): ?>      
									<div class="col-lg-3 col-md-6 col-sm-12 pull-lg-9 layout-combo">
									<article class="gridlove-post gridlove-post-a gridlove-box  post-153 post type-post status-publish format-standard has-post-thumbnail hentry category-food-and tag-company tag-lifestyle-2 tag-magazine">

									<div class="entry-image">
									<a href="<?php echo generate_post_url($item[0]); ?>" title="<?php echo html_escape(character_limiter($item[0]->title, 55, '...')); ?>">
										<img src="<?php echo $img_url = get_post_image($item[0], 'mid'); ?>" class="attachment-gridlove-a4 size-gridlove-a4 wp-post-image" alt="" width="370" height="150"></a>
									<div class="entry-category">

										<?php $files = get_post_files($item[0]->id); 

										if (!empty($files)){

											echo '<span class="gridlove-format-icon"><i class="fa fa-music"></i></span>	';
										}

										?>

									<a href="<?php echo generate_category_url($item[0]->parent_category_slug, $item[0]->category_slug); ?>" class="gridlove-cat gridlove-cat-4"><?php echo $item[0]->category_name ?></a> </div>
									</div>
									<div class="box-inner-p">
									<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;">
									<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item[0]); ?>"><?php echo html_escape(character_limiter($item[0]->title, 55, '...')); ?></a></h2></div></div></div>
									<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item[0]->profile_pic; ?>" class="avatar avatar-24 photo" width="24" height="24"><?php echo $item[0]->username ?></a></span></span></div></div><div class="meta-item meta-date"><span class="updated"><?php echo helper_date_format($item[0]->created_at); ?></span></div></div>
									</div>

									</article>
									</div>
								<?php endif; ?>
                    				        
			        				
									<?php $var = 1;  for($count = 1; $count<=4; $count++): ?>

			     					<?php

			     					if($count == 3){ $var = 2; }

			     					 if(($count % 2) == 0) :

			     						if($count == 2){ ?>
			     						 <?php if(!empty($video[0])): ?>  	
										<div class="col-lg-3 col-md-6 col-sm-12 layout-combo">
										<article class="gridlove-post gridlove-post-d gridlove-box  post-174 post type-post status-publish format-video has-post-thumbnail hentry category-entertainment post_format-post-format-video">

										<div class="entry-image">
										<a href="<?php echo generate_post_url($video[0]); ?>" title="Are rock concerts really coming back into fashion?"><img src="<?php echo $img_url = get_post_image($video[0], 'mid'); ?>" class="attachment-gridlove-d5 size-gridlove-d5 wp-post-image" alt="" width="470" height="300"></a>
										</div>

										<div class="entry-overlay box-inner-p">
										<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;">
										<div class="entry-category">
										<span class="gridlove-format-icon"><i class="fa fa-play"></i></span>                
										<a href="<?php echo generate_category_url($video[0]->parent_category_slug, $video[0]->category_slug); ?>" class="gridlove-cat gridlove-cat-6"><?php echo $video[0]->category_name; ?></a>                            </div>
										<h2 class="entry-title h3"><a href="<?php echo generate_post_url($video[0]); ?>"><?php echo html_escape(character_limiter($video[0]->title, 55, '...')); ?></a></h2></div></div></div></div>
										<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href="<?php echo generate_post_url($item[$count]); ?>"><img alt="" src="<?php echo lang_base_url(); ?><?php echo $video[0]->profile_pic; ?>" class="avatar avatar-24 photo" width="24" height="24"><?php echo $video[0]->username ?></a></span></span></div></div><div class="meta-item meta-date"><span class="updated"><?php echo helper_date_format($video[0]->created_at); ?></span></div></div>
										</div>    

										</article>
										</div>
									<?php endif; ?>

			     						<?php }else{



			     					?>

			     				<?php if(!empty($item[$count])): ?>  		
								<div class="col-lg-3 col-md-6 col-sm-12 layout-combo">
								<article class="gridlove-post gridlove-post-a gridlove-box  post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-technology category-travel tag-blog tag-photos tag-tips">

								<div class="entry-image">
								<a href="<?php echo generate_post_url($item[$count]); ?>" title=""><img src="<?php echo $img_url = get_post_image($item[$count], 'mid'); ?>" class="attachment-gridlove-a4 size-gridlove-a4 wp-post-image" alt="" width="370" height="150"></a>
								<div class="entry-category">
								<?php $files = get_post_files($item[$count]->id); 

										if (!empty($files)){

											echo '<span class="gridlove-format-icon"><i class="fa fa-music"></i></span>	';
										}

										?>		
							<a href="<?php echo generate_category_url($item[$count]->parent_category_slug, $item[$count]->category_slug); ?>" class="gridlove-cat gridlove-cat-<?php echo $count;?>"><?php echo $item[$count]->category_name ?></a></div>
								</div>


								<div class="box-inner-p">
								<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;">
								<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item[$count]); ?>"><?php echo $item[$count]->title ?></a></h2></div></div></div></div>
								<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item[$count]->profile_pic; ?>" class="avatar avatar-24 photo" width="24" height="24"><?php echo $item[$count]->username ?></a></span></span></div></div><div class="meta-item meta-date"><span class="updated"><?php echo helper_date_format($item[$count]->created_at); ?></span></div></div>
								</div>

								</article>
								</div>
							<?php endif; ?>


									<?php } ?>
			     					<?php else: ?>	
			     					<?php if(!empty($item[$count])): ?>  		
									<div class="col-lg-3 col-md-6 col-sm-12 layout-combo">
									<article class="gridlove-post gridlove-post-c gridlove-box  post-153 post type-post status-publish format-standard has-post-thumbnail hentry category-food-and tag-company tag-lifestyle-2 tag-magazine">

									<div class="box-inner-p">
									<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;"><div style="margin: 0px; padding: 0px; border: 0px none;">
									<div class="entry-category">

									<a href="<?php echo generate_category_url($item[$count]->parent_category_slug, $item[$count]->category_slug); ?>" class="gridlove-cat gridlove-cat-<?php echo $var;?>"><?php echo $item[$count]->category_name ?></a>                            </div>
									<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item[$count]); ?>"><?php echo $item[$count]->title ?></a></h2>	        <div class="entry-content"><p><?php echo html_escape(character_limiter($item[$count]->title, 55, '...')); ?></p></div></div></div></div></div>
									<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href="<?php echo generate_post_url($item[$count]); ?>"><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item[$count]->profile_pic; ?>" class="avatar avatar-24 photo" width="24" height="24"><?php echo $item[$count]->username ?></a></span></span></div></div><div class="meta-item meta-date"><span class="updated"><?php echo helper_date_format($item[$count]->created_at); ?></span></div></div>
									</div>    
									</article>
									</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php endfor; ?>        
			
								</div>

								</div>
								</div>