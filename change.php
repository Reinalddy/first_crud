<?php 
// Conect to database

require 'functions.php';

// take data from url

$id = $_GET["id"];

// query data from id 

$waifu = query("SELECT * FROM waifu WHERE id = $id")[0];

// check submit button alredy submited or not
if (isset($_POST["submit"])){
    // check data succesfuly update or not
    if (change($_POST) > 0){
        echo "
            <script>
                alert('Waifu Berhasil Di Ubah');
                document.location.href = 'index.php';
            </script>
        
        ";
    }
    else{
        echo "data gagal di ubah";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Ubah data waifu </h1>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $waifu["id"];?>">

    <label for="nama"> Nama : </label>
    <input type="text" name="nama" id="nama" required value="<?php echo $waifu["nama"]; ?>">
    <br>
    <br>

    <label for="anime"> Anime :</label>
    <input type="text" name="anime" id="anime" required value="<?php echo $waifu["anime"]; ?>">
    <br>
    <br>

    <label for="gender"> Gender : </label>
    <input type="text" name="gender" id="gender" required value="<?php echo $waifu["gender"]; ?>">
    <br>
    <br>

    <label for="school"> School : </label>
    <input type="text" name="school" id="school" required value="<?php echo $waifu["school"]; ?>">
    <br>
    <br>

    <button type="submit" name="submit"> Ubah Waifu Kamu ! </button>

</form>
<br>
    <p> <a href="index.php">back to waifu list</a></p>
    
</body>
</html>