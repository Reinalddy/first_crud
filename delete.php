<?php 

// conect to database

require 'functions.php';

$id = $_GET["id"];

if (delete($id) > 0){
    echo "
        <script>
            alert('data berhasil di Hapus!!');
            document.location.href= 'index.php'; 
        </script>;
    
    ";
}
else {
    echo "
        <script>
            alert('data gagal di hapus!');
            document.location.href='index.php';
        </script>;
    
    
    ";
}




?>