<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        $this->load->model('category_model');
    }

    public function index(){
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/footer_view');
    }

    public function category() {
        $categories = $this->category_model->getCategory();
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/category_view');
        $this->load->view('admin/layout/footer_view');
    }

    public function addCategory() {
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/addCategory_view');
        $this->load->view('admin/layout/footer_view');
    }

    public function createCategory() {
        $name = $this->input->post('name');
        $this->category_model->insertCategory($name);
        redirect(base_url('admin/category'));
    }

    public function news() {
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/news_view');
        $this->load->view('admin/layout/footer_view');
    }

    public function comment() {
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/comment_view');
        $this->load->view('admin/layout/footer_view');
    }

    public function user() {
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/user_view');
        $this->load->view('admin/layout/footer_view');
    }


}