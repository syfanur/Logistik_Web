<?php
//untuk koneksi ke db
$koneksi = mysqli_connect('localhost','root','','logistik');

//insert data
function create($data){
    global $koneksi;
    $tanggal_terima = $data["tanggal_terima"];
    $penerima = $data["penerima"];
    $barang = implode(", ",$data["barang"]);
    
    $query = "INSERT INTO penerimaan (id, nama_barang, tanggal_terima, penerima) VALUES 
            ('', '$barang', '$tanggal_terima', '$penerima')";
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

//update data
function update($id){
    global $koneksi;
    $id = $_POST["id"];
    $barang = $_POST["nama_barang"];
    $tanggal_terima = $_POST["tanggal_terima"];
    $penerima = $_POST["penerima"];

    //query update
    $query = "UPDATE penerimaan SET nama_barang='$barang' , tanggal_terima='$tanggal_terima', penerima ='$penerima 'WHERE id='$id' ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
  

}


function delete($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM penerimaan WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}
?>