<?php
namespace App\Models;
use CodeIgniter\Model;
class EducationLinksModel extends Model{

protected $table='educationLinks';
protected $primaryKey='id';
protected $allowedFields=['links'];




public function getEducationLinkById($id){
    return $this->find($id);
}


public function updateLink($id,$data){
return $this->update($id,$data);
}





}