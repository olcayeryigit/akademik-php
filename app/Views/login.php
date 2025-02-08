<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Yap</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-lg w-96">
    
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Giriş Yap</h2>

    <!-- Hata Mesajı -->
    <?php if (session()->getFlashdata('error')) : ?>
      <div class="mb-4 text-red-700 text-sm text-center bg-red-100 p-3 rounded-lg border border-red-400">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <form action="/login-action" method="POST">
      <!-- E-posta -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">E-posta</label>
        <input type="email" id="email" name="email" required 
          class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300 ease-in-out shadow-sm">
      </div>

      <!-- Şifre -->
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700">Şifre</label>
        <input type="password" id="password" name="password" required 
          class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300 ease-in-out shadow-sm">
      </div>

      <!-- Giriş Butonu -->
      <button type="submit" 
  class="w-full bg-gradient-to-r from-blue-400 to-blue-600 text-white py-3 px-4 rounded-lg 
         hover:from-blue-500 hover:to-blue-700 transition duration-300 ease-in-out 
         shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
  Giriş Yap
</button>

    </form>
  </div>
</body>
</html>
