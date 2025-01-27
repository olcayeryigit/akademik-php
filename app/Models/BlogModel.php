<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image', 'created_at'];

    // Blogları getirir
    public function getBlogs()
    {
        return $this->findAll();
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
}
