<?php
include("konfigurasi.php");

$jdpage = "List";
$pg = "mahasiswa/mhslist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
  $act = $_POST["act"];
  switch ($act) {
    case "store":
      $nama = $_POST["txNAMA"];
      $nim = $_POST["txNIM"];
      $prodi = $_POST["txPRODI"];
      $jeniskelamin = $_POST["txJENISKELAMIN"];
      $tgl_lahir = $_POST["txTGL_LAHIR"];
      $idmhs = md5($nim);
      $sql = "INSERT INTO tbmhs(nama, nim, prodi, jeniskelamin, tgl_lahir, idmhs) VALUES('$nama', '$nim', '$prodi','$jeniskelamin', '$tgl_lahir', '$idmhs');";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data mahasiswa berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data mahasiswa gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }

      break;
    case "update":
      $nama = $_POST["txNAMA"];
      $nim = $_POST["txNIM"];
      $jeniskelamin = $_POST["txJENISKELAMIN"];
      $tgl_lahir = $_POST["txTGL_LAHIR"];
      $idmhs = $_POST["idmhs"];
      $sql = "UPDATE tbmhs SET nama='$nama', nim='$nim', jeniskelamin='$jeniskelamin', tgl_lahir='$tgl_lahir' WHERE idmhs='$idmhs';";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data mahasiswa berhasil diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data mahasiswa gagal diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }

      break;
    case "destroy":
      $idmhs = $_POST['idmhs'];
      $sql = "DELETE FROM tbmhs WHERE idmhs='$idmhs';";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data mahasiswa berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data mahasiswa gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }
      break;
  }
}

if (isset($_GET["aksi"])) {
  $aksi = $_GET["aksi"];
  switch ($aksi) {
    case "new":
      $jdpage = "Tambah";
      $pg = "mahasiswa/mhsnew.php";
      break;
    case "edit":
      $jdpage = "Ubah";
      $pg = "mahasiswa/mhsedit.php";
      break;
    case "del":
      $jdpage = "Hapus";
      $pg = "mahasiswa/mhsdel.php";
      break;
    default:
      $jdpage = "List";
      $pg = "mahasiswa/mhslist.php";
  }
}
?>
<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $jdpage ?> - Data Mahasiswa</title>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link href="assets/css/dashboard.rtl.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="dashboard.php">Dashboard | Prayoga</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboard.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="datamahasiswa.php">
                <span data-feather="file" class="align-text-bottom"></span>
                Data Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datamatkul.php">
                <span data-feather="book" class="align-text-bottom"></span>
                Data Matakuliah
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datadosen.php">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Data Dosen
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datauser.php">
                <span data-feather="user" class="align-text-bottom"></span>
                Data User
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Data Mahasiswa</h1>
        </div>
        <?php
        include($pg);
        ?>
      </main>
    </div>
  </div>


  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?= $footer; ?>
</body>

</html>