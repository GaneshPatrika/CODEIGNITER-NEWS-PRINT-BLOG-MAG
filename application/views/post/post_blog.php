<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Story Page Content Area Begins---->
            
            <div id="content" class="gridlove-site-content container gridlove-sidebar-right">

    <div class="row">

    	
		<div class="gridlove-share-wrapper" style="height: 0px;">
			
		</div>
	

        <div class="gridlove-content gridlove-single-layout-3">

                            
                <article id="post-1413" class="gridlove-box box-vm post-1413 post type-post status-publish format-standard has-post-thumbnail hentry category-travel tag-awesome tag-blog tag-music-2 tag-new">

<div class="box-inner-p-smaller box-single">
	<div class="entry-header">
		<div class="entry-category">
	    
	    	        <a href="<?php echo generate_category_url(null, $category->slug); ?>" class="gridlove-cat gridlove-cat-2"><?php echo html_escape($category->name); ?></a>	    	</div>

    <h1 class="entry-title"><?php echo html_escape($post->title); ?></h1>
        	<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href="<?php echo lang_base_url(); ?>profile/<?php echo html_escape($post_user->slug); ?>"><img alt="<?php echo html_escape($post_user->username); ?>" src="<?php echo get_user_avatar($post_user); ?>" class="avatar avatar-24 photo" width="24" height="24"><?php echo html_escape($post_user->username); ?></a></span></span></div></div><div class="meta-item meta-date"><span class="updated"><?php echo helper_date_format($post->created_at); ?></span></div></div>
    
</div>
</div>

    
    
    	<?php if($post_type_check == "post"): ?>

    			<?php $files = get_post_files($post->id);
							if (!empty($files)):?>
								<div class="entry-media">
								<img src="<?php echo $img_url = get_post_image($post, 'slider'); ?>" width="740" height="494">
								<?php foreach ($files as $file): ?>	
								<figure class="wp-block-audio">
									<audio controlsList="nodownload" controls="controls" src="uploads/files/<?php echo $file->file_name; ?>"></audio>
						    	</figure>
						    	<?php endforeach; ?>
								</div>
						   <?php else: ?>
						   
						   <div class="entry-image">	
        <img src="<?php echo $img_url = get_post_image($post, 'slider'); ?>" class="attachment-gridlove-single size-gridlove-single wp-post-image" alt="" srcset="<?php echo $img_url = get_post_image($post, 'slider'); ?>" width="740" height="493">
        </div>

						  <?php endif; ?>		


    	
    	<?php else: 

    		if (!empty($post->video_embed_code)):?>
    			   <div class="entry-media"><figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
					<div class="wp-block-embed__wrapper">
					<iframe src="<?php echo $post->video_embed_code; ?>" allowfullscreen="" width="770" height="433" frameborder="0"></iframe>
					</div>
					</figure>
					</div>

    		<?php else: 

    			$filesv = get_post_files($post->id);
				if (!empty($filesv)){ ?> 

						<?php foreach ($filesv as $file): ?>	

							<video width="740" height="433" poster=<?php echo $img_url = get_post_image($post, 'slider'); ?> id=”player” playsinline controls controlsList="nodownload">
							<source src=<?php echo lang_base_url(); ?>uploads/files/<?php echo $file->file_name; ?> type=video/mp4>
							</video>


						<?php endforeach; ?>

				<?php }


    			?>





				
    		<?php endif; ?>


    	<?php endif; ?>

    
 
                        
<div class="box-inner-p-bigger box-single">

    

    	<div class="entry-headline h5">
			<?php echo html_escape(character_limiter($post->summary, 130, '...')); ?>
		</div>


<div class="entry-content">
    <?php echo $post->content; ?>
    	    
