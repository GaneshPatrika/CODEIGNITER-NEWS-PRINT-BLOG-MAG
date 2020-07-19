
    				    <div id="gridlove_posts_widget-4" class="gridlove-highlight widget gridlove-box gridlove_posts_widget"><h4 class="widget-title">Most Viewed<span class="gridlove-slider-controls" data-autoplay="0"></span></h4>
								
		<div class="gridlove-posts-widget gridlove-widget-slider">

						<div class="gridlove-posts-widget-item-wrapper">
<?php  foreach($mostviewedblog0 as $item):?> 
<article class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle">

<div class="entry-image">
<a href="<?php echo lang_base_url() . html_escape($item->title_slug); ?>" title="">
<img width="80" height="60" src="<?php echo get_post_image($item, 'small');  ?>" class="attachment-gridlove-thumbnail size-gridlove-thumbnail wp-post-image" alt="<?php echo html_escape($item->title); ?>" /></a>
</div>

<div class="entry-header">
<h6><a href="<?php echo lang_base_url() . html_escape($item->title_slug); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h6></div>

</article>
<?php   endforeach; ?>
</div>	
									
									<div class="gridlove-posts-widget-item-wrapper">
<?php  foreach($mostviewedblog4 as $item):?> 
<article class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle">

<div class="entry-image">
<a href="<?php echo lang_base_url() . html_escape($item->title_slug); ?>" title="">
<img width="80" height="60" src="<?php echo get_post_image($item, 'small');  ?>" class="attachment-gridlove-thumbnail size-gridlove-thumbnail wp-post-image" alt="<?php echo html_escape($item->title); ?>" /></a>
</div>

<div class="entry-header">
<h6><a href="<?php echo lang_base_url() . html_escape($item->title_slug); ?>"><?php echo html_escape(character_limiter($item->title, 55, '...')); ?></a></h6></div>

</article>
<?php   endforeach; ?>
</div>	
		</div>

		
		
		</div>
        