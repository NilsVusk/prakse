<?php
 $newsSql = "SELECT * FROM news";
 $newsResults = $conn->query($newsSql);
 $news = mysqli_fetch_array($newsResults);
?>

<div class="content row">
    <!-- ------------ -->
    <!-- News Edit Info -->
    <!-- ------------ -->
    <div class="col-md-12 px-3 pb-2">
        <a class="btn btn-info" href="?news_form" role="button">Add New</a>
    </div>
    <div class="col-md-12 px-3 pb-2">
        <form method="post" name="news-form">
            <div class="card row bg-info-subtle">
                <h5 class="card-header bg-info">News</h5>

                    <!-- selector -->

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Main Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            foreach ($newsResults as $news1){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $news1['news_id']; ?></th>
                            <td><?php echo $news1['name']; ?></td>
                            <td><?php echo $news1['main_image']; ?></td>
                            <td><a class="btn btn-success" href="?news_form&news_id=<?php echo $news1['news_id'];?>" role="button"><i class="fa-solid fa-pencil"></i> Edit</a></td>
                            <td><a href="?news&deleteID=<?php echo $news1['news_id'];?>" onClick="return confirm('Are you sure you want to delete this?');" class="btn btn-danger" role="button" ><i class="fa-solid fa-trash"></i> Delete</a></td>
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