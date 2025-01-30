<?php
// 'links' anahtarındaki veriyi al ve virgülle ayır
$links = explode(",", $educationLinks[0]['links']);

// Her bir linki alt alta yazdır
foreach ($links as $link) {
    // Linki '/' karakterine göre ayır
    $parts = explode("/", $link);

    // Başlık ve URL'yi yazdır
    $title = $parts[0]; // Başlık kısmı
    $url = isset($parts[1]) ? $parts[1] : ''; // URL kısmı (eğer varsa)
    
    echo "Başlık: " . $title . " - URL: " . $url . "<br>";
}
?>
