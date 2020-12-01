<?php

//untuk koneksi ke db
$koneksi = mysqli_connect('localhost','root','','logistik');

$sql = "SELECT * FROM tracking";
$query = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($query)){

    $item[] = array(
        'id' => $data["id"],
        'id_pengiriman' => $data["id_pengiriman"],
        'lokasi_barang' => $data["lokasi_barang"],
        'status' => $data["status"],
        'timestamps' => $data["timestamps"]
    );

    
}

$response = array(
    'status' => 'success',
    'Data Tracking Barang' => $item
);

echo json_encode($response);

?>