<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("templates/header", $data  );
    $this->load->view("Mahasiswa/vw_prodi", $data );
    $this->load->view("templates/footer", $data ); 
  }
  public function Tambah(){

    $data['judul'] = "Halaman Tambah Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("templates/header", $data );
    $this->load->view("Form/TambahProdi", $data );
    $this->load->view("templates/footer", $data );
  }

  public function Detail($id){

    $data['judul'] = "Halaman Detail Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view("templates/header", $data );
    $this->load->view("Form/DetailProdi", $data );
    $this->load->view("templates/footer", $data );
  }

  public function Hapus($id){

    $this->Prodi_model->delete($id);
    redirect('Prodi');
  }

  public function upload() {

    $data = [
    'prodi' => $this->input->post('prodi'),
    'ruangan' => $this->input->post('ruangan'),
    'email' => $this->input->post('email'),
    'akreditasi' => $this->input->post('akreditasi'),
    'jurusan' => $this->input->post('jurusan'),
    'nama_kaprodi' => $this->input->post('nama_kaprodi'),
    'tahun' => $this->input->post('tahun'),
    'lulusan' => $this->input->post('lulusan'),
    ];

    $this->Prodi_model->insert($data);
    redirect('Prodi');
  }

  public function Edit($id) {

    $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view("templates/header" );
    $this->load->view("Form/EditProdi", $data );
    $this->load->view("templates/footer");

  }

  public function update() {

    $data = [
    'prodi' => $this->input->post('prodi'),
    'ruangan' => $this->input->post('ruangan'),
    'email' => $this->input->post('email'),
    'akreditasi' => $this->input->post('akreditasi'),
    'jurusan' => $this->input->post('jurusan'),
    'nama_kaprodi' => $this->input->post('nama_kaprodi'),
    'tahun' => $this->input->post('tahun'),
    'lulusan' => $this->input->post('lulusan'),
    ];
      $id = $this->input->post('id');
      $this->Prodi_model->update(['id' => $id], $data);
      redirect('Prodi');
  }
}




/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */