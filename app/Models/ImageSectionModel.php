<?php
namespace App\Models;
use CodeIgniter\Model;
class ImageSectionModel extends Model{

    protected $table='imageSection';
    protected $id='id';
    protected $allowedFields=['title','image','mobileImage'];

public function getImageSectionById($id){
    return $this->find($id);
}

public function updateImageSectionById($id,$data){
return $this->update($id,$data);
}

}