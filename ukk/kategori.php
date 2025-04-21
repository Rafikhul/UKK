<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Kategori</h2>
        <form method="POST">
            <input type="text" class="form-control border-3 border-secondary mt-4" name="nama_kategori" placeholder="Masukkan Kategori" required><br>
            <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
        </form>

        <?php 
        if(isset($_POST['tambah'])) {
            $nama = $_POST['nama_kategori'];
            mysqli_query($conn, "INSERT INTO kategori (nama_kategori) VALUES ('$nama')");
        }

        if(isset($_GET['hapus'])) {
            $id = $_GET['hapus'];
            mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori=$id");
        }

        $data = mysqli_query($conn, "SELECT * FROM kategori");
        echo "<ul>";
        while ($row = mysqli_fetch_array($data)) {
            echo "<li class='fs-3 mt-2' style='color:dark;'>$row[nama_kategori]
            <a href='#' class='text-danger ms-3' onclick='konfirmasiHapus($row[id_kategori])'>[hapus]</a>
            </li>";
        }
        echo "</ul>"
        ?>
    </div>

    <script>
        function konfirmasiHapus(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data akan hilang secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?hapus=" + id;
            }
        });
}
</script>
</body>
</html>