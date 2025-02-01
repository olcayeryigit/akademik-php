<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Yap</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100  ">
<div class="w-full container mx-auto flex justify-center py-12">
  <div class="bg-white p-8 rounded-lg shadow-md w-96">
    <?php print_r(session()->getFlashData('error')) ?>
    <h2 class="text-2xl font-semibold text-center mb-6">Giriş Yap</h2>

    <form action="/login-action" method="POST">
      <!-- E-posta -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">E-posta</label>
        <input type="email" id="email" name="email" required class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>

      <!-- Şifre -->
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700">Şifre</label>
        <input type="password" id="password" name="password" required class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>

      <!-- Giriş Butonu -->
      <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Giriş Yap</button>
    </form>
  </div>
</div>
</body>
</html>
