<div class="col-md-8 px-3 pb-2">
    <form method="post" name="editProducts-form" enctype="multipart/form-data">
        <div class="card row">
            <h5 class="card-header bg-secondary"><?php echo $products_title ?></h5>

                <!-- image -->

                <div>
                    <div class="col-md-6">
                    <label for="image" class="col-form-label">Image</label>
                    </div>

                    <div class="col-md-8 flex-wrap">
                        <input type="file" class="form-control" name="image" id="image" accept="image/*" value="">

                    </div>
                    <div class="p-2">
                        <img style="width: 100px;" src="../images/<?php echo $products['image'];?>">
                    </div>
                </div>

                <!-- name -->

                <div>
                    <div class="col-md-6">
                        <label for="name" class="col-form-label">Name</label>
                    </div>
                    <div class="col-md-8 mb-2 p-2 ">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo $products['name']; ?>">
                    </div>
                </div>

                

                <!-- price -->
                <div class="">
                    <div class="col-md-6">
                        <label for="price" class="col-form-label">Price</label>
                    </div>
                    <div class="col-md-8 mb-2 p-2">
                        <input type="number" id="price" name="price" class="form-control" placeholder="0.00" step="0.01" value="<?php echo $products['price']; ?>">
                    </div>
                </div>

                <!-- desc -->

                <div>
                    <div class="col-md-6 ">
                        <label for="desc" class="col-form-label">Description</label>
                    </div>

                    <div class="col-md-12 mb-2 p-2">
                        <textarea id="editor" name="desc" ><?php echo $products['desc']; ?></textarea>
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-md-12 p-3 text-end">
                <a class="btn btn-danger" href="?products" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary"  name="submit-productForm">Submit</button>
                </div>
        </div>
    </form>
</div>
<script>
$(document).ready(function() {
    $('#editor').summernote()({
        tabsize: 2,
        height: 300
    });
});

</script>