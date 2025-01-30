<?php
namespace App\Models;
use CodeIgniter\Model;
class TestimonalsModel extends Model{

    protected $table='testimonals';
    protected $primaryKey='id';
    protected $allowedFields=['image','title'];


     public function getTestimonals()
     {
         return $this->findAll();
     }


     public function getTestimonalById($id)
     {
         return $this->find($id);
     }
 
     public function deleteTestimonal($id)
     {
         return $this->delete($id);
     }

}