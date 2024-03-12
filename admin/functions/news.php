<?php
    $news_id = $_GET['news_id'];
    $name = $_POST['name'];
    $main_image = $_FILES['main_image']['name'];
    $context = $_POST['context'];


    if(isset($_GET['deleteID'])) {
           $query = "DELETE FROM news WHERE news_id='".$_GET['deleteID']."'";
 
           if ($conn->query($query) === TRUE) {
            echo "record deleted successfully";
            header("Location:?news");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
            // }
     }

   

    if($_GET['news_id']) {
        // var_dump("update");
        $news_title = "Edit News";
        $inputQuery = "UPDATE news SET `name` = '". $name ."', `main_image` = '". $main_image ."', `context` = '". $context ."' WHERE news_id = '". $news_id ."'";

        $sqlNews = "SELECT `name`, `main_image`, `context` FROM news WHERE news_id='".$news_id."'";
        $resultsNews = $conn->query($sqlNews);
        $news = mysqli_fetch_array($resultsNews);
    }else {
        // var_dump("insert");
        $news_title = "Add News";
        $inputQuery = "INSERT INTO news (`name`, `main_image`, `context`) VALUES ('". $name ."', '".$main_image."', '".$context."')";
    }

    // if($placeholder){

    // }
    

    if(isset($_POST['submit-newsEditForm'])) {
        
        if(!empty($main_image))
        {
          $path = "../images/";
          $path = $path . basename( $_FILES['main_image']['name']);
      
          if(move_uploaded_file($_FILES['main_image']['tmp_name'], $path)) {
            echo "The file ".  basename( $_FILES['main_image']['name']). 
            " has been uploaded";
          } else{
              echo "There was an error uploading the file, please try again!";
          }
        }elseif(empty($main_image)){
            if($_GET['news_id']) {
                $inputQuery = "UPDATE news SET `name` = '". $name ."', `context` = '". $context ."' WHERE news_id = '". $news_id ."'";
            }else {
                $inputQuery = "INSERT INTO news (`name`, `context`) VALUES ('". $name ."', '".$context."')";
            }
        } 

        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            header("Location:?news");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //  var_dump($_POST);die();
        
    }

?>