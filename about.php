<?php

$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "prakse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
$sql = "SELECT name, content, image FROM about";
$results = $conn->query($sql);
$name = mysqli_fetch_array($results);

$jsonString = $name['image'];

// Decode the JSON string into a PHP array
$phpArray = json_decode($jsonString, true);

echo "<h1>". $name['name'] ."</h1>"
?>

<div class="content row">
    <div class="col-md-6">
        <div class="row">
            
            <div class="d-flex flex-wrap">
                <?php
                    foreach ($results as $result){
                        echo $result['content'];
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                            foreach ($phpArray as $image){
                        ?>
                        
                        <div class="carousel-item active">
                        <img src="<?php echo $image; ?>" class="d-block w-100" alt="image1">
                        </div>
                        
                        <?php
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