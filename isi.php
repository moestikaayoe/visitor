<?php
    include "boot.php";
?>

<nav class="navbar bg-body-tertiary">
    <form class="container-fluid justify-content-start">
        <button class="btn btn-outline-success me-2" type="button" onclick="location.href='daftaranggota.php'">
        <a href="daftaranggota.php"></a>
        Daftar Anggota</button>
    </form>
</nav>

<nav class="navbar bg-body-tertiary">
    <form class="container-fluid justify-content-start">
        <button class="btn btn-outline-success me-2" type="button" onclick="location.href='daftarpengunjung.php'">
        <a href="daftaranggota.php"></a>
        lihat kehadiran</button>
    </form>
</nav>

<form action="" method="POST">
    <body background="image/latar2.jpg" style="background-size:cover;">
        <div class="text-center mt-7">
            <div class="row">
                <div class="col">
                    <br>
                    <br>
                    <b>
                        <div class="text-center">
                            <p class="ms-4 text fs-1">DAFTAR HADIR</p>
                            <p class="ms-4 text fs-1">PENGUNJUNG PERPUSTAKAAN</p>
                            <p class="ms-4 text fs-1">VICTORY</p>
                    </b>
                </div>
                <div class="col mt-3 text-center"></div>
            </div>
        </div>
        <br>
        <br>
        <div class="container col-3">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama" required>
                <div id="namaHelp" class="form-text">Masukan nama lengkap</div>
            </div>
        </div>

        <div class="container col-3">
            <div class="mb-3">
                <label for="NIS" class="form-label">NIS</label>
                <input type="number" class="form-control" id="NIS" aria-describedby="NISHelp" name="NIS" required>
                <div id="NISHelp" class="form-text">Masukan NIS</div>
            </div>
        </div>
        <br>
        <div class="container col-3">
            <div class="input-group">
                <select class="form-select" id="status" aria-label="Example select with button addon" name="keterangan_anggota" required>
                    <option selected>keterangan_anggota</option>
                    <option value="anggota">anggota</option>
                    <option value="bukan anggota">bukan anggota</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class="d-grid gap-2 col-1 mx-auto">
            <button type="submit" class="btn btn-secondary btn-lg" name="add">Add</button>
        </div>
    </body>
</form>

<?php
include "koneksi.php";
@$nama = $_POST['nama'];
@$NIS = $_POST['NIS'];
@$keterangan_anggota = $_POST['keterangan_anggota'];
if ($nama==""){
    echo "";
} else {
$simpan = $konek->query("INSERT INTO pengunjung (nama, NIS, keterangan_anggota) values ('$nama','$NIS','$keterangan_anggota')");

}

if ($nama) {
    echo '<div class="alert alert-success mt-3" role="alert">Berhasil isi daftar hadir, silahkan cek kehadirannya!</div>';
} else {
    echo '<div class=""</div>';
}

?>






