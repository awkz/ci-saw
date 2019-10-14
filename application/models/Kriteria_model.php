<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
    private $_table = "kriteria";

    public $id_kriteria;
    public $kriteria;
    public $kepentingan;
    public $cosh_benefit;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kriteria" => $id])->row();
    }
}
