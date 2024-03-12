<?php
 $productSql = "SELECT * FROM products";
 $productResults = $conn->query($productSql);
 $product = mysqli_fetch_array($productResults);
?>

<div class="content row">
    <!-- ------------ -->
    <!-- Product Info -->
    <!-- ------------ -->
    <div class="col-md-12 px-3 pb-2">
        <a class="btn btn-secondary" href="?products_form" role="button">Add New</a>
    </div>
    <div class="col-md-12 px-3 pb-2">
        <form method="post" name="products-form">
            <div class="card row bg-secondary-subtle">
                <h5 class="card-header bg-secondary text-white">News</h5>

                    <!-- selector -->

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            foreach ($productResults as $products){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $products['product_id']; ?></th>
                            <td><?php echo $products['name']; ?></td>
                            <td><?php echo $products['image']; ?></td>
                            <td><?php echo $products['price']; ?></td>
                            <td><?php echo $products['desc']; ?></td>
                            <td><a class="btn btn-success" href="?products_form&product_id=<?php echo $products['product_id'];?>" role="button"><i class="fa-solid fa-pencil"></i> Edit</a></td>
                            <td><a href="?products&deleteID=<?php echo $products['product_id'];?>" onClick="return confirm('Are you sure you want to delete this?');" class="btn btn-danger" role="button" ><i class="fa-solid fa-trash"></i> Delete</a></td>
                            <!-- <td><button class="btn btn-danger delete-news" role="button"  value="<?php echo $products['product_id'];?>"><i class="fa-solid fa-trash"></i> Delete</button></td> -->
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