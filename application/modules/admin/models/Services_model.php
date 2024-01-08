<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Services_model extends CI_Model
{
    public $table = 'services';
    public $id = 'services.id';
    public function __construct()
    {
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}