<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class DatabaseTest extends Controller
{
    public function index()
    {
        try {
            $db = \Config\Database::connect(); // Veritabanına bağlan
            if ($db->connect()) {
                echo "Veritabanı bağlantısı başarılı!";
            }
        } catch (DatabaseException $e) {
            echo "Veritabanına bağlanılamadı: " . $e->getMessage();
        }
    }
}
