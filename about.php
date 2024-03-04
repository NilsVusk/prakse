<?php
$sql = "SELECT name, content, image FROM about";
$results = $conn->query($sql);
$about = mysqli_fetch_array($results);

$jsonString = $about['image'];

// Decode the JSON string into a PHP array
$phpArray = json_decode($jsonString, true);

echo "<h1>". $about['name'] ."</h1>"
?>

<div class="content row">
    <div class="col-md-6">
        <div class="row">
            
            <div class="d-flex flex-wrap">
                <?php
                    echo $about['content'];
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                            $count = 0;
                            foreach ($phpArray as $image){
                        ?>
                        
                        <div class="carousel-item active">
                        <img src="images/<?php echo $image; ?>" class="d-block w-100" alt="image<?php echo $count ?>">
                        </div>
                        
                        <?php
                            $count++;
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>