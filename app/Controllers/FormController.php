<?php
namespace App\Controllers;
use App\Models\Webform_model;

namespace App\Controllers;
use App\Models\Webform_model;

class FormController extends BaseController {

    protected $model;

    public function __construct() {
        $this->model = new Webform_model();
    }

    public function submit_form() {
        // Form verilerini almak
        $data = array(
            'name' => $this->request->getPost('name'),
            'lastname' => $this->request->getPost('lastname'),
            'phone' => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        );

        // Verileri model aracılığıyla eklemek
        if ($this->model->insert_form_data($data)) {  // Modelden gelen başarı
            return $this->response->setJSON(['status' => 'success', 'message' => 'Form başarıyla gönderildi!']);
        } else {  // Modelden gelen hata
            return $this->response->setJSON(['status' => 'error', 'message' => 'Bir hata oluştu, lütfen tekrar deneyin.']);
        }
    }
}
