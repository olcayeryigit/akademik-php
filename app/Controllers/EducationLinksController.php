<?php
namespace App\Controllers;
use App\Models\EducationLinksModel;
class EducationLinksController extends BaseController{

public function index(){
$model=new EducationLinksModel();
$links=$model->getLinks();// Bu fonksiyonu modelde zaten tanımladınız
// View'e links verisini gönder
return view('education_links',['links'=>$links]);
}
public function update()
{
    $id = $this->request->getPost('id');
    $links = $this->request->getPost('links');  // links bir dizi olacak

    // Burada $links'i JSON formatına dönüştürerek güncelleme işlemi yapıyoruz
    $jsonLinks = json_encode($links);

    // Modeli çağırarak güncellemeyi yap
    $model = new EducationLinksModel();
    $model->update($id, [
        'links' => $jsonLinks  // links PHP dizisi olarak geçiyor
    ]);

    // Güncelleme işlemi tamamlandığında kullanıcıyı yönlendirelim
    return redirect()->to('/dashboard');
}


}