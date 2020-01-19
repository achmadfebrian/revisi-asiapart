<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Asiapart Sarana Terus Makmur';
        $this->load->view('templates/header.php', $data);
        $this->load->view('home/index');
        $this->load->view('templates/contentFooter.php');
        $this->load->view('templates/footer.php');
    }
}
