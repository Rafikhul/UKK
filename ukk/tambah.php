<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Barang</h2>
        <form method="post">
            <input type="text" class="form-control border-3" name="nama" placeholder="Nama Barang" required><br>
            <select name="kategori" class="form-control border-3">
            <option selected>Pilih Kategori</option>
            <?php 
                    $kategori = mysqli_query($conn, "SELECT * FROM kategori");
                    while ($k = mysqli_fetch_array($kategori)){
                        echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
                    }
            ?>
            </select><br>
            <input type="number" class="form-control border-3" name="stok" placeholder="Jumlah Stok"><br>
            <input type="number" class="form-control border-3" name="harga" placeholder="Harga Barang"><br>
            <label class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control border-3" name="tanggal"><br>

            <button class="btn btn-success">Tambah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
        </form>

        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nama = htmlspecialchars ($_POST['nama']);
                $kategori = $_POST['kategori'];
                $stok = $_POST['stok'];
                $harga = $_POST['harga'];
                $tanggal = $_POST['tanggal'];

                if ($stok < 0 || $harga < 0) {
                    echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Tidak Boleh Negatif',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>";
                } else {
                    mysqli_query($conn, "INSERT INTO barang (nama_barang, id_kategori, jumlah_stok, harga_barang, tanggal_masuk)
                    VALUES ('$nama', '$kategori', '$stok', '$harga', '$tanggal')");
                    echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Berhasil Ditambahkan',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                </script>";
                }
            }
        ?>
    </div>
</body>
</html>