<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



            
            
            <div id="content" class="gridlove-site-content container">

        <div class="gridlove-module module-type-posts ">
            <div class="module-header"><div class="module-title"><h1 class="h2"><?php $category_array = get_category_array($category->id); echo html_escape($category_array['parent_category']->name); ?></h1></div></div>
            <div class="row gridlove-posts">

                
                                        
                    
                        <?php $count = 0; ?>

						<?php foreach ($posts as $item): 

							$img_url = get_post_image($item, 'slider'); 

							?>
                        
                        <?php if($count == 0) :?>

                        		<?php if( !empty($img_url) || $img_url != "" ): ?>


                        		<?php endif; ?>	


						<div class="col-lg-7 col-md-12 col-sm-12 layout-simple">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-153 post type-post status-publish format-standard has-post-thumbnail hentry category-food-and tag-company tag-lifestyle-2 tag-magazine">
						<div class="entry-image">
						<a href="<?php echo generate_post_url($item); ?>" title="<?php echo html_escape(character_limiter($item->title, 55, '...')); ?>"><img width="335" height="300" src="<?php echo $img_url; ?>" class="attachment-gridlove-b7 size-gridlove-b7 wp-post-image" alt=""></a>
						</div>
						<div class="box-inner-ptbr box-col-b entry-sm-overlay">
						<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px;">
						<div class="entry-category">
							<?php $files = get_post_files($item->id); 

										if (!empty($files)){

											echo '<span class="gridlove-format-icon"><i class="fa fa-music"></i></span>	';
										}

										?>
						<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="gridlove-cat gridlove-cat-4"><?php echo $item->category_name ?></a></div>
						<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h2><div class="entry-content"><p><?php echo html_escape(character_limiter($item->summary, 130, '...')); ?></p></div></div></div>
						<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item->profile_pic; ?>" class="avatar avatar-24 photo" height="24" width="24"><?php echo $item->username ?></a></span></span></div></div><div class="meta-item meta-views"><?php echo $item->hit; ?></div></div>
						</div>    
						</article>
						</div>

						<?php endif; ?>


						<?php if($count == 1) :?>
						<div class="col-lg-5 col-md-6 col-sm-12 layout-simple">
						<article class="gridlove-post gridlove-post-d gridlove-box  post-155 post type-post status-publish format-standard has-post-thumbnail hentry category-food-and tag-blog tag-company tag-entrepreneurship tag-magazine">

						<div class="entry-image">
						<a href="<?php echo generate_post_url($item); ?>" title="<?php echo html_escape(character_limiter($item->title, 55, '...')); ?>"><img width="335" height="300" src="<?php echo $img_url = get_post_image($item, 'slider'); ?>" class="attachment-gridlove-b7 size-gridlove-b7 wp-post-image" alt=""></a>
						</div>

						<div class="entry-overlay box-inner-p">
						<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px;">
						<div class="entry-category">
							<?php $files = get_post_files($item->id); 

										if (!empty($files)){

											echo '<span class="gridlove-format-icon"><i class="fa fa-music"></i></span>	';
										}

										?>
						<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="gridlove-cat gridlove-cat-<?php echo $count; ?>"><?php echo $item->category_name ?></a></div>
						<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h2></div></div>
						<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href="<?php echo generate_post_url($item); ?>"><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item->profile_pic; ?>" class="avatar avatar-24 photo" height="24" width="24"><?php echo $item->username ?></a></span></span></div></div></div>
						</div>    

						</article>
						</div>

						<?php endif; ?>


						<?php if($count == 2) :?>
						<div class="col-lg-5 col-md-6 col-sm-12 layout-simple">
						<article class="gridlove-post gridlove-post-c gridlove-box  post-187 post type-post status-publish format-gallery has-post-thumbnail hentry category-food-and post_format-post-format-gallery">

						<div class="box-inner-p">
						<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px;">
								<div class="entry-category">
							<?php $files = get_post_files($item->id); 

										if (!empty($files)){

											echo '<span class="gridlove-format-icon"><i class="fa fa-music"></i></span>	';
										}

										?>
						<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="gridlove-cat gridlove-cat-<?php echo $count; ?>"><?php echo $item->category_name ?></a></div>

						<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h2><div class="entry-content"><p><?php echo html_escape(character_limiter($item->summary, 130, '...')); ?></p></div></div></div>
						<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item->profile_pic; ?>" class="avatar avatar-24 photo" height="24" width="24"><?php echo $item->username ?></a></span></span></div></div><div class="meta-item meta-views"><?php echo $item->hit; ?></div></div>
						</div>    
						</article>
						</div>
						<?php endif; ?>	



						<?php if($count == 3) :?>
					<div class="col-lg-7 col-md-12 col-sm-12 layout-simple">
						<article class="gridlove-post gridlove-post-b gridlove-box  post-153 post type-post status-publish format-standard has-post-thumbnail hentry category-food-and tag-company tag-lifestyle-2 tag-magazine">
						<div class="entry-image">
						<a href="<?php echo generate_post_url($item); ?>" title="<?php echo html_escape(character_limiter($item->title, 55, '...')); ?>"><img width="335" height="300" src="<?php echo $img_url = get_post_image($item, 'slider'); ?>" class="attachment-gridlove-b7 size-gridlove-b7 wp-post-image" alt=""></a>
						</div>
						<div class="box-inner-ptbr box-col-b entry-sm-overlay">
						<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px;">
						<div class="entry-category">
							<?php $files = get_post_files($item->id); 

										if (!empty($files)){

											echo '<span class="gridlove-format-icon"><i class="fa fa-music"></i></span>	';
										}

										?>
						<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="gridlove-cat gridlove-cat-6"><?php echo $item->category_name ?></a></div>
						<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h2><div class="entry-content"><p><?php echo html_escape(character_limiter($item->summary, 130, '...')); ?></p></div></div></div>
						<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item->profile_pic; ?>" class="avatar avatar-24 photo" height="24" width="24"><?php echo $item->username ?></a></span></span></div></div><div class="meta-item meta-views"><?php echo $item->hit; ?></div></div>
						</div>    
						</article>
						</div>
						<?php endif; ?>	

                        <?php $count++; if($count == 4) break;  ?>
						<?php endforeach; ?>
                    
                         
                        <?php if($count == 4): ?>
                        	<?php foreach ($postsmax as $item): ?>
						<div class="col-lg-3 col-md-6 col-sm-12 layout-simple">
						<article class="gridlove-post gridlove-post-a gridlove-box  post-164 post type-post status-publish format-standard has-post-thumbnail hentry category-food-and">

						<div class="entry-image">
						<a href="<?php echo generate_post_url($item); ?>" title="<?php echo html_escape(character_limiter($item->title, 55, '...')); ?>"><img width="335" height="300" src="<?php echo $img_url = get_post_image($item, 'slider'); ?>" class="attachment-gridlove-b7 size-gridlove-b7 wp-post-image" alt=""></a>
						</div>


						<div class="box-inner-p">
						<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px;">
						<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h2></div></div>
					<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="" src="<?php echo lang_base_url(); ?><?php echo $item->profile_pic; ?>" class="avatar avatar-24 photo" height="24" width="24"><?php echo $item->username ?></a></span></span></div></div><div class="meta-item meta-views"><?php echo $item->hit; ?></div></div>
						</div>

						</article>
						</div>
                        <?php endforeach; endif; ?>
         </div>

        



    </div>
            
            
            
            </div>