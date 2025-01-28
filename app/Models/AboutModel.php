<?php

namespace App\Models;
use CodeIgniter\Model;
class AboutModel extends Model
{

    protected $table='about';
    protected $primaryKey='id';
    protected $allowedFields=['mainparagraph','mission','vision', 'paragraph2', 'paragraph3'];

  

    public function getAboutParagraphById($id){
        return $this->find($id);
    }


public function updateAboutParagraphById($id,$data){
return $this->update($id,$data);
}

}