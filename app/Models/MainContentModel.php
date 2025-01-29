<?php
namespace App\Models;
use CodeIgniter\Model;
class MainContentModel extends Model{

    protected $table='mainContent';
    protected $primaryKey='id';
    protected $allowedFields=['mainImage','image2'];


public function getMainContentById($id){
        // Veriyi alırken, mainImage'yi JSON'dan diziye dönüştür

$data=$this->find($id);
if(isset($data['mainImage'])){
    $data['mainImage']=json_decode($data['mainImage'],true);// JSON'dan PHP dizisine dönüştür
}

return $data;
}



// Güncelleme işlemi

public function updateMainContentById($id,$data){
    if (isset($data['mainImage']) && is_array($data['mainImage'])) {
        $data['mainImage'] = json_encode($data['mainImage']); // JSON formatına çevir
    }

    return $this->update($id,$data);
    }


}