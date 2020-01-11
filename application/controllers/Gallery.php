<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Gallery';
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/topSideNav.php');
        $this->load->view('gallery/index');
        $this->load->view('templates/footer2.php');
    }
}
