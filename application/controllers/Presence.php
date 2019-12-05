<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Presence extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('PresenceModel');
  }

  public function index()
  {
    $data = $this->PresenceModel->orderBy('id', 'desc')->All();
    $this->load->view('components/header', ['title' => 'Daftar hadir']);
    $this->load->view('presence/index', ['data' => $data]);
    $this->load->view('components/footer');
  }
}
