<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_barang.xls");

include 'koneksi.php';

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Kategori</th><th>Stok</th><th>Harga</th><th>Tanggal Masuk</th></tr>";

$no = 1;
$data = mysqli_query($conn, "SELECT barang.*, kategori.nama_kategori FROM barang JOIN kategori ON barang.id_kategori = kategori.id_kategori");
while ($d = mysqli_fetch_array($data)) {
    echo "<tr>
        <td>$no</td>
        <td>$d[nama_barang]</td>
        <td>$d[nama_kategori]</td>
        <td>$d[jumlah_stok]</td>
        <td>$d[harga_barang]</td>
        <td>$d[tanggal_masuk]</td>
    </tr>";
    $no++;
}

echo "</table>";

echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
echo "<script>";
echo "swal('Export Success', 'Data has been exported successfully!', 'success');";
echo "</script>";
?>