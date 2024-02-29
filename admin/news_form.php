<?php
    $news_id = $_GET['news_id'];
    $name = $_POST['name'];
    $main_image = $_FILES['main_image']['name'];
    $context = $_POST['context'];
    
   

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

        if(!empty($_FILES['main_image']))
        {
          $path = "../images/";
          $path = $path . basename( $_FILES['main_image']['name']);
      
          if(move_uploaded_file($_FILES['main_image']['tmp_name'], $path)) {
            echo "The file ".  basename( $_FILES['main_image']['name']). 
            " has been uploaded";
          } else{
              echo "There was an error uploading the file, please try again!";
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

<div class="content row">
    <!-- ------------ -->
    <!-- News Edit Info -->
    <!-- ------------ -->

    <div class="col-md-8 px-3 pb-2">
        <form method="post" name="editNews-form" enctype="multipart/form-data" >
            <div class="card row bg-info-subtle">
                <h5 class="card-header bg-info"><?php echo $news_title ?></h5>

                       


                    <!-- Main Image -->

                    <div>
                        <div class="col-md-6">
                        <label for="main_image" class="col-form-label">Main Image</label>
                        </div>

                        <div class="col-md-8 flex-wrap">
                                <input type="file" class="form-control" name="main_image" id="main_image" placeholder="<?php echo $news['main_image']; ?>" value="<?php echo $news['main_image']; ?>">
                        </div>

                        <div class="p-2">
                            <img style="width: 100px;" src="../images/<?php echo $news['main_image'];?>">
                        </div>
                    </div>

                    <!-- gallery name -->

                    <div>
                        <div class="col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2 ">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Gallery Name" value="<?php echo $news['name']; ?>">
                        </div>
                    </div>

                    <!-- Gallery Images -->
                    <div>
                        <div class="col-md-6 ">
                            <label for="context" class="col-form-label">Context</label>
                        </div>

<!-- ------- -->
                        <div class="col-md-12 mb-2 p-2">
                        <textarea id="editor" name="context"></textarea>


                            
                        </div>
                    
                    
                    
                    <!-- Submit -->
                    <div class="col-md-12 p-3 text-end">
                        <a class="btn btn-danger" href="?news" role="button">Cancel</a>
                        <button type="submit"class="btn btn-primary"  name="submit-newsEditForm">Submit</button>
                    </div>
            </div>
        </form>
    </div>
</div>
<script>

$(document).ready(function() {
    $('#editor').summernote()({
        tabsize: 2,
        height: 300
    });


  });

const addFileNameToLabel = file => {
    const fileName = file.target.files[0].name
    const customLabel = file.target.nextElementSibling
    customLabel.textContent = fileName
  }
  
  // Aply to each `.custom-file-label`
  document.querySelectorAll('input[type="file"]')
    .forEach(file => file.addEventListener('change', addFileNameToLabel))
</script>

    </script>