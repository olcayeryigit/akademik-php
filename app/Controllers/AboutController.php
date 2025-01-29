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

//form
public function edit($id){
    $model=new AboutModel();
    $about=$model->getAboutParagraphById($id);
    return view('about/edit',['about'=>$about]);
}



public function update() {
    // Formdan gelen verileri alıyoruz
    $id = $this->request->getPost('id');
    $mainparagraph = $this->request->getPost('mainparagraph');
    $mission = $this->request->getPost('mission');
    $vision = $this->request->getPost('vision');
    $paragraph2 = $this->request->getPost('paragraph2');
    $paragraph3 = $this->request->getPost('paragraph3');

    // AboutModel üzerinden güncelleme işlemi yapıyoruz
    $model = new AboutModel();
    $model->update($id, [
        'mainparagraph' => $mainparagraph,
        'mission' => $mission,
        'vision' => $vision,
        'paragraph2' => $paragraph2,
        'paragraph3' => $paragraph3,
    ]);

    // İşlem başarılıysa dashboard'a yönlendiriyoruz
    return redirect()->to('/dashboard');
}





}



