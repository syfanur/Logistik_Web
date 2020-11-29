<?php

$curl = curl_init();
$jenis_transaksi = $_POST["jenis_transaksi"];
$divisi = $_POST["divisi"];
$tanggal = $_POST["tanggal"];
$biaya = $_POST["biaya"];
$keterangan = $_POST["keterangan"];
$token= $_POST["token"];

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://manufaktur-finance.my.id/rest-server/api/transaksi?token=user_api123',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('jenis_transaksi' => $jenis_transaksi,'divisi' => $divisi,'tanggal' => $tanggal,'biaya' => $biaya,'keterangan' => $keterangan,'token' => $token),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
