<?php

namespace App\Controllers;
use App\Models\AnnouncementModel;

class AnnouncementController extends BaseController {

 // BlogModel sınıfını başlatmak için özelliği tanımlıyoruz
 protected $announcementModel;

 public function __construct()
 {
     // BlogModel'i başlatıyoruz
     $this->announcementModel = new AnnouncementModel();
 }




    // Duyuruları Listeleme
    public function index() {
        $model = new AnnouncementModel();
        $announcements = $model->getAnnouncements();
        return view('announcement/index', ['announcements' => $announcements]);
    }

    // Duyuru Silme
    public function delete($id) {
        $model = new AnnouncementModel();
        $model->deleteAnnouncement($id);

        session()->setFlashdata('success', 'Duyuru başarıyla silindi');
        return redirect()->to('/dashboard');
    }

    // Duyuru Oluşturma Formu
    public function create() {
        return view('announcement/create');
    }

    // Duyuru Kaydetme
    public function store() {
        $title = $this->request->getPost('title');
        $slug = $this->request->getPost('slug');
        $description = $this->request->getPost('description');

        // Eğer slug boşsa, başlıktan slug oluştur
        if (empty($slug)) {
            $slug = mb_url_title($title, '-', true);
        }

        if (empty($title)) {
            session()->setFlashdata('error', 'Başlık alanı boş olamaz!');
            return redirect()->back()->withInput();
        }

        $image = $this->request->getFile('image');
        $imagePath = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension(); // Dosyanın uzantısını al
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
        }

        $model = new AnnouncementModel();
        $model->save([
            'title'       => $title,
            'slug'        => mb_url_title($slug, '-', true),
            'description' => $description,
            'image'       => $imagePath,
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/dashboard');
    }

    // Duyuru Güncelleme Formu
    public function edit($id) {
        $model = new AnnouncementModel();
        $announcement = $model->getAnnouncement($id);
        return view('announcement/edit', ['announcement' => $announcement]);
    }

    // Duyuru Güncelleme
    public function update() {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $slug = $this->request->getPost('slug');
        $description = $this->request->getPost('description');
        $image = $this->request->getFile('image');

        // Eğer slug boşsa, başlıktan slug oluştur
        if (empty($slug)) {
            $slug = mb_url_title($title, '-', true);
        } else {
            // Kullanıcı tarafından girilen slug da güvenli hale getiriliyor
            $slug = mb_url_title($slug, '-', true);
        }

        $imagePath = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension(); // Dosyanın uzantısını al
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
        }

        $model = new AnnouncementModel();
        $model->update($id, [
            'title'       => $title,
            'slug'        => $slug,
            'description' => $description,
            'image'       => $imagePath
        ]);

        return redirect()->to('/dashboard');
    }


// Duyuru durumunu güncelleme işlemi
 
 public function updateStatus($id, $status)
{
    // Duyuru durumunu güncelle
    $isUpdated = $this->announcementModel->updateStatus($id, $status);  // Model üzerinden çağırıyoruz


    return redirect()->to('/dashboard');
}






}
