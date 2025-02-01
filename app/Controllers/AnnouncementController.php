<?php

namespace App\Controllers;
use App\Models\AnnouncementModel;

class AnnouncementController extends BaseController {

    protected $announcementModel;

    public function __construct() {
        $this->announcementModel = new AnnouncementModel();
    }

    // Duyuruları Listeleme
    public function index() {
        $announcements = $this->announcementModel->getAnnouncements();
        return view('announcement/index', ['announcements' => $announcements]);
    }

    // Duyuru Silme
    public function delete($id) {
        $this->announcementModel->deleteAnnouncement($id);
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
        $slug = $this->generateSlug($this->request->getPost('slug'), $title);
        $description = $this->request->getPost('description');

        if (empty($title)) {
            session()->setFlashdata('error', 'Başlık alanı boş olamaz!');
            return redirect()->back()->withInput();
        }

        $imagePath = $this->uploadImage($this->request->getFile('image'));

        $this->announcementModel->save([
            'title'       => $title,
            'slug'        => $slug,
            'description' => $description,
            'image'       => $imagePath,
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/dashboard');
    }

    // Duyuru Güncelleme Formu
    public function edit($id) {
        $announcement = $this->announcementModel->getAnnouncement($id);
        return view('announcement/edit', ['announcement' => $announcement]);
    }

    // Duyuru Güncelleme
    public function update() {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $slug = $this->generateSlug($this->request->getPost('slug'), $title);
        $description = $this->request->getPost('description');
        $imagePath = $this->uploadImage($this->request->getFile('image'));

        $data = [
            'title'       => $title,
            'slug'        => $slug,
            'description' => $description
        ];

        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        $this->announcementModel->update($id, $data);

        return redirect()->to('/dashboard');
    }

    // Duyuru durumunu güncelleme
    public function updateStatus($id, $status) {
        $this->announcementModel->updateStatus($id, $status);
        return redirect()->to('/dashboard');
    }

 

    // Yardımcı metot: Slug oluşturma
    private function generateSlug($slug, $title) {
        return empty($slug) ? mb_url_title($title, '-', true) : mb_url_title($slug, '-', true);
    }

    // Yardımcı metot: Resim yükleme
    private function uploadImage($image) {
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension();
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
            return $imagePath;
        }
        return null;
    }
}
