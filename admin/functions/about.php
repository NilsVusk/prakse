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

        if(!empty($aboutImage)){
            foreach(restructureFilesArray($_FILES[ 'images' ]) as $image){
                $path = "../images/";
                $path = $path . basename( $image['name']);
            
                if(move_uploaded_file($image['tmp_name'], $path)) {
                echo "The file ".  basename( $image['name'])." has been uploaded";
                }else{
                    echo "There was an error uploading the file, please try again!";
                }
            }
        }
    }

?>