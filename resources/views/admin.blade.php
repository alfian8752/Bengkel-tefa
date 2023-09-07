<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="navbar">
  <div class="title"><h3>Admin</h3></div>
</div>

  <div class="user">
    <h4>Nama</h4>
    <h4>User Name</h4>
    <h4>Email</h4>
    <h4>Tindakan</h4>

    @foreach ($users as $user)
      <p>{{ $user->name }}</p>
      <p>{{ $user->name }}</p>
      <p>{{ $user->email }}</p>
      <div class="action">
        <button>Hapus</button>
      </div>
    @endforeach
  </div>
  
  <div class="sidebar">
    <ul class="link flex-column justify-content-center">
      <li><a href="#">Produk</a></li>
      <li><a href="#">Produk Terjual</a></li>
      <li><a href="#">User</a></li>
      <li><a href="#">Keluar</a></li>
    </ul>
  </div>
</body>
</html>