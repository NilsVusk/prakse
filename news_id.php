<?php

$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "prakse";

$conn = new mysqli($servername, $username, $password, $dbname);

$news_id = $_GET['news_id'];

$sql = "SELECT news_id, name,  main_image, context FROM news WHERE news_id='".$news_id."'";
$results = $conn->query($sql);
$name = mysqli_fetch_array($results);



var_dump($news_id['news_id']);

echo "<h1>". $name['name'] ."</h1>"

?>