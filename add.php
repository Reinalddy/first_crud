<?php 
// conect to database

require 'functions.php';

// check submit button alredy click or not

if (isset($_POST["submit"])){
    // check data succes add or not
    if (add($_POST) > 0){
        echo " <script>
                alert('data berhasil di tambahkan!');
                document.location.href = 'index.php';
                </script>
        
        
        ";
    }
    else {
        echo "data gagal di tambahkan";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add waifu</title>
</head>
<body>
    <h1> Tambah data waifu </h1>

    <form action="" method="POST">
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <br>

        <label for="anime"> Anime :</label>
        <input type="text" name="anime" id="anime" required>
        <br>
        <br>

        <label for="gender"> Gender : </label>
        <input type="text" name="gender" id="gender" required>
        <br>
        <br>

        <label for="school"> School : </label>
        <input type="text" name="school" id="school" required>
        <br>
        <br>

        <button type="submit" name="submit"> Tambah Waifu Kamu ! </button>




    </form>
    <br>
    <p> <a href="index.php">back to waifu list</a></p>
</body>
</html>