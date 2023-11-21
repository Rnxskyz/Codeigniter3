<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mahasiswa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("templates/header", $data  );
    $this->load->view("Mahasiswa/vw_mahasiswa", $data );
    $this->load->view("templates/footer", $data );
  }

  public function Tambah(){

    $data['judul'] = "Halaman Tambah Mahasiswa";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("templates/header", $data  );
    $this->load->view("Form/TambahDataMahasiswa", $data );
    $this->load->view("templates/footer", $data );
  }

  public function Detail($id){

    $data['judul'] = "Halaman Detail Mahasiswa";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("templates/header", $data  );
    $this->load->view("Form/DetailMhs", $data );
    $this->load->view("templates/footer", $data );
  }

  public function hapus($id){

    $this->Mahasiswa_model->delete($id);
    redirect('Mahasiswa');
  }

  public function upload() {

    $data = [
    'nama' => $this->input->post('nama'),
    'nim' => $this->input->post('nim'),
    'email' => $this->input->post('email'),
    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    'prodi' => $this->input->post('prodi'),
    'alamat' => $this->input->post('alamat'),
    'asal_sekolah' => $this->input->post('asal_sekolah'),
    ];

    $this->Mahasiswa_model->insert($data);
    redirect('Mahasiswa');
  }

  public function edit($id) {

    $data['judul'] = "Halaman Edit Mahasiswa";
    $data['prodi'] = $this->Prodi_model->get();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("templates/header" );
    $this->load->view("Form/EditMhs", $data );
    $this->load->view("templates/footer");

  }

  public function update() {

    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
      ];
      $id = $this->input->post('id');
      $this->Mahasiswa_model->update(['id' => $id], $data);
      redirect('Mahasiswa');
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */