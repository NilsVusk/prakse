<?php
 $gallerySql = "SELECT * FROM gallery";
 $galleryResults = $conn->query($gallerySql);
 $gallery = mysqli_fetch_array($galleryResults);
?>

<div class="content row">
    <!-- ------------ -->
    <!-- Gallery Info -->
    <!-- ------------ -->
    <div class="col-md-12 px-3 pb-2">
    <a class="btn btn-success" href="?gallery_form" role="button">Add New</a>
    </div>
    <div class="col-md-12 px-3 pb-2">
        <form method="post" name="gallery-form">
            <div class="card row bg-success-subtle">
                <h5 class="card-header bg-success">Gallery</h5>

                    <!-- selector -->

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Main Image</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            foreach ($galleryResults as $galleries){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $galleries['galleryID']; ?></th>
                            <td><?php echo $galleries['name']; ?></td>
                            <td><?php echo $galleries['mainImage']; ?></td>
                            <td><a class="btn btn-success" href="?gallery_form&galleryID=<?php echo $galleries['galleryID'];?>" role="button"><i class="fa-solid fa-pencil"></i> Edit</a></td>
                        </tr>
                        <?php
                            }?>
                    </tbody>
                    </table>

                    <!-- Submit -->
                    <!-- <div class="col-md-12 p-3 text-end">
                        
                        <button type="submit" class="btn btn-primary"  name="submit-galleryEditForm">Submit</button>
                    </div> -->
            </div>
        </form>
    </div>
</div>