</div>		
				
    					
        
        
            <div class="gridlove-author">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-5">
                        <img alt="<?php echo html_escape($post_user->username); ?>" src="<?php echo get_user_avatar($post_user); ?>" srcset="<?php echo get_user_avatar($post_user); ?>" class="avatar avatar-100 photo" width="100" height="100">                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <h4><?php echo html_escape($post_user->username); ?></h4>                        <div class="gridlove-author-desc">
                            <p>  <?php echo html_escape($post_user->about_me); ?></p>
                        </div>
                        <!--<div class="gridlove-author-links">
                            <a href="<?php echo lang_base_url(); ?>profile/<?php echo html_escape($post_user->slug); ?>" class="gridlove-pill pill-large">View all posts</a></div>--->
                    </div>
                </div>
            </div>

            

    

    
	
	
		<!---<nav class="gridlove-prev-next-nav">
				<div class="gridlove-prev-link">
				
					
						<a href="https://demo.mekshq.com/gridlove/?p=157">
							<span class="gridlove-pn-ico"><i class="fa fa fa-chevron-left"></i></span>
							<span class="gridlove-pn-link">The totaly amazing street art collection of 2016</span>
						</a>

					

								</div>
				<div class="gridlove-next-link">
				
					
						<a href="https://demo.mekshq.com/gridlove/?p=138">
							<span class="gridlove-pn-ico"><i class="fa fa fa-chevron-right"></i></span>
							<span class="gridlove-pn-link">What the music industry can teach you about business</span>
						</a>
					

								</div>

		</nav>----->

	


</div>

</article>

    
    
        
            <div class="gridlove-related">
                <div class="gridlove-module">

                    <div class="module-header"><div class="module-title"><h4 class="h2">You may also like</h4></div></div>
                                        <div class="row">
                        
                            
                        
                          

                        	<?php $i=1; foreach ($related_posts as $item): ?>
							<div class="col-lg-12 col-md-12 col-sm-12">
							<article class="gridlove-post gridlove-post-b gridlove-box  post-167 post type-post status-publish format-standard has-post-thumbnail hentry category-travel tag-company tag-music-2">

							<div class="entry-image">
							<a href="<?php echo generate_post_url($item); ?>" title=""><img src="<?php echo $img_url = get_post_image($item, 'mid'); ?>" class="attachment-gridlove-b8 size-gridlove-b8 wp-post-image" alt="" width="385" height="300"></a>
							</div>

							<div class="box-inner-ptbr box-col-b entry-sm-overlay">
							<div class="box-inner-ellipsis"><div style="margin: 0px; padding: 0px; border: 0px none;">
							<div class="entry-category">

							<a href="<?php echo generate_category_url($item->parent_category_slug, $item->category_slug); ?>" class="gridlove-cat gridlove-cat-<?php echo $i;?>"><?php echo $item->category_name ?></a></div>

							<h2 class="entry-title h3"><a href="<?php echo generate_post_url($item); ?>"><?php echo html_escape(character_limiter($item->title, 70, '...')); ?></a></h2><div class="entry-content"><p><?php echo $post->summary; ?></p></div></div></div>

							<div class="entry-meta"><div class="meta-item meta-author"><div class="coauthors"><span class="vcard author"><span class="fn"><a href=""><img alt="<?php echo html_escape($item->username); ?>" src="<?php echo lang_base_url(); ?><?php echo $item->profile_pic; ?>" class="avatar avatar-24 photo" width="24" height="24"><?php echo html_escape($item->username); ?></a></span></span></div></div><div class="meta-item meta-views"><?php echo $item->hit; ?></div></div>

							</div>    


							</article>
							</div>
							<?php $i++; endforeach; ?>







                                            </div>
                </div>
            </div>

        
        
    

        </div>

        

	<div class="gridlove-sidebar" style="height: 0px;">

						
						<div class="gridlove-sticky-sidebar">
					<div id="mks_ads_widget-15" class="widget gridlove-box mks_ads_widget">			
					
						
					  <?php $this->load->view("partials/_recentpost_blog",$latestblog); ?>
					  <?php $this->load->view("partials/_trending_blog"); ?>
	    
	    	  
	  		  
    	
		</div>				</div>
		
	</div>

    </div>
        
</div>
            
            
             <!-- Story Page Content Area Ends---->
