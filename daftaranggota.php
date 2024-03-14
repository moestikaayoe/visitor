<?php
include "boot.php";
?>

<nav class="navbar bg-body-tertiary">
    <form class="container-fluid justify-content-start">
        <button class="btn btn-outline-success me-2" type="button" onclick="location.href='lihatanggota.php'">
        <a href="lihatanggota.php.php"></a>
        lihat keanggotaan</button>
    </form>
</nav>

<div class="container col-5">
<body background="image/latar2.jpg" style="background-size:cover;">
    <div class="text-center mt-5">
        <h1 class="display-4">Daftar Anggota</h1>
    </div>

    <form action="" method="POST">
        <div class="container col-8">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama lengkap</label>
                <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama_lengkap" required>
            </div>
        </div>

        <div class="container col-8">
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" aria-describedby="tempatLahirHelp" name="tempat_lahir" required>
            </div>
        </div>
        <div class="container col-8">
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" aria-describedby="tanggalLahirHelp" name="tanggal_lahir" required>
            </div>
        </div>

        <div class="container col-8">
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" aria-label="Example select with button addon" name="jenis_kelamin" required>
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-primary btn-lg" name="add">Daftar</button>
        </div>
<br>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="reset" class="btn btn-primary btn-lg" name="add">Reset</button>
        </div>
    </form>
</div>

<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    if (!empty($nama_lengkap)) {
        $simpan = $konek->query("INSERT INTO anggota (nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin) VALUES ('$nama_lengkap','$tempat_lahir','$tanggal_lahir','$jenis_kelamin')");

        if ($simpan) {
            echo '<div class="alert alert-success mt-3" role="alert">Data anggota berhasil ditambahkan, silahkan cek keanggotaan!</div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">Terjadi kesalahan saat menambahkan data anggota!</div>';
        }
    }
}
?>
           


