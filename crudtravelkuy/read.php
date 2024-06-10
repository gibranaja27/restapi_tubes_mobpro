<?php
$conn= new mysqli("localhost","root","","travelkuy");
$query= mysqli_query($conn,"SELECT * from destinasi_impian");
$data= mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($data);

?>