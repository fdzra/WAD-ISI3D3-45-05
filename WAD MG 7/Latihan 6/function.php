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

function ubah($data){
    global $conn;
    $pemilik = $_POST ["nama_pemilik"];
    $merek = $_POST ["nama_sepatu"];
    $ukuran = $_POST ["ukuran"];
    $warna = $_POST ["warna"];
    $treatment = $_POST ["jenis_treatment"];

    

    $query = "UPDATE laundry_sepatu SET
                
                nama_sepatu = '$merek',
                ukuran = '$ukuran',
                warna = '$warna',
                warna = '$warna',
                jenis_treatment = '$treatment'
            WHERE nama_pemilik = '$pemilik'
            ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    return var_dump($data);
    
}

?>