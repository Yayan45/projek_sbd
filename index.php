<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengelolaan Data Stok Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-boxes-stacked me-2"></i>Form Pengelolaan Data Stok Barang</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="aksi.php">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="kode_brg" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_brg" name="kode_brg" placeholder="Masukkan kode barang" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_brg" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_brg" name="nama_brg" placeholder="Masukkan nama barang" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="satuan" class="form-label">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Contoh: pcs, kg" required>
                        </div>
                        <div class="col-md-6">
                            <label for="jml_stok" class="form-label">Jumlah Stok</label>
                            <input type="number" class="form-control" id="jml_stok" name="jml_stok" placeholder="Masukkan jumlah stok" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" name="insert" class="btn btn-success"><i class="fas fa-plus"></i> Insert</button>
                        <button type="submit" name="edit" class="btn btn-warning text-white"><i class="fas fa-edit"></i> Edit</button>
                        <button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        <button type="submit" name="display" class="btn btn-info text-white"><i class="fas fa-table"></i> Display</button>
                        <button type="reset" class="btn btn-secondary"><i class="fas fa-rotate-left"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        include 'koneksi.php';

        if (isset($_POST['display'])) {
            $result = $conn->query("SELECT * FROM stok");
            echo "<div class='card shadow-sm border-0 mt-5'>";
            echo "<div class='card-header bg-dark text-white'><h5 class='mb-0'><i class='fas fa-database me-2'></i>Data Stok Barang</h5></div>";
            echo "<div class='card-body'>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered table-hover'>";
            echo "<thead class='table-light'><tr><th>Kode</th><th>Nama</th><th>Satuan</th><th>Jumlah</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['kode_brg']}</td>
                        <td>{$row['nama_brg']}</td>
                        <td>{$row['satuan']}</td>
                        <td>{$row['jml_stok']}</td>
                    </tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div></div></div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
