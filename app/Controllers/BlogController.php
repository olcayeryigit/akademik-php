<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    // Tüm blogları listeleme
    public function index()
    {
        $blogs = $this->blogModel->getBlogs();
        return view('blog/index', ['blogs' => $blogs]);
    }

    // Blog oluşturma formunu gösterir
    public function create()
    {
        return view('blog/create');
    }

    // Blogu kaydeder
    public function store()
    {
        $title = $this->request->getPost('title');
        $slug = $this->generateSlug($this->request->getPost('slug'), $title);
        $description = $this->request->getPost('description');

        if (empty($title)) {
            return $this->redirectWithError('Başlık alanı boş olamaz!');
        }

        $imagePath = $this->uploadImage($this->request->getFile('image'));

        $this->blogModel->save([
            'title'       => $title,
            'slug'        => $slug,
            'description' => $description,
            'image'       => $imagePath,
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        return $this->redirectWithSuccess('Blog başarıyla eklendi!');
    }

    // Blog güncelleme formunu gösterir
    public function edit($id)
    {
        $blog = $this->blogModel->getBlog($id);
        return view('blog/edit', ['blog' => $blog]);
    }

    // Blogu günceller
    public function update()
    {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $slug = $this->generateSlug($this->request->getPost('slug'), $title);
        $description = $this->request->getPost('description');
        $imagePath = $this->uploadImage($this->request->getFile('image'));

        $updateData = [
            'title'       => $title,
            'slug'        => $slug,
            'description' => $description,
        ];

        if (!empty($imagePath)) {
            $updateData['image'] = $imagePath;
        }

        $this->blogModel->update($id, $updateData);

        return $this->redirectWithSuccess('Blog başarıyla güncellendi!');
    }

    // Blogu siler
    public function delete($id)
    {
        $this->blogModel->deleteBlog($id);
        return $this->redirectWithSuccess('Blog başarıyla silindi!');
    }



    // Blog durumunu günceller
    public function updateStatus($id, $status)
    {
        $this->blogModel->updateStatus($id, $status);
        return $this->redirectWithSuccess('Blog durumu güncellendi!');
    }

    // Yardımcı fonksiyon: Slug oluşturur
    private function generateSlug($slug, $title)
    {
        return mb_url_title(empty($slug) ? $title : $slug, '-', true);
    }

    // Yardımcı fonksiyon: Resmi yükler
    private function uploadImage($image)
    {
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension();
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
            return $imagePath;
        }
        return '';
    }

    // Yardımcı fonksiyon: Başarı mesajı ile yönlendir
    private function redirectWithSuccess($message)
    {
        session()->setFlashdata('success', $message);
        return redirect()->to('/dashboard');
    }

    // Yardımcı fonksiyon: Hata mesajı ile yönlendir
    private function redirectWithError($message)
    {
        session()->setFlashdata('error', $message);
        return redirect()->back()->withInput();
    }
}
