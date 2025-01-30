<?php
namespace App\Models;
use CodeIgniter\Model;
class EducationLinksModel extends Model{

protected $table='educationLinks';
protected $primaryKey='id';
protected $allowedFields=['links'];

public function getLinks()
{
    return $this->findAll();
}


    // links'i JSON formatında almak ve PHP dizisine dönüştürmek

public function getEducationLinkById($id){

$data=$this->find($id);
if($data && !empty($data['links'])){
                // JSON verisini PHP dizisine dönüştür

    $data['links']=json_decode($data['links'],true);
}

    return $data;
}

    // links'i PHP dizisini JSON formatında kaydetmek

public function updateLink($id,$data){

            // Diziyi JSON formatına dönüştür
if(!empty($data['links'])){
    $data['links']=json_encode($data['links']);
}else{
    $data['links']=json_encode([]);
}
return $this->update($id,$data);
}





}