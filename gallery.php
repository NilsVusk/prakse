<?php
$sql = "SELECT galleryID, name, mainImage FROM gallery";
$results = $conn->query($sql);
$gallery = mysqli_fetch_array($results);


// foreach ($results as $result){
//     echo $result['galleryID'] . " ";
//     echo $result['name'] . " ";
//     echo $result['mainImage'] . " ";
// }

?>

<div class="content row">
    <div class="col-md-12">
        <div class="row">
            <h1><?php echo $gallery['name']; ?></h1>
            <div class="d-flex flex-wrap text-center mx-2">
            <?php 
                foreach ($results as $result){
            ?>
                <div class="col-md-4 p-3">
                    <a href="?gallery_id&galleryID=<?php echo $result["galleryID"]; ?>">
                        <img class="rounded border border-secondary w-100 p-3 m-3" src="<?php echo $result['mainImage']; ?>">
                        <div class="p-2 w-100">
                            
                            <p><?php echo $result['name']; ?></p>
                        </div>
                    </a>
                </div> 
                    
            <?php
                }
            ?>

            </div>
        </div>
    </div>
</div>