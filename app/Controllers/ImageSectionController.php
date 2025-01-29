<?php
namespace App\Controllers;
use App\Models\ImageSectionModel;
class ImageSectionController extends BaseController{


    public function index(){
$model=new ImageSectionModel();
$imageSection=$model->getImageSection();
return view('imageSection/index',['imageSection'=>$imageSection]);
    }



    public function edit($id){
        $model=new ImageSectionModel();
        $imageSection=$model->getImageSectionById($id);
        return view('imageSection', ['imageSection' => $imageSection]);


    }



public function update(){

    $id=$this->request->getPost('id');
    $title=$this->request->getPost('title');
    $image=$this->request->getFile('image');
    $mobileImage=$this->request->getFile('mobileImage');



    // image'yi işle
    $imagePath='';
    if($image && $image->isValid()&& !$image->hasMoved()){
        $imagePath='assets/uploads/' . $image->getName();
        $image->move(FCPATH . 'assets/uploads' , $image->getName());
    }


//mobileImageyi işle
$mobileImagePath='';
if($mobileImage && $mobileImage->isValid()&& !$mobileImage->hasMoved()){
    $mobileImagePath='assets/uploads/' . $mobileImage->getName();
    $mobileImage->move(FCPATH . 'assets/uploads' , $mobileImage->getName());
}



    $model=new ImageSectionModel();
    $model->update($id,[
        'title'=>$title,
        'image'=>$imagePath,
        'mobileImage'=>$mobileImagePath
    ]);

return redirect()->to('/dashboard');


}




}