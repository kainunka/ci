<?php

class Admin extends CI_Controller
{
    public function index(){
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/footer_view');
    }

}