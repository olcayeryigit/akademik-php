<?php
namespace App\Controller;
use App\Models\EducationLinksModel;
class EducationLinksController extends BaseControl{

public function index(){
$model=new EducationLinksModel();
$links=$model->getLinks();
}

public function update(){
    $id=$this->request->getPost($id);
    $links=$this->request->getPost($links);


    $model=new EducationLinksModel();
    $model->update($id,[
        'links'=>$links
    ]);

    return redirect()->to('/dashboard');
}


}