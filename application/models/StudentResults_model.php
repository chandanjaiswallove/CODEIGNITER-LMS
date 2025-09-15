<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentResults_model extends CI_Model {

    public function get_count()
    {
        return $this->db->count_all('students'); // apna table name
    }

    public function get_students($limit, $offset)
    {
        return $this->db->limit($limit, $offset)
                        ->get('students')
                        ->result();
    }
}
