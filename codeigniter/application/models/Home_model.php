<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function get_locations()
    {
        $query = $this->db->query("SELECT * FROM locations ORDER BY id");
        return $query->result();
    }
}