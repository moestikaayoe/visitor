<?php
include "koneksi.php"; 
include "boot.php"; 

$tampil = $konek->query("SELECT * FROM anggota"); 

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="#">DAFTAR ANGGOTA</a><b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="isi.php">kembali ke Isi</a>
        <a class="nav-link" href="daftaranggota.php">Daftar Anggota</a>
        <a class="nav-link" href="daftarpengunjung.php">Daftar Pengunjung</a>
        <a class="nav-link" href="rekap.php">Rekap</a>
        <a class="nav-link" href="logout.php">Log out</a>
      </div>
    </div>
  </div>
</nav>
        <br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while ($s = $tampil->fetch_array()){
        @$no++;
        echo "<tr>";
        echo "<td>{$no}</td>";
        echo "<td>{$s['nama_lengkap']}</td>";
        echo "<td>{$s['tempat_lahir']}</td>";
        echo "<td>{$s['tanggal_lahir']}</td>";
        echo "<td>{$s['jenis_kelamin']}</td>";
?>

<td>
<button class='btn btn-danger' onclick="document.location.href='delete2.php?id=<?=$s['no']?>'"><i class='bi bi-trash'></i></button>
<button class='btn btn-success' onclick="document.location.href='edit2.php?id=<?=$s['no']?>'"><i class="bi bi-pencil-square"></i></button>
</td>

        <?php
        echo "</tr>";
        }
        ?>
    </tbody>
</table>
