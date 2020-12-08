<?php
include('koneksi.php');
$id = $_GET['id'];
$barang = $_GET["barang"];
$jumlah = $_GET["jumlah"];
$vendor = $_GET["vendor"];
$gudang = $_GET["gudang"];
$resi = $_GET["resi"];
$tanggal = $_GET["tanggal"];
$durasi = $_GET["durasi"];
$pengirim = $_GET["pengirim"];
$status = $_GET["status"];
//query update
$query = "UPDATE kirim SET nama_barang='$barang' , jumlah_barang='$jumlah' , nama_vendor='$vendor', 
tujuan_gedung='$gudang' , no_resi='$resi' , tanggal_pengiriman='$tanggal' , durasi='$durasi', 
pengirim='$pengirim' , status='$status'  WHERE id='$id' ";
if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:TrackingBarang.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>