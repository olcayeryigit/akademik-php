<?php

namespace App\Controllers;
use App\Models\webform_model;

class FormController extends BaseController {

    public function __construct() {
        // Modeli yükle
        $this->model = new Webform_model();
    }

    public function submit_form() {
        // Form verilerini almak
        $data = array(
            'name' => $this->request->getPost('name'),
            'lastname' => $this->request->getPost('lastname'),
            'phone' => $this->request->post('phone'),
            'message' => $this->request->post('message'),
            'created_at' => date('Y-m-d H:i:s')
        );

        print_r($data); exit();

        // Verileri model aracılığıyla eklemek
        if ($this->Webform_model->insert_form_data($data)) {
            // Başarılı ekleme sonrası bir şeyler yapabilirsiniz
            echo "Form başarıyla gönderildi!";
        } else {
            // Hata durumu
            echo "Bir hata oluştu, lütfen tekrar deneyin.";
        }
    }
}
