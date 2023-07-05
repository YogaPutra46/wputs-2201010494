<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Template · Bootstrap v5.3</title>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
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
              <a class="nav-link active" aria-current="page" href="dashboard.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datamahasiswa.php">
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
          <h2 class="h2">WELCOME </h2>
          <lottie-player src="https://assets9.lottiefiles.com/datafiles/gUENLc1262ccKIO/data.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
          </lottie-player>
        </div>
        <div>
          <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_dyXaL5.json" background="transparent" speed="1" style="width: 1000px; height: 400px ;" loop autoplay>
          </lottie-player>
        </div>
      </main>
    </div>
  </div>


  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>