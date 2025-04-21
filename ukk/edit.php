<?php 
include 'koneksi.php'; 
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id");
$barang = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Barang</h2>
        <form method="POST">
            <input type="text" class="form-control border-3" name="nama" value="<?= $barang['nama_barang'] ?>" required><br>
            <select name="kategori" class="form-control border-3">
                <?php 
                    $kategori = mysqli_query($conn, "SELECT * FROM kategori");
                    while ($k = mysqli_fetch_array($kategori)){
                        $selected = ($k['id_kategori'] == $barang['id_kategori']) ? 'selected' : '';
                        echo "<option value='$k[id_kategori]' $selected>$k[nama_kategori]</option>";
                    }
                ?>
            </select><br>
            <input type="number" class="form-control border-3" name="stok" value="<?= $barang['jumlah_stok'] ?>" required><br>
            <input type="number" class="form-control border-3" name="harga" value="<?= $barang['harga_barang'] ?>" required><br>
            <input type="date" class="form-control border-3" name="tanggal" value="<?= $barang['tanggal_masuk'] ?>" required><br>

            <button class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
        </form>

        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nama = htmlspecialchars($_POST['nama']);
                $kategori = $_POST['kategori'];
                $stok = $_POST['stok'];
                $harga = $_POST['harga'];
                $tanggal = $_POST['tanggal'];

                mysqli_query($conn, "UPDATE barang SET 
                    nama_barang='$nama', 
                    id_kategori='$kategori', 
                    jumlah_stok='$stok', 
                    harga_barang='$harga', 
                    tanggal_masuk='$tanggal' 
                    WHERE id_barang=$id");

                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Update Successful',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                </script>";
            }
        ?>
    </div>
</body>
</html>