<?php
$id=$_GET['id'];
include "koneksi.php";
$delete=$konek->query("DELETE FROM pengunjung where no ='$id'");
?>

<script>
    document.location = 'daftarpengunjung.php';
</script>