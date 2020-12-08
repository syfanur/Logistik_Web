<?php
//untuk koneksi ke db
$koneksi = mysqli_connect('localhost','root','','logistik');


    $barang = $_POST["nama"];
    $jumlah = $_POST["jumlah"];
    $vendor = $_POST["vendor"];
    $gudang = $_POST["tujuan"];
    $resi = $_POST["resi"];
    $tanggal = $_POST["tanggal"];
    $durasi = $_POST["durasi"];
    $pengirim = $_POST["pengirim"];
    $status = $_POST["status"];

    $query = "INSERT INTO kirim (id, nama_barang, jumlah_barang, nama_vendor, tujuan_gedung, no_resi, tanggal_pengiriman,
    durasi, pengirim, status) VALUES 
            ('', '$barang', '$jumlah', '$vendor', '$gudang', '$resi', '$tanggal', 
            '$durasi', '$pengirim', '$status')";
    if (mysqli_query($koneksi, $query)) {
        # credirect ke page index
        header("location:TrackingBarang.php");    
    }
    else{
        echo "ERROR, data gagal dikirim". mysqli_error();
    }

//select data
function read($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $datas = [];
    while($data = mysqli_fetch_assoc($result)){
        $datas[] = $data;
    }
    return $datas;
}


function delete($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM penerimaan WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}
?>