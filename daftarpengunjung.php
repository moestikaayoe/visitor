
<?php
    include "koneksi.php";
    include "boot.php";
    $tampil = $konek->query("SELECT * from pengunjung ");
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="#">DAFTAR PENGUNJUNG</a><b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="isi.php">kembali ke Isi</a>
        <a class="nav-link" href="daftaranggota.php">Daftar Anggota</a>
        <a class="nav-link" href="lihatanggota.php">Lihat Anggota</a>
        <a class="nav-link" href="rekap.php">Rekap</a>
        <a class="nav-link" href="logout.php">Log out</a>
      </div>
    </div>
  </div>
</nav>

    <br>
    <thead>
    <table class="table table-bordered">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIS</th>
        <th scope="col">Keterangan_Anggota</th>
        <th scope="col">Aksi</th>
        
    </tr>
</thead>

<?php
    while ($s = $tampil->fetch_array()){
        @$no++;
        echo "<tr>";
        echo "<td>{$no}</td>";
        echo "<td>{$s['nama']}</td>";
        echo "<td>{$s['NIS']}</td>";
        echo "<td>{$s['keterangan_anggota']}</td>";
?>

<td>
<button class='btn btn-danger' onclick="document.location.href='delete.php?id=<?=$s['no']?>'"><i class='bi bi-trash'></i></button>
<button class='btn btn-success' onclick="document.location.href='edit.php?id=<?=$s['no']?>'"><i class="bi bi-pencil-square"></i></button>
</td>

<?php
        echo "</tr>";
    }
?>

</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <br>