<?php

$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "prakse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// foreach ($results as $result){
    //     echo $result['galleryID'] . " ";
    //     echo $result['name'] . " ";
//     echo $result['mainImage'] . " ";
// }

// foreach ($results as $result){
    //     echo $result['name'] . " ";
    // }
    
$gallery_id = $_GET['galleryID'];
$test = $_GET['test'];
    
// $sql = "SELECT galleryID, name, mainImage FROM gallery";
$sql = "SELECT name FROM gallery WHERE galleryID='".$gallery_id."'";
$results = $conn->query($sql);
$name= mysqli_fetch_array($results);

// var_dump($name); 

// var_dump($test);
echo "<h1>". $name['name'] ."</h1>"



?>