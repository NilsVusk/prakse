<?php
    $gallery_id = $_GET['galleryID'];
    $name = $_POST['name'];
    $mainImage = $_POST['mainImage'];

    if($_GET['galleryID']) {
        var_dump("update");
        $gallery_title = "Edit Gallery";
        $inputQuery = "UPDATE gallery SET `name` = '". $name ."' WHERE galleryID = '". $gallery_id ."'";

        $sqlGallery = "SELECT `name`, `mainImage`, `images` FROM gallery WHERE galleryID='".$gallery_id."'";
        $resultsGallery = $conn->query($sqlGallery);
        $galleries = mysqli_fetch_array($resultsGallery);
    }else {
        var_dump("insert");
        $gallery_title = "Add Gallery";
        $inputQuery = "INSERT INTO gallery (`name`, `mainImage`, `images`) VALUES ('". $name ."', '', '')";
    }
    



    if(isset($_POST['submit-galleryEditForm'])) {

 
        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            header("Location:?gallery");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


?>

<div class="content row">
    <!-- ------------ -->
    <!-- Gallery Edit Info -->
    <!-- ------------ -->

    <div class="col-md-6 px-3 pb-2">
        <form method="post" name="editGallery-form">
            <div class="card row bg-success-subtle">
                <h5 class="card-header bg-success"><?php echo $gallery_title ?></h5>

                       


                    <!-- Main Image -->

                    <div>
                        <div class="col-md-6">
                        <label for="mainImage" class="col-form-label">Main Image</label>
                        </div>

                        <div class="col-md-8 flex-wrap">
                        <input type="file" class="form-control" name="mainImage" id="mainImage" value="<?php echo $galleries['mainImage']; ?>">
                        </div>
                        <div class="p-2">
                            <img style="width: 100px;" src="<?php echo $gallery['mainImage'];?>">
                        </div>
                    </div>

                    <!-- gallery name -->

                    <div>
                        <div class="col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2 ">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Gallery Name" value="<?php echo $galleries['name']; ?>">
                        </div>
                    </div>

                    <!-- Gallery Images -->

                    <div>
                        <div class="col-md-6 ">
                            <label for="images" class="col-form-label">Images</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2">
                            <input type="" id="images" name="images" class="form-control" placeholder="" value="<?php echo $galleries['images']; ?>">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="col-md-12 p-3 text-end">
                        <a class="btn btn-danger" href="?gallery" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary"  name="submit-galleryEditForm">Submit</button>
                    </div>
            </div>
        </form>
    </div>
</div>

<?php
    
?>