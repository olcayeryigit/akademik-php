<?php
namespace App\Controllers;
use App\Models\MainContentModel;
class MainContentController extends BaseController{

public function index(){
$model=new MainContentModel();
$mainContent=$model->getMainContent();
return view('mainContent/index',['mainContent'=>$mainContent]);

}

public function edit($id){
$model=new MainContentModel();
$mainContent=$model->getMainContentById($id);
return view('mainContent/edit',['mainContent'=>$mainContent]);
}

public function update()
{
    $id = $this->request->getPost('id');
    $mainImage = $this->request->getFiles('mainImage'); // Çoklu dosya yükleme
    $image2 = $this->request->getFile('image2'); // Tek bir dosya yükleme

    // Ana resimleri işle
    $mainImagePaths = [];
    if (isset($mainImage['mainImage']) && is_array($mainImage['mainImage'])) {
        foreach ($mainImage['mainImage'] as $image) {
            if ($image->isValid() && !$image->hasMoved()) {
                // Dosyayı belirtilen dizine taşı
                $mainImagePaths[] = 'assets/uploads/' . $image->getName();
                $image->move(FCPATH . 'assets/uploads', $image->getName());
            }
        }
    }

    // image2'yi işle
    $image2Path = '';
    if ($image2 && $image2->isValid() && !$image2->hasMoved()) {
        $image2Path = 'assets/uploads/' . $image2->getName();
        $image2->move(FCPATH . 'assets/uploads', $image2->getName());
    }

    // Güncellenmiş veriyi hazırlayalım
    $data = [
        'mainImage' => json_encode($mainImagePaths), // mainImage dizisini JSON formatına çevir
        'image2' => $image2Path // image2 için yolu ekle
    ];

    // Model'i kullanarak veriyi güncelle
    $model = new MainContentModel();
    $model->updateMainContentById($id, $data);

    // Güncelleme sonrası yönlendir
    return redirect()->to('/dashboard');
}




}