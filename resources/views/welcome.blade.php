<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="bg-orange-500 w-full h-12">
    <div class="flex justify-between items-center">
      <div class="h-12 p-1">
        <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-10 h-10">
      </div>
      <div>
        <input type="text" name="cari" id="cari" class="p-1 rounded">
      </div>
      <div class="px-2"><i class="fa fa-shopping-cart"></i></div>
      <div class="px-2"><i class="fa fa-bell"></i></div>
      <div class="px-2"><i class="fa fa-bars"></i></div>
    </div>
  </div>
</body>
</html>