<?php
namespace App\Models;
use CodeIgniter\Model;
class Webform_model extends Model {

    public function insert_form_data($data) {
        // Verileri 'webforms' tablosuna ekleme
        return $this->db->insert('webforms', $data);
    }
}
