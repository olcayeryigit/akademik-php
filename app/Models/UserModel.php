<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Tablo adı
    protected $primaryKey = 'id'; // Birincil anahtar
    
    protected $allowedFields = ['email', 'password', 'created_at']; // İzin verilen alanlar

    // Tabloya otomatik zaman damgaları eklenmesini sağlar
    protected $useTimestamps = true; 
    protected $createdField = 'created_at';
    protected $updatedField = false; // updated_at kullanılmayacak
}
