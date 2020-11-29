<?php
//untuk koneksi ke db
$koneksi = mysqli_connect('localhost','root','','logistik');

//insert data
function create($data){
    global $koneksi;
    $tanggal_terima = $data["tanggal_terima"];
    $penerima = $data["penerima"];
    
    $query = "INSERT INTO penerimaan (id, tanggal_terima, penerima) VALUES 
            ('', '$tanggal_terima', '$penerima')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
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

?>