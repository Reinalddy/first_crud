<?php 
// conect to database
$conn = mysqli_connect("localhost","root","","praktek");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;

}

function add($data){
    global $conn;
    // take element from form
    $nama = htmlspecialchars( $data["nama"]);
    $anime = htmlspecialchars( $data["anime"]);
    $gender = htmlspecialchars($data["gender"]);
    $school = htmlspecialchars($data["school"]);

    // query insert data
    $query = "INSERT INTO waifu VALUES
    ('','$nama','$anime','$gender','$school')
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}


function delete($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM waifu WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function change($data){
    global $conn;
    // take element from form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $anime = htmlspecialchars($data["anime"]);
    $gender = htmlspecialchars($data["gender"]);
    $school = htmlspecialchars($data["school"]);

    // query insert data
    $query = "UPDATE waifu SET
               nama = '$nama',  
               anime = '$anime',
               gender = '$gender',
               school = '$school'
               WHERE id = $id
               ";

        mysqli_query($conn,$query);
        
        return mysqli_affected_rows($conn);


}


?>