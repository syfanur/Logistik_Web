<?php

$curl = curl_init();
$idbahanbaku = $_POST["idbahanbaku"];
$tanggal = $_POST["tanggal"];
$jumlah = $_POST["jumlah"];
$ruang = $_POST["ruang"];
$transaksi = $_POST["transaksi"];


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://warehouse13.000webhostapp.com/API_postbarangmasuk.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('tanggal' => $tanggal,'jumlah' => $jumlah,'transaksi' => $transaksi,'ruang' => $ruang, 'idbahanbaku' => $idbahanbaku),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
