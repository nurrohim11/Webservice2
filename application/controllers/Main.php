<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $data['mahasiswa'] = json_decode($this->curl->simple_get(base_url().'/mahasiswa'));
		$this->load->view('main',$data);
	}
    
    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'id_jurusan'=>  $this->input->post('jurusan'),
                'alamat'    =>  $this->input->post('alamat')
            );
            $insert =  $this->curl->simple_post(base_url().'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert){
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }
            else{
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('main');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get(base_url().'/jurusan'));
            $this->load->view('create',$data);
        }
    }
    
    // edit data mahasiswa
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'id_jurusan'=>  $this->input->post('jurusan'),
                'alamat'    =>  $this->input->post('alamat')
            );
            $update =  $this->curl->simple_put(base_url().'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('main');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get(base_url().'/jurusan'));
            $params = array('nim'=>  $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get(base_url().'/mahasiswa',$params));
            $this->load->view('edit',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($nim){
        if(empty($nim)){
            redirect('main');
        }else{
            $delete =  $this->curl->simple_delete(base_url().'/mahasiswa', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('main');
        }
    }
}
