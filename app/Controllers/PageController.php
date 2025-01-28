<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BlogModel; 
use App\Models\AnnouncementModel; 
use App\Models\AboutModel;

class PageController extends BaseController
{

  // BlogModel sınıfını yükle
protected $blogModel;
protected $announcementModel;
protected $aboutModel;

public function __construct()
{
    // BlogModel sınıfını başlat
    $this->blogModel = new BlogModel();
    $this->announcementModel = new AnnouncementModel();
    $this->aboutModel=new AboutModel();
}



public function home()
{
    // Blog verisini al
    $blogs = $this->blogModel->findAll();
    $announcements = $this->announcementModel->findAll();  // Değişken ismini burada doğru kullanıyoruz
    $about=$this->aboutModel->findAll();

    // View'a gönder
    return view('home', ['blogs' => $blogs, 'announcements' => $announcements,'about'=> $about]);  // Burada da doğru değişken adı kullanılıyor
}






    public function blog()
    {
        return view('blog', ['title' => 'Blog']);
    }

    public function login()
    {
        return view('login', ['title' => 'Login']);
    }

    public function loginAction()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && $user['password'] === $password) {
            session()->set('isLoggedIn', true);
            session()->set('userId', $user['id']);
            session()->set('userEmail', $user['email']);
            return redirect()->to('/dashboard');
        } else {
            session()->setFlashdata('error', 'Hatalı e-posta veya şifre!');
            return redirect()->to('/login');
        }
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    





    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    
        // BlogModel'i çağırarak blog verilerini alın
        $blogModel = new BlogModel();
        $blogs = $blogModel->getBlogs();
    
        // AnnouncementModel'i çağırarak duyuru verilerini alın
        $announcementModel = new AnnouncementModel();
        $announcements = $announcementModel->getAnnouncements();
    
        // View'e $blogs ve $announcements verilerini gönderin
        return view('dashboard', [
            'title' => 'Dashboard',
            'blogs' => $blogs,
            'announcements' => $announcements
        ]);
    }
    



    public function dashboardBlog()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    
        // BlogModel'i çağırarak blog verilerini alın
        $blogModel = new BlogModel();
        $blogs = $blogModel->getBlogs();
    
        // View'e $blogs verisini gönderin
        return view('dashboard', ['title' => 'Dashboard', 'blogs' => $blogs]);
    }
    



    public function dashboardAnnouncement(){

       if(!session()->get('isLoggedIn')){
        return redirect()->to('/login');
       } 

        // DuyuruModel'i çağırarak duyuru verilerini alın
$announcementModel=new AnnouncementModel();
$announcements=$announcementModel->getAnnouncements();
        // View'e $announcements verisini gönderin

        return view('dashboard',['title'=>'Dashboard','announcements'=>$announcements]);

    }

   
}
