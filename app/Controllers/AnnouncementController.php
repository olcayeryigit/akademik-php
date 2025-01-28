<?php

namespace App\Controllers;
use App\Models\AnnouncementModel;
class AnnouncementController extends BaseController{

    //Duyuruları Listeleme
    public function index(){
$model=new AnnouncementModel();
$announcements=$model->getAnnouncements();
return view('announcement/index',['announcements'=>$announcements]);
    }



    // Duyuru silme işlemi
public function delete($id){
    $model=new AnnouncementModel();
    $model->deleteAnnouncement($id);

    session()->setFlashdata('success','Duyuru başarıyla silindi');
    return redirect()->to('/dashboard');
}

    // Duyuru oluşturma formunu gösterir
public function create(){
    return('announcement/create');
}


    // Duyuru verilerini kaydeder
public function store(){
    $title=$this->request->getPost('title');
    $description=$this->request->getPost('description');


    if(empty($title)){
        session()->setFlashdata('error','Başlık alanı boş olamaz!');
        return redirect()->back()->withInput();
    }

    $image=$this->request->getFile('image');
    $imagePath='';
    if($image && $image ->isValid() && !$image->hasMoved()){
        $imagePath='assets/uploads/'.$image->getName();
        $image->move(FCPATH . 'assets/uploads',$image->getName());

    }


    $model=new AnnouncementModel();
    $model->save([
        'title'=>$title,
        'description'=>$description,
        'image'=>$imagePath,
        'created_at'=>date('Y-m-d H:i:s')
    ]);
    return redirect()->to('/');


}



    //Duyuru güncelleme formunu gösterir
public function edit($id){
    $model=new AnnouncementModel();
    $announcement=$model->getAnnouncement($id);
    return view('announcement/edit',['announcement'=>$announcement]);

}

    // Duyuru güncelleme işlemi
    public function update(){
$id=$this->request->getPost('id');
$title=$this->request->getPost('title');
$description=$this->request->getPost('description');
$image=$this->request->getFile('image');
        // Yeni resim varsa mevcut resmin üzerine yazılır
$imagePath='';
if($image && $image->isValid() && !$image->hasMoved()){
    $imagePath='assets/uploads' . $image->getName();
    $image->move(FCPATH . 'assets/uploads' , $image->getName());
}

$model=new AnnouncementModel();
$model->update($id,[
    'title'=>$title,
    'description'=>$description,
    'image'=>$imagePath
]);

return redirect()->to('/dashboard');
    
    }
}