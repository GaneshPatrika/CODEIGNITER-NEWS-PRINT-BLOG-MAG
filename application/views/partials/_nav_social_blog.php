<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="gridlove-slot-r">
                        <ul class="gridlove-actions gridlove-menu">
                            <?php if (!empty($settings->facebook_url)) : ?> 
                            <li class="gridlove-actions-button">
                                <span>
                                <a href="<?php echo html_escape($settings->facebook_url); ?>" target="_blank">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </li>
                             <?php endif; ?>
                             <?php if (!empty($settings->vk_url)) : ?>
                            <li class="gridlove-actions-button">
                                <span>
                                 <a href="<?php echo html_escape($settings->vk_url); ?>" target="_blank">
                                    <i class="fa fa-youtube-square" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </li>
                             <?php endif; ?>
                             <?php if (!empty($settings->twitter_url)) : ?>
                            <li class="gridlove-actions-button">
                                <span>
                                <a href="<?php echo html_escape($settings->twitter_url); ?>" target="_blank">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </li>
                             <?php endif; ?>
                             <?php if (!empty($settings->google_url)) : ?>
                            <li class="gridlove-actions-button">
                                <span>
                                 <a href="<?php echo html_escape($settings->google_url); ?>" target="_blank">
                                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                     </a>
                                </span>
                            </li>
                             <?php endif; ?>
                              <?php if (!empty($settings->instagram_url)) : ?>
                            <li class="gridlove-actions-button">
                                <span>
                                 <a href="<?php echo html_escape($settings->instagram_url); ?>" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                     </a>
                                </span>
                            </li>
                             <?php endif; ?>
                             <li class="gridlove-actions-button">
                                <span>
                                    <span class="divider"> </span>
                                </span>
                            </li>
                            <!--<li class="gridlove-actions-button">
                                <span class="gridlove-sidebar-action-subscribe">
                                      <span>&nbsp;Contact</span>
                            </span>
                           </li>---->
                           <li class="gridlove-actions-button">
                                <span>
                                    <a href="<?php echo lang_base_url(); ?>contact" >
                                      <span>Contact</span>
                                     </a>
                                </span>
                            </li>
                                                 
                            <!--<li class="gridlove-actions-button">
                                <span>
                                    <a href="<?php echo lang_base_url(); ?>login" target="_blank">
                                     <i class="fa fa-user-circle" aria-hidden="true"></i> <span>Sign In</span>
                                     </a>
                                </span>
                            </li>---->
                    </ul>
                </div>