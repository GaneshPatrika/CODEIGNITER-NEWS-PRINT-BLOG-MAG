<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/file-uploader/css/jquery.dm-uploader.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/file-uploader/css/styles.css"/>
<script src="<?php echo base_url(); ?>assets/admin/plugins/file-uploader/js/jquery.dm-uploader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/file-uploader/js/demo-ui.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/file-manager/fileicon.css"/>

<?php
if (!empty($load_images)) {
	$images = $this->file_model->get_images(60);
	$this->load->view("admin/file-manager/_file_manager_image", ['images' => $images]);
}
if (!empty($load_files) && $load_files == "video") {
	$files = $this->file_model->get_files_videos(60);
	$this->load->view("admin/file-manager/_file_manager_video", ['files' => $files]);
}
if (!empty($load_files) && $load_files == "audio") {
	$files = $this->file_model->get_files_audio(60);
	$this->load->view("admin/file-manager/_file_manager_audio", ['files' => $files]);
}

?>
