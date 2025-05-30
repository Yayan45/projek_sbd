<?php
include 'koneksi.php';

$kode   = $_POST['kode_brg'];
$nama   = $_POST['nama_brg'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jml_stok'];

if (isset($_POST['insert'])) {
    $sql = "CALL tambah_barang('$kode', '$nama', '$satuan', $jumlah)";
    $conn->query($sql);
    echo "Data berhasil ditambahkan.";
}

if (isset($_POST['edit'])) {
    $sql = "CALL update_barang('$kode', $jumlah)";
    $conn->query($sql);
    echo "Data berhasil diubah.";
}

if (isset($_POST['delete'])) {
    $sql = "CALL hapus_barang('$kode')";
    $conn->query($sql);
    echo "Data berhasil dihapus.";
}

if (isset($_POST['cancel'])) {
    echo "Data dibatalkan.";
}

echo "<br><a href='index.php'>Kembali</a>";
?>