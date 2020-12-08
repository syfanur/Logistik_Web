<?php

$curl = curl_init();
$id = $_POST["id"];

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://justiciable-exposur.000webhostapp.com/api/presensi_update.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('id_presensi' => $id),
));

if ($response = curl_exec($curl)) {
  # credirect ke page index
  header("location:Absen_Pulang.php");    
}
else{
  echo "ERROR, Gagal Memasukkan Data". mysqli_error();
}
?>
