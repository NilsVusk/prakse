<?php

    $gallery_id = $_GET['galleryID'];
    $name = $_POST['name'];
    $mainImage = $_FILES['mainImage']['name'];
    $images = $_FILES['images']['name'];

    

    if(isset($_GET['delete'])) {
        //Check if there is something in $_GET['id'].
        // if($_GET['galleryID']) {
 
        //    //Prevent SQL injection, just to be safe.
           $query = "DELETE FROM gallery WHERE galleryID='".$_GET['delete']."'";
 
           if ($conn->query($query) === TRUE) {
            echo "record deleted successfully";
            header("Location:?gallery");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
            // }
     }
    

    if($_GET['galleryID']) {
        // var_dump("update");
        $gallery_title = "Edit Gallery";
        $inputQuery = "UPDATE gallery SET `name` = '". $name ."', `mainImage` = '". $mainImage ."', `images` = '". json_encode($images) ."' WHERE galleryID = '". $gallery_id ."'";

        $sqlGallery = "SELECT `name`, `mainImage`, `images` FROM gallery WHERE galleryID='".$gallery_id."'";
        $resultsGallery = $conn->query($sqlGallery);
        $galleries = mysqli_fetch_array($resultsGallery);
    }
    
    else {
        // var_dump("insert");
        $gallery_title = "Add Gallery";
        $inputQuery = "INSERT INTO gallery (`name`, `mainImage`, `images`) VALUES ('". $name ."', '".$mainImage."', '".json_encode($images)."')";
    }

    if(isset($_POST['submit-galleryEditForm'])) {

        if(!empty($_FILES['mainImage'])){
          $path = "../images/";
          $path = $path . basename( $_FILES['mainImage']['name']);
      
          if(move_uploaded_file($_FILES['mainImage']['tmp_name'], $path)) {
            echo "The file ".  basename( $_FILES['mainImage']['name'])." has been uploaded";
          }else{
              echo "There was an error uploading the file, please try again!";
          }
        }

        if(!empty($images)){
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
//  var_dump($_POST);die();
        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            header("Location:?gallery");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
?>