<?php 
defined('BASEPATH') or exit('Np direct script access allowed');

class adm extends CI_Model
{


public function delete($Kode_barang){
$this->db->delete('pembelian',['Kode_barang'=>$Kode_barang]);
}

public function creatdat(){

    $data = array(

    'username' => $this->input->post('username'),
    'password' => $this->input->post('password'),
    'status' => $this->input->post('status'),
    'nama' => $this->input->post('nama'),
    'email' => $this->input->post('email'),
    'tgl_lahir' => $this->input->post('tgl_lahir'),
    'alamat' => $this->input->post('alamat')
    
    
    );
    var_dump($data);
    die;
    $this->db->insert('user', $data);
    
}

    // public function getdata($id){
    //     $data =  $this->db->query("SELECT * FROM user WHERE id = '".$id"' ");
    //     return $query;
    // }

// public function getdata($Kode_barang){
//     $query= $this->db->query('SELECT*FROM pembelian WHERE 'Kode_barang' ='. $Kode_barang);
//     return->$query->row();
// }



}