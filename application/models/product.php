<?php


class Product extends CI_Model
{
    public function addProduct($data)
    {
        $query = $this->db->insert("produk", $data);
        return $query;
    }
    public function getProductByWhere($where){
        $query = $this->db->get_where('produk',$where);
        return $query->result_array();
    }
    public function getProductAll(){

    }
}
