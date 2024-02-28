<?php
$gallery_id = $_GET['galleryID'];
$test = $_GET['test'];
    
// $sql = "SELECT galleryID, name, mainImage FROM gallery";
$sql = "SELECT name, images FROM gallery WHERE galleryID='".$gallery_id."'";
$results = $conn->query($sql);
$name = mysqli_fetch_array($results);

$jsonString = str_replace("'", '"', $name['images']);

// Decode the JSON string into a PHP array
$phpArray = json_decode($jsonString, true);

echo "<h1>". $name['name'] ."</h1>"
?>

<div class="content row">
    <div class="col-md-12">
        <div class="row">
            <div class="d-flex flex-wrap text-center mx-2">
                <?php
                    foreach ($phpArray as $image){
                ?>
                        <div class="col-md-4 p-3">
                            <img class="w-100 p-3 m-3" src="images/<?php echo $image; ?>">
                        </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</div>