
<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_contact")

$nama = $_POST[''];
$email = $_POST[''];
$message = $_POST[''];

$nama = "INSERT INTO db_contact VALUES("$nama", "$email", "$message");
mysqli_query($koneksi, $query);

?>