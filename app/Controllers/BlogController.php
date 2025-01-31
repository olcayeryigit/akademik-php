<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{

 // BlogModel sınıfını başlatmak için özelliği tanımlıyoruz
 protected $blogModel;

 public function __construct()
 {
     // BlogModel'i başlatıyoruz
     $this->blogModel = new BlogModel();
 }


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
        $slug = $this->request->getPost('slug');
        $description = $this->request->getPost('description');

        if (empty($title)) {
            session()->setFlashdata('error', 'Başlık alanı boş olamaz!');
            return redirect()->back()->withInput();
        }

        // Eğer slug boşsa, başlıktan slug oluştur
        if (empty($slug)) {
            $slug = mb_url_title($title, '-', true);
        } else {
            $slug = mb_url_title($slug, '-', true);
        }

        $image = $this->request->getFile('image');
        $imagePath = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension();
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
        }

        $model = new BlogModel();
        $model->save([
            'title' => $title,
            'slug' => $slug,
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
        $slug = $this->request->getPost('slug');
        $description = $this->request->getPost('description');
        $image = $this->request->getFile('image');

        // Eğer slug boşsa, başlıktan slug oluştur
        if (empty($slug)) {
            $slug = mb_url_title($title, '-', true);
        } else {
            $slug = mb_url_title($slug, '-', true);
        }

        $imagePath = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $ext = $image->getExtension();
            $safeFileName = mb_url_title(pathinfo($image->getClientName(), PATHINFO_FILENAME), '-', true) . '.' . $ext;
            $imagePath = 'assets/uploads/' . $safeFileName;
            $image->move(FCPATH . 'assets/uploads', $safeFileName);
        }

        $model = new BlogModel();
        $model->update($id, [
            'title' => $title,
            'slug' => $slug,
            'description' => $description,
            'image' => $imagePath
        ]);

        return redirect()->to('/dashboard');
    }






  // Blog detay sayfasını gösterir
  public function viewBlog($slug)
  {
      $blogsModel = new BlogModel(); // Blog modelini çağır
  
      $blog = $blogsModel->where('slug', $slug)->first();
  
      if (!$blog) {
          return redirect()->to('/404'); // Eğer blog bulunamazsa 404 sayfasına yönlendir
      }
  
      // MainLayout için title parametresi gönder
      return view('blog/view', [
          'blog' => $blog,
          'title' => $blog['title'] // Title'ı ilet
      ]);
  }
  
// Blog durumunu güncelleme işlemi
 // Blog durumu güncelleme
 public function updateStatus($id, $status)
{
    // Blog durumunu güncelle
    $isUpdated = $this->blogModel->updateStatus($id, $status);  // Model üzerinden çağırıyoruz


    return redirect()->to('/dashboard');
}


}
