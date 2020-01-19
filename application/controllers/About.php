<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'About';
        $this->load->view('templates/header.php', $data);
        $this->load->view('about/index');
        $this->load->view('templates/contentFooter.php');
        $this->load->view('templates/footer3.php');
    }
}
