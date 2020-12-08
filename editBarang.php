<?php
include('koneksi.php');
$id = $_GET['id'];
$tanggal_terima = $_GET["tanggal"];
$penerima = $_GET["penerima"];
$barang = $_GET["barang"];
$jumlah = $_GET["jumlah"];
$vendor = $_GET["vendor"];
//query update
$query = "UPDATE penerimaan SET nama_barang='$barang' , jumlah_barang='$jumlah' , nama_vendor='$vendor', 
tanggal_terima='$tanggal_terima', penerima='$penerima'  WHERE id='$id' ";
if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:LaporanPenerimaan.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>