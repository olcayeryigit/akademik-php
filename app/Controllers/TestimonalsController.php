<?php

namespace App\Controllers;

use App\Models\TestimonalsModel;

class TestimonalsController extends BaseController
{

    public function index()
    {
        $model = new TestimonalsModel();
        $testimonals = $model->getTestimonals();
        return view('testimonal/index', ['testimonals' => $testimonals]);
    }

    public function delete($id)
    {
        $model = new TestimonalsModel();
        $model->deleteTestimonal($id);

        session()->setFlashdata('success', 'Blog başarıyla silindi!');
        return redirect()->to('/dashboard');
    }

    // Blog oluşturma formunu gösterir
    public function create()
    {
        return view('testimonal/create');
    }



    // Blog verilerini kaydeder
    public function store()
    {
        $title = $this->request->getPost('title');
    

        if (empty($title)) {
            session()->setFlashdata('error', 'Başlık alanı boş olamaz!');
            return redirect()->back()->withInput();
        }

    
        $image = $this->request->getFile('image');
        $imagePath = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension();
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
        }

        $model = new TestimonalsModel();
        $model->save([
            'title' => $title,
            'image' => $imagePath,
        ]);

        return redirect()->to('/');
    }



}