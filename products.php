<?php
$sql = "SELECT product_id, name, image, price FROM products";
$products = $conn->query($sql);
$product = mysqli_fetch_array($products);


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
            <div class="d-flex flex-wrap text-center">
            <?php 
                foreach ($products as $product){
            ?>
                <div class="col-md-2 mx-2">
                    <a href="?products_id&product_id=<?php echo $product["product_id"]; ?>" class="link-secondary link-underline link-underline-opacity-0 ">
                        <img style="width: 150px; height: 150px;" class="rounded border border-secondary p-1" src="images/<?php echo $product['image']; ?>">
                        
                            <p class="text-wrap"><?php echo $product['name'];?></p>
                        
                    </a>
                    <p>Cena: €<?php echo $product['price'];?> </p>
                </div> 
                    
            <?php
                }
            ?>

            </div>
        </div>
    </div>
</div>