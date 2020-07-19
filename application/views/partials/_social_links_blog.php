<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <div id="mks_social_widget-5" class="widget mks_social_widget">
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
        </div>

