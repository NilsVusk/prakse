<?php
$news_id = $_GET['news_id'];

$sql = "SELECT news_id, name,  main_image, context FROM news WHERE news_id='".$news_id."'";
$results = $conn->query($sql);
$name = mysqli_fetch_array($results);

echo "<h1>". $name['name'] ."</h1>"



?>

<div class="content row">
    <div class="col-md-12">
        <div class="row">
            <div class="d-flex flex-wrap text-center mx-2">
            <?php 
                foreach ($results as $result){
            ?>
                <div class="col-md-6 p-3">
                        <img class="rounded border border-secondary" src="<?php echo $result['main_image']; ?>">
                        <div class="p-2 w-100">
                            
                            <p><?php echo $result['name']; ?></p>
                        </div>
                </div> 
                <div class="col-md-6 p-3">
                    <p><?php echo $result['context']; ?></p> 
                </div> 
            <?php
                }
            ?>

            </div>
        </div>
    </div>
</div>