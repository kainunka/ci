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
}