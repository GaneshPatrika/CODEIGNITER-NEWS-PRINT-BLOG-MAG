<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
    <div class="col-sm-12">

        <!-- form start -->
        <?php echo form_open_multipart('post_controller/update_post_post'); ?>
        <input type="hidden" name="post_type" value="video">
        <div class="row">
            <div class="col-sm-12 form-header">
                <h1 class="form-title"><?php echo trans('update_video'); ?></h1>
                <a href="<?php echo admin_url(); ?>posts" class="btn btn-success btn-add-new pull-right">
                    <i class="fa fa-bars"></i>
                    <?php echo trans('posts'); ?>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-post">

                    <div class="form-post-left">
                        <?php $this->load->view("admin/post/_form_update_post_left"); ?>
                    </div>

                    <div class="form-post-right">
                        <div class="row">
							<div class="col-sm-12">
								<?php $this->load->view('admin/post/_video_edit_box'); ?>
							</div>
							<div class="col-sm-12">
								<?php $this->load->view('admin/post/_upload_file_box_video'); ?>
							</div>

							<?php if (is_admin()): ?>
								<div class="col-sm-12">
									<div class="box">
										<div class="box-header with-border">
											<div class="left">
												<h3 class="box-title"><?php echo trans('post_owner'); ?></h3>
											</div>
										</div><!-- /.box-header -->
										<div class="box-body">
											<div class="form-group">
												<select name="user_id" class="form-control">
													<?php foreach ($users as $user): ?>
														<option value="<?php echo $user->id; ?>" <?php echo ($post->user_id == $user->id) ? 'selected' : ''; ?>><?php echo $user->username; ?>&nbsp;(<?php echo $user->role; ?>)</option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
									</div>
								</div>
							<?php else: ?>
								<input type="hidden" name="user_id" value="<?php echo $post->user_id; ?>">
							<?php endif; ?>

							<div class="col-sm-12">
								<div class="box">
									<div class="box-header with-border">
										<div class="left">
											<h3 class="box-title"><?php echo trans('category'); ?></h3>
										</div>
									</div><!-- /.box-header -->
									<div class="box-body">
										<div class="form-group">
											<label><?php echo trans("language"); ?></label>
											<select name="lang_id" class="form-control" onchange="get_top_categories_by_lang(this.value);">
												<?php foreach ($languages as $language): ?>
													<option value="<?php echo $language->id; ?>" <?php echo ($post->lang_id == $language->id) ? 'selected' : ''; ?>><?php echo $language->name; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label"><?php echo trans('category'); ?></label>
											<select id="categories" name="category_id" class="form-control max-600" onchange="get_sub_categories(this.value);" required>
												<option value=""><?php echo trans('select'); ?></option>
												<?php foreach ($categories as $item): ?>
													<option value="<?php echo html_escape($item->id); ?>" <?php echo ($item->id == $category_id) ? 'selected' : ''; ?>><?php echo html_escape($item->name); ?></option>
												<?php endforeach; ?>
											</select>
										</div>

										<div class="form-group">
											<label class="control-label"><?php echo trans('subcategory'); ?></label>
											<select id="subcategories" name="subcategory_id" class="form-control max-600">
												<option value="0"><?php echo trans('select'); ?></option>
												<?php foreach ($subcategories as $item): ?>
													<option value="<?php echo html_escape($item->id); ?>" <?php echo ($item->id == $subcategory_id) ? 'selected' : ''; ?>><?php echo html_escape($item->name); ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>
							</div>

                            <div class="col-sm-12">
                                <?php $this->load->view('admin/includes/_post_publish_edit_box'); ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php echo form_close(); ?><!-- form end -->

    </div>
</div>

<?php $this->load->view('admin/file-manager/_load_file_manager', ['load_images' => true, 'load_files' => "video"]); ?>


