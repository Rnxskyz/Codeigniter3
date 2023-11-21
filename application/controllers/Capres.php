<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Capres extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Capres_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Calon Presiden";
    $data['calon_presiden'] = $this->Capres_model->get();
    $this->load->view("templates/header" );
    $this->load->view("Mahasiswa/vw_capres", $data );
    $this->load->view("templates/footer");
  }

  public function Tambah(){

    $data['judul'] = "Halaman Tambah Calon Presiden";
    $this->load->view("templates/header" );
    $this->load->view("Form/TambahCapres", $data );
    $this->load->view("templates/footer");
  }

  public function Detail($id){

    $data['judul'] = "Halaman Detail Calon Presiden";
    $data['calon_presiden'] = $this->Capres_model->getById($id);
    $this->load->view("templates/header" );
    $this->load->view("Form/DetailCapres", $data );
    $this->load->view("templates/footer");
  }

  public function hapus($id){

    $this->Capres_model->delete($id);
    redirect('Capres');
  }

  public function upload() {

    $data = [
    'nama_lengkap' => $this->input->post('nama_lengkap'),
    'nik' => $this->input->post('nik'),
    'asal' => $this->input->post('asal'),
    'partai' => $this->input->post('partai'),
    'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
    'umur' => $this->input->post('umur'),

    ];

    $this->Capres_model->insert($data);
    redirect('Capres');
  }

  public function edit($id) {

    $data['judul'] = "Halaman Edit Calon Presiden";
    $data['calon_presiden'] = $this->Capres_model->getById($id);
    $this->load->view("templates/header" );
    $this->load->view("Form/EditCapres", $data );
    $this->load->view("templates/footer");

  }

  public function update() {

    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'nik' => $this->input->post('nik'),
      'asal' => $this->input->post('asal'),
      'partai' => $this->input->post('partai'),
      'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
      'umur' => $this->input->post('umur'),
  
      ];
      $id = $this->input->post('id');
      $this->Capres_model->update(['id' => $id], $data);
      redirect('Capres');
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */