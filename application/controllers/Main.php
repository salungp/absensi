<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('components/header', [
      'title' => 'Absensi - Aplikasi jurnal kegiatan PKL'
    ]);
    $this->load->view('main/index');
    $this->load->view('components/footer');
  }
}
