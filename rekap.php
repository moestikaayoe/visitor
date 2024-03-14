<div class="mb-3 mt-3 ms-3">
    <b><a href="isi.php" class="btn btn-online-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i></b></a>
</div>
<button class="btn" onclick="printDiv('div1')"><i class="bi-printer-fill fs-60"></i></button>
<div id="div1">
<?php
include "koneksi.php";
include "boot.php";

$tampil = $konek->query("SELECT * FROM pengunjung");
?>

<hr>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIS</th>
        <th scope="col">Keterangan_anggota</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 0;
    while ($s = $tampil->fetch_array()) {
        $no++;
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$s[nama]</td>";
        echo "<td>$s[NIS]</td>";
        echo "<td>$s[keterangan_anggota]</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>


    function printDiv(el) {
        var printContents = document.getElementById(el).innerHTML;
        var originalContents = document.body.innerHTML;

        var newWindow = window.open('', '_blank');
        newWindow.document.open();
        newWindow.document.write('<html><head><title>cetak rekap perhari</title></head><body>' + printContents + '</body></html>');
        newWindow.document.close();

        // Tunggu sebentar sebelum mencetak
        setTimeout(function() {
            newWindow.print();
            newWindow.close();
        }, 100);
    }

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    function printDiv(el) {
        var printContents = document.getElementById(el).innerHTML;
        var originalContents = document.body.innerHTML;

        var newWindow = window.open('', '_blank');
        newWindow.document.open();
        newWindow.document.write('<html><head><title>cetak rekap perhari</title></head><body>' + printContents + '</body></html>');
        newWindow.document.close();

        // Tunggu sebentar sebelum mencetak
        setTimeout(function() {
            newWindow.print();
            newWindow.close();
        }, 100);
    }
</script>




