<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Product';
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/topSideNav.php');
        $this->load->view('product/index');
        $this->load->view('templates/footer2.php');
    }
}
