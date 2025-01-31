<?php

namespace App\Models;
use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table='announcements';
    protected $primaryKey='id';
    protected $allowedFields=['title','status','slug','description','image','created_at'];


//Duyuruları getir

public function getAnnouncements(){
    return $this->findAll();
}


 // State'i 1 olan duyuruları getirir
 public function getAnnouncementsByStatus($status)
    {
        return $this->where('status', $status)->findAll();
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

 // Announcement modelindeki updateStatus fonksiyonu
 public function updateStatus($id, $status)
 {
     // Status değerini güncelliyoruz
     $data = ['status' => $status];
     
     // ID'ye göre güncelleme yapıyoruz
     return $this->update($id, $data);
 }


}