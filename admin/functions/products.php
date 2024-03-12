<?php
    $products_id = $_GET['product_id'];
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];


    if(isset($_GET['deleteID'])) {
        $query = "DELETE FROM products WHERE product_id='".$_GET['deleteID']."'";

        if ($conn->query($query) === TRUE) {
         echo "record deleted successfully";
         header("Location:?products");
         
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
         // }
  }

    if($_GET['product_id']) {
        // var_dump("update");
        $products_title = "Edit Products";
        $inputQuery = "UPDATE products SET `image` = '". $image ."', `name` = '". $name ."', `desc` = '". $desc ."', `price` = '". $price ."' WHERE product_id = '". $products_id ."'";

        $sqlProducts = "SELECT `image`,`name`, `desc`, `price` FROM products WHERE product_id='".$products_id."'";
        $resultsProducts = $conn->query($sqlProducts);
        $products = mysqli_fetch_array($resultsProducts);



    }else {
        $products_title = "Add Products";
        $inputQuery = "INSERT INTO products (`image`,`name`, `desc`, `price`) VALUES ('".$image."','". $name ."', '".$desc."', '".$price."')";
    }

    if(isset($_POST['submit-productForm'])) {
        
        
        if(!empty($image))
        {
            
          $path = "../images/";
          $path = $path . basename($_FILES['image']['name']);
      
          if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            echo "The file ".  basename( $_FILES['image']['name']). 
            " has been uploaded";
          } else{
              echo "There was an error uploading the file, please try again!";
          }
        }elseif(empty($image)){
            if($_GET['product_id']) {
                $inputQuery = "UPDATE products SET `name` = '". $name ."', `desc` = '". $desc ."', `price` = '". $price ."' WHERE product_id = '". $products_id ."'";
            }else {
                $inputQuery = "INSERT INTO products (`name`, `desc`, `price`) VALUES ('". $name ."', '".$desc."', '".$price."')";
            }
        }

        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            header("Location:?products");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //  var_dump($_POST);die();
        
    }
?>