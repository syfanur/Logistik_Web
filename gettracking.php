<?php

//untuk koneksi ke db
$koneksi = mysqli_connect('localhost','root','','logistik');

$sql = "SELECT * FROM kirim";
$query = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($query)){

    $item[] = array(
        'id' => $data["id"],
        'nama_barang' => $data["nama_barang"],
        'jumlah_barang' => $data["jumlah_barang"],
        'nama_vendor' => $data["nama_vendor"],
        'tujuan_gedung' => $data["tujuan_gedung"],
        'no_resi' => $data["no_resi"],
        'tanggal_pengiriman' => $data["tanggal_pengiriman"],
        'durasi' => $data["durasi"],
        'pengirim' => $data["pengirim"],
        'status' => $data["status"]
    );

    
}

$response = array(
    'status' => 'success',
    'Data Tracking Barang' => $item
);

echo json_encode($response);

?>