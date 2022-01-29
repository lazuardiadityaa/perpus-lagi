<video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
  <source src="w.mp4" type="video/mp4">
</video>
<?php
session_start();
if (isset($_SESSION['login'])) {
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<style>
#background-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}
</style>
<body>

<div class="container">
<div class="mt-4 p-5 bg-warning text-white rounded">
  <h1>My Perpustakaan</h1>
  <p>ACUNGCUNGCUNG</p>
</div>
    <div>
        <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Navbar</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page=petugas">Petugas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page=anggota">Anggota</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <form class="d-flex">
                <button class="btn btn-outline-primary" type="submit"><a href="?page=logout">Logout</a></button>
              </form>
            </div>
          </div>
        </nav>
    </div>
    </div>
    </div>
        <?php
        if(isset($_GET['page'])){
            if ($_GET['page'] == 'home'){
                include('home.php');
            }elseif ($_GET['page'] == 'anggota') {
                include('anggota.php');
            }elseif ($_GET['page'] == 'anggota-delete') {
                include('anggota-delete.php');
            }elseif ($_GET['page'] == 'anggota-insert') {
                include('anggota-insert.php');    
            }elseif ($_GET['page'] == 'anggota-edit') {
              include('anggota-edit.php');    
            }elseif ($_GET['page'] == 'anggota-edit-proses') {
              include('anggota-edit-proses.php');
            }elseif ($_GET['page'] == 'logout') {
              include('logout.php');   
            }elseif ($_GET['page'] == 'petugas') {
              include('petugas.php');
          }elseif ($_GET['page'] == 'petugas-delete') {
              include('petugas-delete.php');
          }elseif ($_GET['page'] == 'petugas-insert') {
              include('petugas-insert.php');    
          }elseif ($_GET['page'] == 'petugas-edit') {
            include('petugas-edit.php');    
          }elseif ($_GET['page'] == 'petugas-edit-proses') {
            include('petugas-edit-proses.php');
         }else{
           echo "Selamat datang";
         }
        ?>
          
<script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else
{
 ?>
  <script>
  window.location.href="http://localhost/17_mywebsite_12RPL2/admin.php?page=anggota";
  </script>
  <?php
}
}
?>
