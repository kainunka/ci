<?php

class Category_model extends CI_Model
{
    public function insertCategory($name){
        $data = array(
            'name' => $name
        );

        $this->db->insert('categories', $data);
    }

    public function getCategory(){
        return $this->db->get('categories');
    }

    public function getCategoryByID($category_id){
        $this->db->where('category_id', $category_id);
        return $this->db->get('categories');
    }

    public function updateCategoryID($category_id, $name) {
        $data = array(
            'name' => $name
        );
        $this->db->where('category_id', $category_id);
        return $this->db->update('categories', $data);
    }

    public function deleteCategoryByID($category_id) {
        $this->db->where('category_id', $category_id);
        return $this->db->delete('categories');
    }

}