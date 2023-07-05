<?php
$idmhs = $_GET["p1"];
$sql = "SELECT tu.nama, tu.nim, tu.prodi, tu.jeniskelamin, tu.tgl_lahir FROM tbmhs tu WHERE tu.idmhs='$idmhs';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Hapus Data Mahasiswa <?= $h["nama"] ?></h3>
    <form method="POST" action="datamahasiswa.php">
        <input type="hidden" name="act" value="destroy">
        <input type="hidden" name="idmhs" value="<?= $idmhs ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Masukan Nama Lengkap Anda" value="<?= $h["nama"] ?>">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Masukan NIM Anda" value="<?= $h["nim"] ?>">
            <label for="floatingInput">NIM</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Masukan Prodi Anda" value="<?= $h["prodi"] ?>">
            <label for="floatingInput">Prodi</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txJENISKELAMIN" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option <?php if ($h["jeniskelamin"] == "") echo "selected"; ?>></option>
                <option value="Laki-Laki" <?php if ($h["jeniskelamin"] == "Laki-Laki") echo "selected"; ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($h["jeniskelamin"] == "Perempuan") echo "selected"; ?>>Perempuan</option>
            </select>
            <label for="floatingSelect">Jenis Kelamin</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="txTGL_LAHIR" class="form-control" id="floatingInput" placeholder="Masukan Tanggal Lahir Anda" value="<?= $h["tgl_lahir"] ?>">
            <label for="floatingInput">Tanggal Lahir</label>
        </div>

        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-danger"> Hapus Data Mahasiswa </button>
        <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datamahasiswa.php';</script>";
}
?>