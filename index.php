<?php include 'koneksi.php'; ?>

<h2>Form Pengelolaan Data Stok Barang</h2>

<form method="POST" action="aksi.php">
    Kode Barang: <input type="text" name="kode_brg" required><br>
    Nama Barang: <input type="text" name="nama_brg" required><br>
    Satuan: <input type="text" name="satuan" required><br>
    Jumlah Stok: <input type="number" name="jml_stok" required><br><br>

    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="edit" value="Edit">
    <input type="submit" name="delete" value="Delete">
    <input type="submit" name="display" value="Display">
    <input type="reset" value="Reset">
</form>

<hr>

<?php
// Display data
if (isset($_POST['display'])) {
    $result = $conn->query("SELECT * FROM stok");
    echo "<table border='1'><tr><th>Kode</th><th>Nama</th><th>Satuan</th><th>Jumlah</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['kode_brg']}</td>
            <td>{$row['nama_brg']}</td>
            <td>{$row['satuan']}</td>
            <td>{$row['jml_stok']}</td>
        </tr>";
    }
    echo "</table>";
}
?>