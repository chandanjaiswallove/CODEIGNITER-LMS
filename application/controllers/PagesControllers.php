<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesControllers extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function aboutus()
	{
		$this->load->view('pages/aboutus');
	}
    
	public function allcourse()
	{
		$this->load->view('pages/allcourse');
	}

	public function blog()
	{
		$this->load->view('pages/blog');
	}

	public function contactus()
	{
		$this->load->view('pages/contactus');
	}

	public function developer()
	{
		$this->load->view('pages/developer');
	}

	public function event()
	{
		$this->load->view('pages/event');
	}

	public function gallery()
	{
		$this->load->view('pages/gallery');
	}

	public function instructor()
	{
		$this->load->view('pages/instructor');
	}

	public function joinNow()
	{
		$this->load->view('pages/joinNow');
	}

	public function organizer()
	{
		$this->load->view('pages/organizer');
	}

	public function page_not_found()
	{
		$this->load->view('pages/page_not_found');
	}

	public function result()
	{
		$this->load->view('pages/result');
	}
	
	public function course_one()
	{
		$this->load->view('pages/course_one');
	}

	public function course_two()
	{
		$this->load->view('pages/course_two');
	}

	public function course_three()
	{
		$this->load->view('pages/course_three');
	}

	public function course_four()
	{
		$this->load->view('pages/course_four');
	}

	public function course_five()
	{
		$this->load->view('pages/course_five');
	}

	public function course_six()
	{
		$this->load->view('pages/course_six');
	}

	public function course_seven()
	{
			$this->load->view('pages/course_seven');
	}

	public function course_eight()
	{
		$this->load->view('pages/course_eight');
	}

	public function course_nine()
	{
		$this->load->view('pages/course_nine');
	}
}
