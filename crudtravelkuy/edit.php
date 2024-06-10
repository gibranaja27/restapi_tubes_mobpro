<?php
$conn= new mysqli("localhost","root","","travelkuy");

$id = $_POST['id'];
$tempat_destinasi = $_POST['tempat_destinasi'];
$budget = $_POST['budget'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$catatan_tambahan = $_POST['catatan_tambahan'];

$data = mysqli_query($conn, "UPDATE destinasi_impian set tempat_destinasi = '$tempat_destinasi', budget = '$budget', tanggal_mulai = '$tanggal_mulai', catatan_tambahan = '$catatan_tambahan' WHERE id = $id");
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