<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $menu_limit = $general_settings->menu_limit; ?>
<!--navigation-->
<div class="container">
	<div class="gridlove-slot-l">
		<nav class="gridlove-main-navigation">	
		<ul id="menu-gridlove-main" class="gridlove-main-nav gridlove-menu">
			<li class="<?php echo ($active_page == 'home' || $active_page == "") ? 'current-menu-ancestor' : ''; ?>">
				<a href="<?php echo lang_base_url(); ?>/home">
					<?php echo trans("home"); ?>
				</a>
			</li>
			<?php
			$total_items = 1;
			$i = 1;
			foreach ($main_menu as $menu_item):
				if ($menu_item->item_location == "header"):

					if ($i < $menu_limit):
						$sub_links = get_sub_links($menu_item->item_id, $menu_item->item_type);
						if (!empty($sub_links)): ?>
							<li class="menu-item menu-item-type-custom menu-item-object-custom <?php echo ($active_page == $menu_item->item_slug) ? 'current-menu-ancestor' : ''; ?>">
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
							<li  class="<?php if($menu_item->item_slug == 'subscribe') echo 'gridlove-sidebar-action-subscribe'; ?> menu-item menu-item-type-custom menu-item-object-custom <?php echo ($active_page == $menu_item->item_slug) ? 'current-menu-ancestor' : ''; ?>">
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
			  	
		</ul>
		</nav>
	</div>
	<!--search modal-->
		<div class="gridlove-slot-r">
			<ul class="gridlove-actions gridlove-menu">
			<li class="gridlove-actions-button gridlove-action-search">
			<span>
			<i class="fa fa-search"></i>
			</span>
			<ul class="sub-menu">
			<li>
			<?php echo form_open(lang_base_url() . 'search', ['method' => 'get'],'class="gridlove-search-form"'); ?>
			
				<input name="q" type="text" value="" placeholder="<?php echo html_escape(trans("search_exp")); ?>">
				<button type="submit" class="gridlove-button-search">Search</button>
			<?php echo form_close(); ?>
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
		<!-- /.modal-search -->
</div>