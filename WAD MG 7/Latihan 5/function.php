<?php
$conn = mysqli_connect("localhost","root","","laundry_sepatu");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $pemilik = $_POST ["nama_pemilik"];
    $merek = $_POST ["nama_sepatu"];
    $ukuran = $_POST ["ukuran"];
    $warna = $_POST ["warna"];
    $treatment = $_POST ["jenis_treatment"];

    $query = "INSERT INTO laundry_sepatu (nama_pemilik, nama_sepatu, ukuran, warna, jenis_treatment) VALUES ('$pemilik','$merek','$ukuran','$warna','$treatment')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function hapus($plt){
    global $conn;
    mysqli_query($conn,"DELETE FROM laundry_sepatu WHERE nama_pemilik = '$plt'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>
