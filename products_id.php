<?php
$products_id = $_GET['product_id'];

$sql = "SELECT * FROM products WHERE product_id='".$products_id."'";
$productResults = $conn->query($sql);
$product = mysqli_fetch_array($productResults);

// echo "<h1>". $product['name'] ."</h1>";



?>

<div class="content row">
    <div class="col-md-2 my-2"><a class="btn btn-outline-danger" href="?products" role="button">< Back</a></div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center my-2">
                <img style="width: 300px;" src="images/<?php echo $product['image'];?>">
            </div>
            <div class="col-md-6 mt-2">
                <p class="fs-1 fw-bold"><?php echo $product['name'];?></p>
                <p class="fs-3"><?php echo $product['price'];?></p>
                <p><?php echo $product['desc'];?></p>
            </div>
        </div>
    </div>
</div>