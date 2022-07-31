<?php 

// get data from another file
require 'functions.php';

$waifus = query("SELECT * FROM waifu");

// take data from waifu table
$result = mysqli_query($conn,"SELECT * FROM waifu");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List waifu</title>
</head>
<body>
    <h1> Daftar waifu saya </h1>
    <a href="add.php">Tambah waifu</a>

    <br>
    <br>

    <table border="1" cellpadding = "10" celspacing = "0">
        <tr>
            <th> No     </th>
            <th> Action </th>
            <th> Nama   </th>
            <th> Anime  </th>
            <th> Gender </th>
            <th> School </th>
        </tr>
        <?php $n = 1; ?>
        <?php foreach($waifus as $waifu) : ?>
            <tr>
                <td> <?php echo $n; ?> </td>
                <td>
                    <a href="change.php?id=<?php echo $waifu["id"]; ?>"> Ubah</a> |
                    <a href="delete.php?id=<?php echo $waifu["id"]; ?>"
                    onclick="return confirm('Are You Sure Want Delete ?');"> Hapus</a>
                </td>
                <td> <?php echo $waifu["nama"]; ?></td>
                <td> <?php echo $waifu["anime"]; ?></td>
                <td><?php echo $waifu ["gender"]; ?></td>
                <td> <?php echo $waifu ["school"]; ?></td>

            </tr>
            <?php $n++ ?>
            <?php endforeach; ?>
            








    </table>
    



</body>
</html>