<?php
if(isset($_POST['submit-webform'])) {



    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $inputQuery = "UPDATE config SET logo = '". $logo ."', adress = '". $adress ."', email = '". $email ."', phone ='". $phone . "'";
    var_dump($inputQuery);
    if ($conn->query($inputQuery) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}elseif(isset($_POST['submit-adminform'])) {


    
    $username = $_POST['username'];
    $email = $_POST['email'];

    $user_id = 0;

    $inputQuery = "UPDATE user SET username = '". $username ."', email = '". $email ."'";

    // var_dump($inputQuery);

    

    if ($conn->query($inputQuery) === TRUE) {
        echo "record inserted successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$userSql = "SELECT * FROM user";
$adminResults = $conn->query($userSql);
$admin = mysqli_fetch_array($adminResults);

$sql = "SELECT * FROM config";
$results = $conn->query($sql);
$config = mysqli_fetch_array($results);

?>