<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BlogModel; 
use App\Models\AnnouncementModel; 
use App\Models\AboutModel;
use App\Models\MainContentModel;
use App\Models\ImageSectionModel;
use App\Models\TestimonalsModel;
use App\Models\webform_model;

class PageController extends BaseController
{

  // BlogModel sınıfını yükle
protected $blogModel;
protected $announcementModel;
protected $aboutModel;
protected $mainContentModel;
protected $imageSectionModel;
protected $testimonalsModel;
protected $webformModel;

public function __construct()
{
    // BlogModel sınıfını başlat
    $this->blogModel = new BlogModel();
    $this->announcementModel = new AnnouncementModel();
    $this->aboutModel=new AboutModel();
    $this->mainContentModel=new MainContentModel();
    $this->imageSectionModel=new ImageSectionModel();
    $this->testimonalsModel=new TestimonalsModel();
    $this->webformModel = new Webform_model();



 
}



public function home()
{
    // Blog verisini al
    $blogs = $this->blogModel->findAll();  // $this->blogModel olarak doğru şekilde çağırılmalı
    $publishedBlogs = $this->blogModel->getBlogsByStatus(1);  // Status 1 olanları getir

    // Diğer model verilerini al
    $announcements = $this->announcementModel->findAll();
    $publishedAnnouncements = $this->announcementModel->getAnnouncementsByStatus(1);  // Status 1 olanları getir


    $about = $this->aboutModel->findAll();
    $mainContent = $this->mainContentModel->findAll();
    $imageSection = $this->imageSectionModel->findAll();
    $testimonals = $this->testimonalsModel->findAll();

    // View'a gönder
    return view('home', [
        'blogs' => $blogs,
        'publishedBlogs' => $publishedBlogs,
        'announcements' => $announcements,
        'publishedAnnouncements'=>$publishedAnnouncements,
        'about' => $about,
        'mainContent' => $mainContent,
        'imageSection' => $imageSection,
        'testimonals' => $testimonals
    ]);
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

        if ($user && password_verify($password, $user['password'])) {
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
        $blogs = $blogModel->findAll();
      
    
        // AnnouncementModel'i çağırarak duyuru verilerini alın
        $announcementModel = new AnnouncementModel();
        $announcements = $announcementModel->findAll();
    
        //AboutModeli çağır
        $aboutModel=new AboutModel();
        $about=$aboutModel->getAboutParagraphById(1);


$mainContentModel=new MainContentModel();
$mainContent=$mainContentModel->getMainContentById(1);


$imageSectionModel=new ImageSectionModel();
$imageSection=$imageSectionModel->getImageSectionById(1);

$testimonalsModel=new TestimonalsModel();
// PageController içinde, doğru çağrıyı yapın:
$testimonals = $this->testimonalsModel->findAll();


$webformModel=new Webform_model();
$webforms = $this->webformModel->findAll();


        // View'e $blogs ve $announcements verilerini gönderin
        return view('dashboard', [
            'title' => 'Dashboard',
            'blogs' => $blogs,
            'announcements' => $announcements,
            'about'=>$about,
            'mainContent'=>$mainContent,
            'imageSection'=>$imageSection,
            'testimonals'=>$testimonals,
            'webforms'=>$webforms
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



    public function dashboardAbout(){
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/login');
        }

        $aboutModel=new AboutModel();
        $about=$aboutModel->getAboutParagraphById(1);

        return view('dashboard',['title'=>'Dashboard','about'=>$about]);
    }


public function dashboardMainContent(){
    if(!session()->get('isLoggedIn')){
        return redirect()->to('/login');
    }

    $mainContentModel=new MainContentModel();
    $mainContent=$mainContentModel->getMainContentById(1);

    return view('dashboard',['title'=>'Dashboard','mainContent'=>$mainContent]);
}



public function dashboardImageSection(){
    if(!session()->get('isLoggedIn')){
        return redirect()->to('/login');
    }


    $imageSectionModel=new ImageSectionModel();
    $imageSection=$imageSectionModel->getImageSectionById(1);

    return view('dashboard',['title'=>'Dashboard','imageSection'=>$imageSection]);
}



public function dashboardTestimonals(){
    if(!session()->get('isLoggedIn')){
        return redirect()->to('/login');
    }


    $testimonalsModel=new TestimonalsModel();
// PageController içinde, doğru çağrıyı yapın:
$testimonals = $this->testimonalsModel->getTestimonals();

    return view('dashboard',['title'=>'Dashboard','testimonals'=>$testimonals]);
}


public function dashboardWebform(){
    if(!session()->get('isLoggedIn')){
        return redirect()->to('/login');
    }


    $webformModel=new Webform_model();
// PageController içinde, doğru çağrıyı yapın:
$webforms = $this->webformModel->findAll();

    return view('dashboard',['title'=>'Dashboard','webforms'=>$webforms]);
}






// Blog detay sayfasını gösterir
public function viewBlog($slug)
{
    // Slug parametresini kontrol et
    log_message('debug', 'Slug değeri: ' . $slug);

    // Blog verisini al
    $blog = $this->blogModel->where('slug', $slug)->first();

    if (!$blog) {
        // Blog bulunamazsa, duyuru verisini al
        $announcement = $this->announcementModel->where('slug', $slug)->first();
        // Eğer duyuru da yoksa 404 sayfasına yönlendir
        if (!$announcement) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    } else {
        // Eğer blog varsa, duyuru null olacak
        $announcement = null;
    }

    // Yayınlanmış blogları al
    $publishedBlogs = $this->blogModel->getBlogsByStatus(1);

    // Yayınlanmış duyuruları al
    $publishedAnnouncements = $this->announcementModel->getAnnouncementsByStatus(1);

    // Başlık, blog varsa blog başlığı, yoksa duyuru başlığı
    $title = $blog ? $blog['title'] : ($announcement ? $announcement['title'] : 'Başlık Bulunamadı');

    return view('blog/view', [
        'blog' => $blog,
        'publishedBlogs' => $publishedBlogs,
        'announcement' => $announcement,
        'publishedAnnouncements' => $publishedAnnouncements,
        'title' => $title
    ]);
}


   
}
























