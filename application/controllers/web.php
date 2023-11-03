<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{
    function _construct(){
        parent:: _construct();
        $this->load->helper('url');
    }
    public function index(){
        $data['judul']="Halaman About";
        $this->load->view('V_header', $data);
        $this->load->view('V_about', $data);
        $this->load->view('V_footer', $data);
    }
}