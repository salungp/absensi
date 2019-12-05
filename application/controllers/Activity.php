<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('components/header', ['title' => 'Jurnal kegiatan']);
    $this->load->view('activity/index');
    $this->load->view('components/footer');
  }
}
