<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:22
 */
class Home extends CI_Controller
{
    public function index() {
       // echo "Hello World!";
            $this->load->view('layout/header_view');
            $this->load->view('home_view');
            $this->load->view('layout/footer_view');
    }
}