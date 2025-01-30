<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    // Blogları listeleme
    public function index()
    {
        $model = new BlogModel();
        $blogs = $model->getBlogs();
        return view('blog/index', ['blogs' => $blogs]);
    }

    // Blog silme işlemi
    public function delete($id)
    {
        $model = new BlogModel();
        $model->deleteBlog($id);

        session()->setFlashdata('success', 'Blog başarıyla silindi!');
        return redirect()->to('/dashboard');
    }

    // Blog oluşturma formunu gösterir
    public function create()
    {
        return view('blog/create');
    }

    // Blog verilerini kaydeder
    public function store()
    {
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');

        if (empty($title)) {
            session()->setFlashdata('error', 'Başlık alanı boş olamaz!');
            return redirect()->back()->withInput();
        }

        $image = $this->request->getFile('image');
        $imagePath = '';
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imagePath = 'assets/uploads/' . $image->getName();
            $image->move(FCPATH . 'assets/uploads', $image->getName());
        }

        $model = new BlogModel();
        $model->save([
            'title' => $title,
            'description' => $description,
            'image' => $imagePath,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/');
    }

    // Blog güncelleme formunu gösterir
    public function edit($id)
    {
        $model = new BlogModel();
        $blog = $model->getBlog($id);
        return view('blog/edit', ['blog' => $blog]);
    }

    // Blogu güncelleme işlemi
    public function update()
    {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $image = $this->request->getFile('image');

        // Yeni resim varsa mevcut resmin üzerine yazılır
        $imagePath = '';
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imagePath = 'assets/uploads/' . $image->getName();
            $image->move(FCPATH. 'assets/uploads', $image->getName());
        }

        $model = new BlogModel();
        $model->update($id, [
            'title' => $title,
            'description' => $description,
            'image' => $imagePath
        ]);

        return redirect()->to('/dashboard');
    }
}

