<?php
require 'function.php';
$id = $_POST["id"];
if(update($id) > 0){
    echo "
    <div class='alert alert-success'>
    <strong>Success!</strong> Data successfully has been update.
    </div>
    <script>
        document.location.href = 'LaporanPenerimaan.php';
    </script>";
}else{
    echo "
    <div class='alert alert-danger'>
    <strong>Failed!</strong> Sorry!! Your data failed to update.
    </div>
    <script>
        document.location.href = 'LaporanPenerimaan.php';
    </script>";
}
?>