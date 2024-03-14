<?php
$id=$_GET['id'];
include "koneksi.php";
$delete=$konek->query("DELETE FROM anggota where no ='$id'");
?>

<script>
    document.location = 'lihatanggota.php';
</script>