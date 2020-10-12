<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ujian Minggu 7</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-4">	
                <h3>Registrasi Siswa</h3>
                <form class="border rounded p-4" method="post" action="index.php">
                    <label for="registrasiSiswa">Nama Siswa</label>
                    <input type="text" name="nama_siswa" placeholder="Nama Lengkap"><br>
                    <label for="registrasiSiswa">Asal Sekolah</label>
                    <input type="text" name="sekolah" placeholder="Sekolah"><br>
                    <input type="submit" class="btn btn-info" name="submit" value="Submit">
                </form>
            </div> 
            <div class="col-4">
                <h3>Data Tim</h3>
                <form class="border rounded p-4" method="get" action="index.php">
                    <label for="registrasiTim">Nama Tim</label>
                    <input type="text" name="nama_Tim" placeholder="Nama Tim"><br>
                    <input type="submit" class="btn btn-info" name="submit" value="Submit">
                </form>              
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
            
				<h4>hasil dari pengisian data<h4>
            </div>
        </div>
	</div>
<?php
// if (isset($_POST['action']))

if($_POST)
{
    echo 'Nama: ' . $_POST['nama_siswa'];
    echo '<br>';
    echo 'Sekolah: ' . $_POST['sekolah'];
}
?>
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>