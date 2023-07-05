<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Input Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Input NIM">
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Input PRODI">
        <label for="floatingInput">PRODI</label>
    </div>
    <div class="form-floating mb-3">
        <select name="txJENISKELAMIN" class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected></option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <label for="floatingSelect">Jenis Kelamin</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="txTGL_LAHIR" class="form-control" id="floatingInput" placeholder="Input Tanggal Lahir">
        <label for="floatingInput">Tanggal Lahir</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Mahasiswa </button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>