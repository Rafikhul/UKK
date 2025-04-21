<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
            <div class="col-sm-auto bg-secondary sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-secondary align-items-center sticky-top">
                        <a  class="d-block p-3 link-dark text-decoration-none" title="Tambah data" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="tambah.php" class="nav-link py-3 px-2 mb-4" title="Tambah Barang" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-plus-circle-fill me-2 mb-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="kategori.php" class="nav-link py-3 px-2 mb-4" title="Tambah Kategori" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-tags-fill me-2 mb-1" viewBox="0 0 16 16">
                                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="" id="btnexport" class="nav-link py-3 px-2 mb-4" title="Download Excel" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0,0,256,256" class="me-2 mb-1">
                                <g fill="white" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M28.875,0c-0.01953,0.00781 -0.04297,0.01953 -0.0625,0.03125l-28,5.3125c-0.47656,0.08984 -0.82031,0.51172 -0.8125,1v37.3125c-0.00781,0.48828 0.33594,0.91016 0.8125,1l28,5.3125c0.28906,0.05469 0.58984,-0.01953 0.82031,-0.20703c0.22656,-0.1875 0.36328,-0.46484 0.36719,-0.76172v-5h17c1.09375,0 2,-0.90625 2,-2v-34c0,-1.09375 -0.90625,-2 -2,-2h-17v-5c0.00391,-0.28906 -0.12109,-0.5625 -0.33594,-0.75391c-0.21484,-0.19141 -0.50391,-0.28125 -0.78906,-0.24609zM28,2.1875v4.34375c-0.13281,0.27734 -0.13281,0.59766 0,0.875v35.40625c-0.02734,0.13281 -0.02734,0.27344 0,0.40625v4.59375l-26,-4.96875v-35.6875zM30,8h17v34h-17v-5h4v-2h-4v-6h4v-2h-4v-5h4v-2h-4v-5h4v-2h-4zM36,13v2h8v-2zM6.6875,15.6875l5.46875,9.34375l-5.96875,9.34375h5l3.25,-6.03125c0.22656,-0.58203 0.375,-1.02734 0.4375,-1.3125h0.03125c0.12891,0.60938 0.25391,1.02344 0.375,1.25l3.25,6.09375h4.96875l-5.75,-9.4375l5.59375,-9.25h-4.6875l-2.96875,5.53125c-0.28516,0.72266 -0.48828,1.29297 -0.59375,1.65625h-0.03125c-0.16406,-0.60937 -0.35156,-1.15234 -0.5625,-1.59375l-2.6875,-5.59375zM36,20v2h8v-2zM36,27v2h8v-2zM36,35v2h8v-2z"></path></g></g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="col-sm p-3 min-vh-100">
            <div class="container mt-5">

                <h2>Data Inventaris</h2>

                <form method="GET" class="row mt-3 mb-3">
                    <div class="col-md-5">
                        <input type="text" class="form-control border-3 border-primary" name="search" placeholder="Cari Barang...">
                    </div>
                    <div class="col-md-5">
                        <select name="filter_kategori" class="form-control border-3 border-primary">
                            <option value="">~~~ Cari Kategori ~~~</option>
                            <?php 
                            $kategori = mysqli_query($conn, "SELECT * FROM kategori");
                            while ($k = mysqli_fetch_array($kategori)){
                            echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success">Cari</button>
                    </div>
                </form>

                <table class="table table-bordered border border-3">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = "1";
                $where = "";
                if (!empty($_GET['search'])) {
                    $search = $_GET['search'];
                    $where .= "AND nama_barang LIKE '%$search%'";
                }
                if (!empty($_GET['filter_kategori'])) {
                    $filter = $_GET['filter_kategori'];
                    $where .= " AND barang.id_kategori = $filter";
                }

                $limit = 5;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                $total_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM barang"));
                $total_page = ceil($total_data / $limit);

                $query = "SELECT barang.*, kategori.nama_kategori FROM barang 
                            JOIN kategori ON barang.id_kategori = kategori.id_kategori 
                            WHERE 1=1 $where LIMIT $start, $limit";
                
                $data = mysqli_query($conn, $query);
                while ($d = mysqli_fetch_array($data)) {
                    echo "<tr>
                        <td>$no</td>
                        <td>$d[nama_barang]</td>
                        <td>$d[nama_kategori]</td>
                        <td>$d[jumlah_stok]</td>
                        <td>Rp. $d[harga_barang]</td>
                        <td>$d[tanggal_masuk]</td>
                        <td>
                            <a href='edit.php?id=$d[id_barang]' class='btn btn-warning'>Edit</a>
                            <a href='#' class='btn btn-danger' onclick='konfirmasiHapus(".$d['id_barang'].")'>Hapus</a>
                        </td>
                    </tr>";
                    $no++;
                }
                ?>
                </table>
                <nav>
                    <ul class="pagination justify-content-center">
                    <?php
                    if ($page > 1) {
                        echo "<li class='page-item'><a class='page-link' href='index.php?page=".($page-1)."'>Previous</a></li>";
                    }
                    for ($i=1; $i<=$total_page; $i++) {
                        if ($i == $page) {
                            echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
                        }
                    }
                    if ($page < $total_page) {
                        echo "<li class='page-item'><a class='page-link' href='index.php?page=".($page+1)."'>Next</a></li>";
                    }
                    ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div> 

<script>
    document.getElementById("btnexport").addEventListener("click", function (e) {
        e.preventDefault();

        Swal.fire({
            title: "Yakin ingin mengekspor data?",
            text: "Data akan diunduh dalam format Excel/CSV.",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Ya, ekspor!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Mengunduh...",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1000
                });

                setTimeout(() => {
                    window.location.href = "export.php";
                }, 1000);
                }
            });
        });

        function konfirmasiHapus(id) {
    Swal.fire({
        title: 'Yakin ingin menghapus data ini?',
        text: 'Data yang sudah dihapus tidak bisa dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect ke file PHP hapus
            window.location.href = 'hapus.php?id=' + id;
        }
    });
}
</script>

</body>
</html>