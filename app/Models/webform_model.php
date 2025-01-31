<?php
namespace App\Models;
use CodeIgniter\Model;

class Webform_model extends Model {

    protected $table      = 'webforms'; // Tablo ismini belirtin
    protected $primaryKey = 'id'; // Varsayılan id anahtarını kullanabilirsiniz
    protected $allowedFields = ['name', 'lastname', 'phone', 'message', 'created_at']; // İzin verilen alanlar

    public function insert_form_data($data) {
        // Verileri 'webforms' tablosuna ekleme
        return $this->save($data); // save() metodu insert işlemi yapar
    }



}
?>
