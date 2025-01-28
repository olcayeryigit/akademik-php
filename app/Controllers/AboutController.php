<?php
namespace App\Controllers;
use App\Models\AboutModel;
class AboutController extends BaseController{

    //İçerikleri Listeleme
public function index(){
    $model=new AboutModel();
    $about=$model->getAboutParagraphs();
    return view('about/index',['about'=>$about]);
}


public function edit($id){
    $model=new AboutModel();
    $about=$model->getAboutParagraphById($id);
    return view('about/edit',['about'=>$about]);
}




public function update(){
    $id=$this->request->getPost('id');
    $mainparagraph=$this->request->getPost('mainparagraph');
    $mission=$this->request->getPost('mission');
    $vision=$this->request->getPost('vision');
    $paragraph2=$this->request->getPost('paragraph2');
    $paragraph2=$this->request->getPost('paragraph3');

$model=new AboutModel();
$model->update($id,
[
    'mainparagraph'=>$mainparagraph,
    'mission'=>$mission,
    'vision'=>$vision,
    'paragraph1'=>$paragraph1,
    'paragraph2'=>$paragraph2
]);

return redirect()->to('/dashboard');

}




}



