<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Detail Product';
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/topSideNav.php');
        $this->load->view('detail/index');
        $this->load->view('templates/footer2.php');
    }
}
