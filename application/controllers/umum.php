<?php 
defined('BASEPATH') or exit('Np direct script access allowed');
     
     //Inheritance (pewarisan)
class umum extends CI_Controller
{
     //Encapsulation (enkapsulasi)
     public function __construct()
    {
        parent::__construct();
        $this->load->model('adm');
    }

    public function creat()
    {
    $data = array(

        'kode_barang' => $this->input->post('kode_barang'),
        'Tanggal_beli' => $this->input->post('Tanggal_beli'),
        'Nama_Barang' => $this->input->post('Nama_Barang'),
        'Harga' => $this->input->post('Harga'),
        'Nama_pembeli' => $this->input->post('Nama_pembeli'),
        'Email' => $this->input->post('Email'),
        'No_HP' => $this->input->post('No_HP')
        
        
        );
        // var_dump($data);
        // die;
        $this->db->insert('pembelian', $data);
        redirect('umum/tabel');
    }


    
    public function index(){
        $data['title']='Penjualan';
        $this->load->view('templates/adminheader', $data);
        $this->load->view('admin/home');
        $this->load->view('templates/footer');

}
public function form(){
$data['title']='Penjualan';
        $this->load->view('templates/adminheader', $data);
        $this->load->view('admin/info');
        $this->load->view('templates/footer');

}
public function tabel(){
$data['title']='Penjualan';
 $data['pembelian'] = $this->db->get('pembelian')->result_array();
        $this->load->view('templates/adminheader', $data);
        $this->load->view('admin/tabel');
        $this->load->view('templates/footer');

}
public function tabel1(){
$data['title']='Penjualan';
 $data['pembelian'] = $this->db->get('pembelian')->result_array();
        $this->load->view('templates/adminheader', $data);
        $this->load->view('admin/tabel1');
        $this->load->view('templates/footer');
        

}
public function delete($kode_barang){
        $data['title']='Penjualan';
        $this->adm->delete($kode_barang);
        $this->load->view('umum/tabel', $data);
        redirect('umum/tabel');
    }

} 