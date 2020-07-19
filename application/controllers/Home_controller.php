<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends Home_Core_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->comment_limit = 5;
	}

	/**
	 * Index Page
	 */
	public function home()
	{
		get_method();
		$data['title'] = $this->settings->home_title;
		$data['description'] = $this->settings->site_description;
		$data['keywords'] = $this->settings->keywords;
		$data['home_title'] = $this->settings->home_title;

		//our pick posts
		$this->ourpick_posts = get_cached_data('ourpick_posts');
		if (empty($this->ourpick_posts)) {
			$this->ourpick_posts = $this->post_model->get_our_picks_articles(5);
			set_cache_data('ourpick_posts', $this->ourpick_posts);
		}

		//our pick posts
		$this->ourpick_posts_video = get_cached_data('ourpick_posts_video');
		if (empty($this->ourpick_posts_video)) {
			$this->ourpick_posts_video = $this->post_model->get_our_picks_video(1);
			set_cache_data('ourpick_posts_video', $this->ourpick_posts_video);
		}
		

		$data['ourpick'] = $this->ourpick_posts;
		$data['ourpick_video'] = $this->ourpick_posts_video;
		
		$data_pages['title'] = trans("pages");
		$data_pages['pages'] = $this->page_model->get_all_pages();
		$data_pages['lang_search_column'] = 2;


		//----recent blog------

		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;


		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;







		$this->load->view('partials/_header_blog', $data);
		$this->load->view('home_blog',$data);
		$this->load->view('partials/_footer_blog',$data_pages);
	}

	/**
	 * social missing Page
	 */
	public function socialmessage()
	{
		get_method();
		$data['title'] = "Social Page";
		$data['description'] = "Social Page";
		$data['keywords'] = "Social Page";
		$data['home_title'] = "Social Page";

		

		
		
		$data_pages['title'] = trans("pages");
		$data_pages['pages'] = $this->page_model->get_all_pages();
		$data_pages['lang_search_column'] = 2;


		//----recent blog------

		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;


		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;







		$this->load->view('partials/_header_blog', $data);
		$this->load->view('partials/_socialmessage_blog',$data);
		$this->load->view('partials/_footer_blog',$data_pages);
	}

	/**
	 * subscribe Page
	 */

	public function subscribe(){

			post_method();
			//if($this->input->method() === 'post')
			//input values
			$type['print'] = $this->input->post('sus_chk_print', true);
			$type['digital'] = $this->input->post('sus_chk_digital', true);


			$data['title'] = "Subscribe";
			$data['description'] = "Subscribe";
			$data['keywords'] = "Subscribe";


			
		$data_pages['title'] = trans("pages");
		$data_pages['pages'] = $this->page_model->get_all_pages();
		$data_pages['lang_search_column'] = 2;


		//----recent blog------

		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;


		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;




			$this->load->view('partials/_header_blog',$data);
			$this->load->view('subscibe',$type);
			$this->load->view('partials/_footer_blog',$data_pages);

	}

	/**
	 * edition Page
	 */

	public function edition(){
		$data['title'] = "Edition";
		$data['description'] = "Edition";
		$data['keywords'] = "Edition";
		$data['home_title'] = "Edition";
		$data_pages['pages'] = $this->page_model->get_all_pages();
		//----recent blog------
		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


		//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}
		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;
		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;
		$this->load->view('partials/_header_blog',$data);
		$this->load->view('edition');
		$this->load->view('partials/_footer_blog',$data_pages);

	}



	/**
	 * edition Page
	 */

	public function editionpdf(){
		$data['title'] = "Edition PDF";
		$data['description'] = "Edition PDF";
		$data['keywords'] = "Edition PDF";
		$data['home_title'] = "Edition PDF";
		$data_pages['pages'] = $this->page_model->get_all_pages();
		//----recent blog------
		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


		//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}
		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;
		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;
		$this->load->view('partials/_header_blog',$data);
		$this->load->view('editionpdf');
		$this->load->view('partials/_footer_blog',$data_pages);

	}



		/**
	 * Make save subscribe
	 */
	public function savesubscribe()
	{
		post_method();
		
		$data['email'] = $this->input->post('email',true);
		$data['pname'] = $this->input->post('pname',true);
		$data['cname'] = $this->input->post('cname',true);
		$data['age'] = $this->input->post('age',true);
		$data['country'] = $this->input->post('country',true);
		$data['mobile'] = $this->input->post('mobile',true);
		$data['address1'] = $this->input->post('address1',true);
		$data['address2'] = $this->input->post('address2',true);
		$data['city'] = $this->input->post('city',true);
		$data['state'] = $this->input->post('state',true);
		$data['zipcode'] = $this->input->post('zipcode',true);
		$data['type'] = $this->input->post('type',true);
		$data['agree'] = $this->input->post('agree',true);
		$data['created_at'] = date('Y-m-d H:i:s');
		


		//input values
		$email = $this->input->post('email', true);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->session->set_flashdata('errors', trans("message_invalid_email"));
		} else {
			if ($email) {
				//check if email exists
				if (empty($this->newsletter_model->get_subscriber($email))) {
					//addd
					if ($this->newsletter_model->save_subscriber($data)) {
						$this->session->set_flashdata('success', trans("message_newsletter_success"));
						redirect('edition');
					}
				} else {
					redirect('edition');
				}
			}

		}

		
		






		
	}

	/**
	 * Gallery Page
	 */
	public function gallery()
	{
		get_method();
		$data['page'] = $this->page_model->get_page('gallery');
		//check page auth
		$this->checkPageAuth($data['page']);

		if ($data['page']->page_active == 0) {
			$this->error_404();
		} else {
			$data['title'] = get_page_title($data['page']);
			$data['description'] = get_page_description($data['page']);
			$data['keywords'] = get_page_keywords($data['page']);

			//get gallery categories
			$data['gallery_albums'] = $this->gallery_category_model->get_albums_by_selected_lang();
			

			$this->load->view('partials/_header', $data);
			$this->load->view('gallery/gallery', $data);
			$this->load->view('partials/_footer');
		}
	}

	/**
	 * Gallery Album Page
	 */
	public function gallery_album($id)
	{
		get_method();
		$id = clean_number($id);
		$data['page'] = $this->page_model->get_page('gallery');
		//check page auth
		$this->checkPageAuth($data['page']);

		if ($data['page']->page_active == 0) {
			$this->error_404();
		} else {
			$data['title'] = get_page_title($data['page']);
			$data['description'] = get_page_description($data['page']);
			$data['keywords'] = get_page_keywords($data['page']);

			//get album
			$data['album'] = $this->gallery_category_model->get_album($id);
			if (empty($data['album'])) {
				redirect($this->agent->referrer());
			}
			//get gallery images
			$data['gallery_images'] = $this->gallery_model->get_images_by_album($data['album']->id);
			$data['gallery_categories'] = $this->gallery_category_model->get_categories_by_album($data['album']->id);
			

			$this->load->view('partials/_header', $data);
			$this->load->view('gallery/gallery_album', $data);
			$this->load->view('partials/_footer');
		}
	}

	/**
	 * Contact Page
	 */
	public function contact()
	{
		get_method();
		$data['page'] = $this->page_model->get_page('contact');
		//check page auth
		$this->checkPageAuth($data['page']);

		if ($data['page']->page_active == 0) {
			$this->error_404();
		} else {
			$data['title'] = get_page_title($data['page']);
			$data['description'] = get_page_description($data['page']);
			$data['keywords'] = get_page_keywords($data['page']);
			
			$data_pages['pages'] = $this->page_model->get_all_pages();
		


		//----recent blog------

		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;
		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;

		$this->load->view('partials/_header_blog', $data);
		$this->load->view('contact_blog', $data);
		$this->load->view('partials/_footer_blog',$data_pages);

			
		}
	}


	/**
	 * Contact Page Post
	 */
	public function contact_post()
	{
		post_method();
		//validate inputs
		$this->form_validation->set_rules('name', trans("name"), 'required|xss_clean|max_length[200]');
		$this->form_validation->set_rules('email', trans("email"), 'required|xss_clean|max_length[200]');
		$this->form_validation->set_rules('message', trans("message"), 'required|xss_clean|max_length[5000]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|xss_clean|max_length[10]');

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->contact_model->input_values());
			redirect($this->agent->referrer());
		} else {
			if (!$this->recaptcha_verify_request()) {
				$this->session->set_flashdata('form_data', $this->contact_model->input_values());
				$this->session->set_flashdata('error', trans("msg_recaptcha"));
				redirect($this->agent->referrer());
			} else {

				if ($this->contact_model->add_contact_message()) {
					$this->session->set_flashdata('success', trans("message_contact_success"));
					redirect($this->agent->referrer());
				} else {
					$this->session->set_flashdata('form_data', $this->contact_model->input_values());
					$this->session->set_flashdata('error', trans("message_contact_error"));
					redirect($this->agent->referrer());
				}
			}
		}
	}

	/**
	 * Rss Page
	 */
	public function rss_feeds()
	{
		get_method();
		if ($this->general_settings->show_rss == 0) {
			$this->error_404();
		} else {
			$data['title'] = trans("rss_feeds");
			$data['description'] = trans("rss_feeds") . " - " . $this->settings->application_name;
			$data['keywords'] = trans("rss_feeds") . "," . $this->settings->application_name;

			$this->load->view('partials/_header', $data);
			$this->load->view('rss_channels', $data);
			$this->load->view('partials/_footer');

		}
	}

	/**
	 * Tag Page
	 */
	public function tag($tag_slug)
	{
		get_method();
		$tag_slug = clean_slug($tag_slug);
		$data['tag'] = $this->tag_model->get_tag($tag_slug);
		//check tag exists
		if (empty($data['tag'])) {
			redirect(lang_base_url());
		}

		$data['title'] = html_escape($data['tag']->tag);
		$data['description'] = trans("tag") . ': ' . $data['tag']->tag;
		$data['keywords'] = trans("tag") . ', ' . $data['tag']->tag;

		$total_rows = $this->post_model->get_tag_post_count($tag_slug);
		//set paginated
		$pagination = $this->paginate(lang_base_url() . 'tag/' . $tag_slug, $total_rows);
		$data['posts'] = $this->post_model->get_paginated_tag_posts($tag_slug, $pagination['per_page'], $pagination['offset']);

		$this->load->view('partials/_header', $data);
		$this->load->view('tag', $data);
		$this->load->view('partials/_footer');
	}

	/**
	 * Reading List Page
	 */
	public function reading_list()
	{
		get_method();
		$data['title'] = trans("reading_list");
		$data['description'] = trans("reading_list") . " - " . $this->settings->application_name;
		$data['keywords'] = trans("reading_list") . "," . $this->settings->application_name;

		$total_rows = $this->reading_list_model->get_reading_list_count();
		//set paginated
		$pagination = $this->paginate(lang_base_url() . 'reading-list', $total_rows);
		$data['posts'] = $this->reading_list_model->get_paginated_reading_list($pagination['per_page'], $pagination['offset']);
		$data['post_count'] = $total_rows;

		$this->load->view('partials/_header', $data);
		$this->load->view('reading_list', $data);
		$this->load->view('partials/_footer');
	}

	/**
	 * Search Page
	 */
	public function search()
	{
		get_method();
		$q = trim($this->input->get('q', TRUE));

		$data['q'] = $q;
		$data['title'] = trans("search") . ': ' . $q;
		$data['description'] = trans("search") . ': ' . $q;
		$data['keywords'] = trans("search") . ', ' . $q;
		
		$total_rows = $this->post_model->get_search_post_count($q);
		//set paginated
		$pagination = $this->paginate(lang_base_url() . 'search', $total_rows);
		$data['posts'] = $this->post_model->get_paginated_search_posts($q, $pagination['per_page'], $pagination['offset']);
		$data['post_count'] = $total_rows;

		$this->load->view('partials/_header', $data);
		$this->load->view('search', $data);
		$this->load->view('partials/_footer');
	}

	/**
	 * Dynamic Page by Name Slug
	 */
	public function any($slug)
	{
		get_method();
		$slug = clean_slug($slug);
		//index page
		if (empty($slug)) {
			redirect(lang_base_url());
		}
		if ($slug == $this->selected_lang->short_form) {
			redirect(base_url());
			exit();
		}
		
		$data['page'] = $this->page_model->get_page_by_lang($slug, $this->selected_lang->id);
		//if not exists
		if (!empty($data['page'])) {
			$this->page($data['page']);
		} else {
			$data['category'] = $this->category_model->get_category_by_slug($slug);
			if (!empty($data['category'])) {
				$this->category($data['category']);
			} else {
				$this->post($slug);
			}
		}
	}

	/**
	 * Page
	 */
	private function page($page)
	{
		$data['page'] = $page;
		//check page auth
		$this->checkPageAuth($data['page']);
		//if not exists
		if (empty($data['page']) || $data['page'] == null) {
			$this->error_404();
		} //check if page disable
		else if ($data['page']->page_active == 0 || $data['page']->link != '') {
			$this->error_404();
		} else {
			$data['title'] = get_page_title($data['page']);
			$data['description'] = get_page_description($data['page']);
			$data['keywords'] = get_page_keywords($data['page']);



			$data_pages['title'] = trans("pages");
		$data_pages['pages'] = $this->page_model->get_all_pages();
		$data_pages['lang_search_column'] = 2;


		//----recent blog------

		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;


		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;







		$this->load->view('partials/_header_blog', $data);
		$this->load->view('page', $data);
		$this->load->view('partials/_footer_blog',$data_pages);


			

		}
	}

	/**
	 * Post Page
	 */
	private function post($slug)
	{
		$slug = clean_slug($slug);
		$data['post'] = $this->post_model->get_post($slug);
		//check if post exists
		if (empty($data['post'])) {
			redirect(lang_base_url());
		}

		$id = $data['post']->id;
		$type = $data['post']->post_type;

		if (!auth_check() && $data['post']->need_auth == 1) {
			$this->session->set_flashdata('error', trans("message_post_auth"));
			redirect(lang_base_url() . 'login');
		}

		//check visibility
		if ($data['post']->visibility != 1) {
			redirect(lang_base_url());
		}

		$data['category'] = $this->category_model->get_category($data['post']->category_id);
		$data['additional_images'] = $this->post_file_model->get_post_additional_images($id);
		$data['post_user'] = $this->auth_model->get_user($data['post']->user_id);

		$key = 'related_posts_' . $id;
		$data['related_posts'] = get_cached_data($key);
		if (empty($data['related_posts'])) {
			$data['related_posts'] = $this->post_model->get_related_posts($data['post']->category_id, $id);
			set_cache_data($key, $data['related_posts']);
		}

		$key = 'post_tags_' . $id;
		$data['post_tags'] = get_cached_data($key);
		if (empty($data['post_tags'])) {
			$data['post_tags'] = $this->tag_model->get_post_tags($id);
			set_cache_data($key, $data['post_tags']);
		}

		$data['comment_count'] = $this->comment_model->post_comment_count($data["post"]->id);
		$data['comments'] = $this->comment_model->get_comments($data["post"]->id, $this->comment_limit);
		$data['comment_limit'] = $this->comment_limit;


		$data['is_reading_list'] = $this->reading_list_model->is_post_in_reading_list($id);

		$data['page_type'] = "post";

		$data['post_type_check'] = $type;

		//set og tags
		$data['og_type'] = "article";
		$data['og_url'] = generate_post_url($data['post']);
		$data['og_image'] = base_url() . $data['post']->image_mid;
		$data['og_tags'] = $data['post_tags'];
		if (!empty($data['post']->image_url)) {
			$data['og_image'] = $data['post']->image_url;
		}

		$data['title'] = xss_clean($data['post']->title);
		$data['description'] = xss_clean($data['post']->summary);
		$data['keywords'] = xss_clean($data['post']->keywords);

		$this->reaction_model->set_voted_reactions_session($id);
		$data["reactions"] = $this->reaction_model->get_reaction($id);
		$data["emoji_lang"] = $this->selected_lang->folder_name;




		$data['pages'] = $this->page_model->get_all_pages();
			//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data['latestblog'] = $this->recent_post_4_0;
		$data['latestblognav2'] = $this->recent_post_4_4;


		$data['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data['mostviewedblog4'] = $this->mostviewed_post_4_4;
		



		$this->load->view('partials/_header_blog', $data);
		$this->load->view('post/post_blog', $data);
		$this->load->view('partials/_footer_blog', $data);

		//increase post hit
		$this->post_model->increase_post_hit($data['post']);
	}

	/**
	 * Category Page
	 */
	private function category($category)
	{
		$data['category'] = $category;
		//check category exists
		if (empty($data['category'])) {
			redirect(lang_base_url());
		}
		$category_id = $data['category']->id;

		$data['title'] = xss_clean($data['category']->name);
		$data['description'] = xss_clean($data['category']->description);
		$data['keywords'] = xss_clean($data['category']->keywords);

		$key = 'posts_category_' . $category_id;
		//posts count
		$total_rows = $this->post_model->get_post_count_by_category($category_id);

		$parent_slug = null;
		$parent = helper_get_category($data['category']->parent_id);
		if (!empty($parent)) {
			$parent_slug = $parent->slug;
		}
		//set paginated
		$pagination = $this->paginate(generate_category_url($parent_slug, $data['category']->slug), $total_rows);
		$data['posts'] = get_cached_data($key . '_page' . $pagination['current_page']);
		if (empty($data['posts'])) {
			//get posts
			$data['posts'] = $this->post_model->get_paginated_category_posts($category_id, $pagination['per_page'], $pagination['offset']);
			set_cache_data($key . '_page' . $pagination['current_page'], $data['posts']);
		}


		$data['pages'] = $this->page_model->get_all_pages();
			//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data['latestblog'] = $this->recent_post_4_0;
		$data['latestblognav2'] = $this->recent_post_4_4;


		$data['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data['mostviewedblog4'] = $this->mostviewed_post_4_4;
		



		$data['postsmax'] = $this->post_model->get_paginated_category_posts($category_id, 10,4);


		$this->load->view('partials/_header_blog', $data);
		$this->load->view('category_blog', $data);
		$this->load->view('partials/_footer_blog',$data);
	}

	/**
	 * Subcategory Page
	 */
	public function subcategory($parent_slug, $slug)
	{
		get_method();
		$parent_slug = clean_slug($parent_slug);
		$slug = clean_slug($slug);
		$data['category'] = $this->category_model->get_category_by_slug($slug);
		//check category exists
		if (empty($data['category'])) {
			redirect(lang_base_url());
			exit();
		}
		
		$this->category($data['category']);
	}

	/**
	 * SUPPORT OLD CATEGORY LINKS
	 */
	public function category_old($slug)
	{
		get_method();
		$slug = clean_slug($slug);
		$data['category'] = $this->category_model->get_category_by_slug($slug);
		//check category exists
		if (empty($data['category'])) {
			redirect(lang_base_url());
			exit();
		}
		
		$this->category($data['category']);
	}

	/**
	 * Add or Delete from Reading List
	 */
	public function add_delete_from_reading_list_post()
	{
		post_method();
		$post_id = $this->input->post('post_id');
		if (empty($post_id)) {
			redirect($this->agent->referrer());
		}
		$is_post_in_reading_list = $this->reading_list_model->is_post_in_reading_list($post_id);
		//delete from list
		if ($is_post_in_reading_list == true) {
			$this->reading_list_model->delete_from_reading_list($post_id);
		} else {
			//add to list
			$this->reading_list_model->add_to_reading_list($post_id);
		}
		redirect($this->agent->referrer());
	}

	/**
	 * Add Comment
	 */
	public function add_comment_post()
	{
		post_method();
		if ($this->general_settings->comment_system != 1) {
			exit();
		}
		$limit = $this->input->post('limit', true);
		$post_id = $this->input->post('post_id', true);
		if (auth_check()) {
			$this->comment_model->add_comment();
		} else {
			if ($this->recaptcha_verify_request()) {
				$this->comment_model->add_comment();
			}
		}

		if ($this->general_settings->comment_approval_system == 1) {
			$data = array(
				'type' => 'message',
				'message' => "<p class='comment-success-message'><i class='icon-check'></i>&nbsp;&nbsp;" . trans("msg_comment_sent_successfully") . "</p>"
			);
			echo json_encode($data);
		} else {
			$data["post"] = $this->post_model->get_post_by_id($post_id);
			$data['comment_count'] = $this->comment_model->post_comment_count($post_id);
			$data['comments'] = $this->comment_model->get_comments($post_id, $limit);
			$data['comment_limit'] = $limit;

			$data_json = array(
				'type' => 'comments',
				'message' => $this->load->view('post/_comments', $data, true)
			);
			echo json_encode($data_json);
		}
	}

	//delete comment
	public function delete_comment_post()
	{
		post_method();
		$id = $this->input->post('id', true);
		$post_id = $this->input->post('post_id', true);
		$limit = $this->input->post('limit', true);

		$comment = $this->comment_model->get_comment($id);
		if (auth_check() && !empty($comment)) {
			if (user()->role == "admin" || user()->id == $comment->user_id) {
				$this->comment_model->delete_comment($id);
			}
		}

		$data["post"] = $this->post_model->get_post_by_id($post_id);
		$data['comments'] = $this->comment_model->get_comments($post_id, $limit);
		$data['comment_count'] = $this->comment_model->post_comment_count($post_id);
		$data['comment_limit'] = $limit;

		$this->load->view('post/_comments', $data);
	}

	//load subcomment box
	public function load_subcomment_box()
	{
		post_method();
		$comment_id = $this->input->post('comment_id', true);
		$limit = $this->input->post('limit', true);
		$data["parent_comment"] = $this->comment_model->get_comment($comment_id);
		$data["comment_limit"] = $limit;
		$this->load->view('post/_make_subcomment', $data);
	}

	//load more comment
	public function load_more_comment()
	{
		post_method();
		$post_id = $this->input->post('post_id', true);
		$limit = $this->input->post('limit', true);
		$new_limit = $limit + $this->comment_limit;
		$data["post"] = $this->post_model->get_post_by_id($post_id);
		$data["comments"] = $this->comment_model->get_comments($post_id, $new_limit);
		$data['comment_count'] = $this->comment_model->post_comment_count($post_id);
		$data['comment_limit'] = $new_limit;

		$this->load->view('post/_comments', $data);
	}

	/**
	 * Add to Newsletter
	 */
	public function add_to_newsletter()
	{
		post_method();
		//input values
		$email = $this->input->post('email', true);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->session->set_flashdata('news_error', trans("message_invalid_email"));
		} else {
			if ($email) {
				//check if email exists
				if (empty($this->newsletter_model->get_subscriber($email))) {
					//addd
					if ($this->newsletter_model->add_subscriber($email)) {
						$this->session->set_flashdata('news_success', trans("message_newsletter_success"));
					}
				} else {
					$this->session->set_flashdata('news_error', trans("message_newsletter_error"));
				}
			}

		}

		redirect($this->agent->referrer() . "#newsletter");
	}

	/**
	 * Make Reaction
	 */
	public function save_reaction()
	{
		post_method();
		$post_id = $this->input->post('post_id');
		$reaction = $this->input->post('reaction');
		$data["emoji_lang"] = $this->input->post('lang');

		$this->config->set_item('language', $data["emoji_lang"]);
		$this->lang->load("site_lang", $data["emoji_lang"]);

		$data["post"] = $this->post_admin_model->get_post($post_id);

		if (!empty($data["post"])) {
			$this->reaction_model->save_reaction($post_id, $reaction);
		}

		$data["reactions"] = $this->reaction_model->get_reaction($post_id);
		$this->load->view('partials/_emoji_reactions', $data);
	}

	/**
	 * Add Poll Vote
	 */
	public function add_vote()
	{
		post_method();
		$poll_id = $this->input->post('poll_id', true);
		$option = $this->input->post('option', true);
		if (is_null($option)) {
			echo "required";
		} else {
			$result = $this->poll_model->add_unregistered_vote($poll_id, $option);
			if ($result == "success") {
				$data["poll"] = $this->poll_model->get_poll($poll_id);
				$this->load->view('partials/_poll_results', $data);
			} else {
				echo "voted";
			}
		}
	}


	//download post file
	public function download_edition_file($filename)
	{
		post_method();
		
		if (!empty($filename)) {
			$this->load->helper('download');
			force_download(FCPATH . FILES_DIRECTORY . $filename, NULL);
		}
		redirect($this->agent->referrer());
	}



	//download post file
	public function download_post_file()
	{
		post_method();
		$id = $this->input->post('id', true);
		$file = $this->file_model->get_file($id);
		if (!empty($file)) {
			$this->load->helper('download');
			force_download(FCPATH . FILES_DIRECTORY . $file->file_name, NULL);
		}
		redirect($this->agent->referrer());
	}

	//cookies warning
	public function cookies_warning()
	{
		setcookie('inf_cookies_warning', '1', time() + (86400 * 20), "/");
	}

	private function checkPageAuth($page)
	{
		if (!empty($page)) {
			if (!auth_check() && $page->need_auth == 1) {
				$this->session->set_flashdata('error', trans("message_page_auth"));
				redirect(lang_base_url() . 'login');
			}
		}
	}

	public function error_404()
	{
		$data['title'] = "Error 404";
		$data['description'] = "Error 404";
		$data['keywords'] = "error, 404";

		
		$data_pages['pages'] = $this->page_model->get_all_pages();
		


		//----recent blog------

		//our pick posts
		$this->recent_post_4_0 = get_cached_data('recent_post_4_0');
		if (empty($this->recent_post_4_0)) {
			$this->recent_post_4_0 = $this->post_model->get_posts_limit(4,0);
			set_cache_data('recent_post_4_0', $this->recent_post_4_0);
		}

		//our pick posts
		$this->recent_post_4_4 = get_cached_data('recent_post_4_4');
		if (empty($this->recent_post_4_4)) {
			$this->recent_post_4_4 = $this->post_model->get_posts_limit(4,4);
			set_cache_data('recent_post_4_4', $this->recent_post_4_4);
		}


			//our most viewed posts
		$this->mostviewed_post_4_0 = get_cached_data('mostviewed_post_4_0');
		if (empty($this->mostviewed_post_4_0)) {
			$this->mostviewed_post_4_0 = $this->post_model->get_popular_posts_limit(4,0);
			set_cache_data('mostviewed_post_4_0', $this->recent_post_4_0);
		}

		//our most viewed posts
		$this->mostviewed_post_4_4 = get_cached_data('mostviewed_post_4_4');
		if (empty($this->mostviewed_post_4_4)) {
			$this->mostviewed_post_4_4 = $this->post_model->get_popular_posts_limit(4,4);
			set_cache_data('mostviewed_post_4_4', $this->mostviewed_post_4_4);
		}



		$data_pages['latestblog'] = $this->recent_post_4_0;
		$data_pages['latestblognav2'] = $this->recent_post_4_4;


		$data_pages['mostviewedblog0'] = $this->mostviewed_post_4_0;
		$data_pages['mostviewedblog4'] = $this->mostviewed_post_4_4;







		$this->load->view('partials/_header_blog', $data);
		$this->load->view('errors/error_404');
		$this->load->view('partials/_footer_blog',$data_pages);
	
	}


}
