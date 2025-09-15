<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

/**
 * 
 */
class Developer_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function loadDeveloper()
	{
		$this->load->view('developer/developer_login');
	}

	public function developerDashboard()
	{
		$this->load->view('developer/developer_dashboard');
	}

	public function enrollAdmin()
	{
		$this->load->view('developer/enroll_admin');
	}

	public function verifyDeveloper()
	{
		$this->load->model('Developer_Model');
		$this->Developer_Model->developerVerification();
	}

	public function adminLogout()
	{
		$this->load->model('Developer_Model');
		$this->Developer_Model->webmasterLogout();
	}
}
?>