<?php

namespace App\Models;
use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table='announcements';
    protected $primaryKey='id';
    protected $allowedFields=['title','slug','description','image','created_at'];


//Duyuruları getir

public function getAnnouncements(){
    return $this->findAll();
}

//Tek bir duyuruyu getir
public function getAnnouncement($id){
return $this->find($id);
}



//Duyuru silme

public function deleteAnnouncement($id){
    return $this->delete($id);
}


//Duyuru Güncelleme

public function updateAnnouncement($id,$data){
    return $this-> update($id,$data);
}

}