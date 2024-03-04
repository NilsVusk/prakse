<?php

    $name = $_POST['name'];
    $content = $_POST['content'];
    $aboutImage = $_FILES['images']['name'];

    
   

    $inputQuery = "UPDATE about SET `name` = '". $name ."', `content` = '". $content ."', `image` = '". json_encode($aboutImage) ."'";
    
    
    if(isset($_POST['submit-aboutEditForm'])) {
        
        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            header("Location:?about");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


?>