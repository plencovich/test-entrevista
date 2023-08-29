<?php
defined('BASEPATH') OR exit('No direct script Access Allowed');
class ContactMessageModel extends CI_Model
{
    public function store(array $data){
        return $this->db->insert('contact_message',$data);
    }
}