<?php 
require 'function.php';

$plt = $_GET ["nama_pemilik"];

$mobil = read("SELECT * FROM laundry_sepatu WHERE nama_pemilik = '$plt'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        echo mysqli_error($conn);
    }

   
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERPATI CAR WASH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php"> 
        SneakWash
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">NAMA PEMILIK :</label>
                <input type="text" class="form-control" id="nama_pemilik" name ="nama_pemilik" required>
            </div>
            <div class="mb-3">
                <label for="nama_sepatu" class="form-label">NAMA SEPATU :</label>
                <input type="text" class="form-control" id="nama_sepatu" name ="nama_sepatu" required>
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">UKURAN SEPATU :</label>
                <input type="text" class="form-control" id="ukuran" name ="ukuran" required>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">WARNA SEPATU :</label>
                <input type="text" class="form-control" id="warna" name ="warna" required>
            </div>
            <div class="mb-3">
                <label for="jenis_treatment" class="form-label">JENIS TREATMENT :</label>
                <input type="text" class="form-control" id="jenis_treatment" name ="jenis_treatment" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>