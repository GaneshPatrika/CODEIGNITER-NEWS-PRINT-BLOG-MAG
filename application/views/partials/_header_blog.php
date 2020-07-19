<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->selected_lang->short_form ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?></title>
	<meta name="description" content="<?php echo xss_clean($description); ?>"/>
	<meta name="keywords" content="<?php echo xss_clean($keywords); ?>"/>
	<meta name="author" content="Codingest"/>
	<meta name="robots" content="all"/>
	<meta name="revisit-after" content="1 Days"/>
	<meta property="og:locale" content="<?php echo $this->selected_lang->language_code ?>"/>
	<meta property="og:site_name" content="<?php echo $settings->application_name; ?>"/>
<?php if (isset($page_type)): ?>
    <meta property="og:type" content="<?php echo $og_type; ?>"/>
    <meta property="og:title" content="<?php echo xss_clean($post->title); ?>"/>
    <meta property="og:description" content="<?php echo xss_clean($post->summary); ?>"/>
    <meta property="og:url" content="<?php echo $og_url; ?>"/>
    <meta property="og:image" content="<?php echo $og_image; ?>"/>
    <meta property="og:image:width" content="750"/>
    <meta property="og:image:height" content="415"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="<?php echo $settings->application_name; ?>"/>
    <meta name="twitter:title" content="<?php echo xss_clean($post->title); ?>"/>
    <meta name="twitter:description" content="<?php echo xss_clean($post->summary); ?>"/>
    <meta name="twitter:image" content="<?php echo $og_image; ?>"/>
<?php foreach ($og_tags as $tag): ?>
    <meta property="article:tag" content="<?php echo $tag->tag; ?>"/>
<?php endforeach; ?>
<?php else: ?>
    <meta property="og:image" content="<?php echo get_logo($general_settings); ?>"/>
    <meta property="og:image:width" content="180"/>
    <meta property="og:image:height" content="50"/>
    <meta property="og:type" content=website/>
    <meta property="og:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?>"/>
    <meta property="og:description" content="<?php echo xss_clean($description); ?>"/>
    <meta property="og:url" content="<?php echo base_url(); ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="<?php echo $settings->application_name; ?>"/>
    <meta name="twitter:title" content="<?php echo xss_clean($title); ?> - <?php echo xss_clean($settings->site_title); ?>"/>
    <meta name="twitter:description" content="<?php echo xss_clean($description); ?>"/>
    <meta name="twitter:image" content="<?php echo get_logo($general_settings); ?>"/>
<?php endif; ?>
	<link rel="canonical" href="<?php echo current_url(); ?>"/>
<?php if ($general_settings->multilingual_system == 1):
foreach ($languages as $language):
if ($language->id == $site_lang->id):?>
    <link rel="alternate" hreflang="<?php echo $language->language_code ?>" href="<?php echo base_url(); ?>"/>
<?php else: ?>
    <link rel="alternate" hreflang="<?php echo $language->language_code ?>" href="<?php echo base_url() . $language->short_form . "/"; ?>"/>
<?php endif; endforeach; endif; ?>
<?php if (empty($general_settings->favicon_path)): ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
<?php else: ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() . html_escape($general_settings->favicon_path); ?>"/>
<?php endif; ?>
	<?php $this->load->view('partials/_font_style'); ?>

    <?php //echo $primary_font_url; ?>
    <?php //echo $secondary_font_url; ?>
	<!-- Icons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blog/morestyle.css"/>

<?php /* if ($this->general_settings->dark_mode == 1): ?>
    <link href="<?php echo base_url(); ?>assets/css/dark.min.css" rel="stylesheet"/>
<?php endif; ?>
	<!-- Color CSS -->
<?php if ($general_settings->site_color == '') : ?>
    <link href="<?php echo base_url(); ?>assets/css/colors/default.min.css" rel="stylesheet"/>
<?php else : ?>
    <link href="<?php echo base_url(); ?>assets/css/colors/<?php echo html_escape($general_settings->site_color); ?>.min.css" rel="stylesheet"/>
<?php endif; ?>
<?php if ($selected_lang->text_direction == "rtl"): ?>
    <!-- RTL -->
    <link href="<?php echo base_url(); ?>assets/css/rtl.min.css" rel="stylesheet"/>
<?php endif; */?> 
    
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Jquery -->
	<script src="https://use.fontawesome.com/16f3315013.js"></script>
	<?php echo $general_settings->head_code; ?>
<?php if ($selected_lang->text_direction == "rtl"): ?>
    <script>var rtl = true;</script>
<?php else: ?>
    <script>var rtl = false;</script>
<?php endif; ?>
	<script>
		var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';var csfr_cookie_name = '<?php echo $this->config->item('csrf_cookie_name'); ?>';var base_url = '<?php echo base_url(); ?>';var is_recaptcha_enabled = false;var lang_folder = '<?php echo $this->selected_lang->folder_name; ?>';<?php if ($recaptcha_status == true): ?>is_recaptcha_enabled = true;<?php endif; ?></script>


<script type="text/javascript">
/* <![CDATA[ */
var gridlove_js_settings = {"rtl_mode":"","header_sticky":"1","header_sticky_offset":"100","header_sticky_up":"","logo":/*"https:\/\/demo.mekshq.com\/gridlove\/wp-content\/themes\/gridlove\/assets\/img\/gridlove_logo.png","logo_retina":"https:\/\/demo.mekshq.com\/gridlove\/wp-content\/themes\/gridlove\/assets\/img\/gridlove_logo@2x.png","logo_mini":"https:\/\/demo.mekshq.com\/gridlove\/wp-content\/themes\/gridlove\/assets\/img\/gridlove_logo_mini.png","logo_mini_retina":"https:\/\/demo.mekshq.com\/gridlove\/wp-content\/themes\/gridlove\/assets\/img\/gridlove_logo_mini@2x.png","gridlove_gallery":*/"1","responsive_secondary_nav":"","responsive_more_link":"More","responsive_social_nav":""};
/* ]]> */
</script>

	
</head>
<body class="home page-template page-template-template-modules page-template-template-modules-php page page-id-207 wp-embed-responsive theme-gridlove woocommerce-js chrome gridlove-v_1_9_5" data-gr-c-s-loaded="true">
<!-- header -->
<header id="header" class="gridlove-site-header hidden-md-down  gridlove-header-shadow">
	
	<div class="gridlove-header-wrapper">
			<div class="gridlove-header-2 gridlove-header-middle container">

				  <div class="gridlove-slot-l">
	                  <div class="gridlove-site-branding  ">
	                    <span class="site-title h1"><a href="<?php echo lang_base_url(); ?>home" rel="home"><img class="gridlove-logo" src="<?php echo get_logo($general_settings); ?>" alt="logo"></a></span>
	                  </div>
	            </div>
	            <?php //-----------social header---------------
					$active_page = uri_string();
					if ($general_settings->site_lang != $selected_lang->id) {
						$active_page = $this->uri->segment(2);
					}





					$this->load->view("partials/_nav_social_blog.php"); ?>
				</div>
				 <div class="gridlove-header-bottom">

				 <?php $this->load->view("partials/_nav_desktop_blog.php", ['active_page' => $active_page]); ?>	

				 </div>
	</div>	

	<?php $this->load->view("partials/_nav_sticky_blog.php", ['active_page' => $active_page]); ?>	
</header>
<!-- /.header-->
<?php $this->load->view("partials/_nav_mobile_blog.php", ['active_page' => $active_page]); ?>	









