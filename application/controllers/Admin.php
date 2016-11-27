<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index(){
        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/footer_view');
    }

    public function category() {
        $data = array(
            'categories' => $this->category_model->getCategory()
        );

        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/category_view', $data);
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

    public function editCategory($category_id) {
        $category = $this->category_model->getCategoryByID($category_id);
        $data = array(
            'categories' => $category->row()
        );

        $this->load->view('admin/layout/header_view');
        $this->load->view('admin/layout/sidebar_view');
        $this->load->view('admin/editCategory_view', $data);
        $this->load->view('admin/layout/footer_view');
    }

    public function updateCategory($category_id) {
        $name = $this->input->post('name');
        $this->category_model->updateCategoryID($category_id, $name);
        redirect(base_url('admin/category'));
    }

    public function deleteCategory($category_id) {
        $this->category_model->deleteCategoryByID($category_id);
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