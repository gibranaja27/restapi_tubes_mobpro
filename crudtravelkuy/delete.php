<?php
$conn= new mysqli("localhost","root","","travelkuy");

$tempat_destinasi = $_POST['tempat_destinasi'];

$data = mysqli_query($conn, "DELETE FROM destinasi_impian WHERE tempat_destinasi = '$tempat_destinasi'");
if ($data) {
    echo json_encode([
        "pesan" => "sukses"
    ]);
}
else {
    echo json_encode([
        "pesan" => "gagal"
    ]);
}



?>