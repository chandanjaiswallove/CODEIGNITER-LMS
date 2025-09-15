<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentResults extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('StudentResults_model');
        $this->load->library('pagination');
    }

    public function index($page = 0)
    {
        // Pagination Config
        $config['base_url'] = base_url('studentresults/index');
        $config['total_rows'] = $this->StudentResults_model->get_count();
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        // Data fetch
        $data['students'] = $this->StudentResults_model->get_students($config['per_page'], $page);

        // Load main page (pages/result.php)
        $this->load->view('pages/result', $data);
    }
}
