<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PresenceModel extends CI_Model
{
  private $table = 'daftar_hadir';
  public $query;

  public function All()
  {
    $query = $this->db->get($this->table);
    return $query->result_array();
  }

  public function get()
  {
    $this->query = $this->db->get($this->table);
    return $this;
  }

  public function where($key, $value)
  {
    $query = $this->db->where($key, $value);
    return $this;
  }

  public function like($key, $value)
  {
    $query = $this->db->like($key, $value);
    return $this;
  }

  public function orderBy($key, $value)
  {
    $query = $this->db->order_by($key, $value);
    return $this;
  }

  public function result()
  {
    return $this->query->result_array();
  }

  public function row()
  {
    return $this->query->row_array();
  }
}
