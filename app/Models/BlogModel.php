<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'status','description', 'slug', 'image', 'created_at', 'status']; // 'status' ekledik



 // State'i 1 olan blogları getirir
 public function getBlogsByStatus($status)
    {
        return $this->where('status', $status)->findAll();
    }

    // Tek bir blogu getirir
    public function getBlog($id)
    {
        return $this->find($id);
    }

    // Blog silme
    public function deleteBlog($id)
    {
        return $this->delete($id);
    }

    // Blog güncelleme
    public function updateBlog($id, $data)
    {
        return $this->update($id, $data);
    }

 // Blog modelindeki updateStatus fonksiyonu
public function updateStatus($id, $status)
{
    // Status değerini güncelliyoruz
    $data = ['status' => $status];
    
    // ID'ye göre güncelleme yapıyoruz
    return $this->update($id, $data);
}

}
