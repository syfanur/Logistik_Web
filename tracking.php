<?php

//untuk koneksi ke db
$koneksi = mysqli_connect('localhost','id15482213_root','}ntFv9>U0|KS0&VE','id15482213_logistik');

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