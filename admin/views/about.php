<?php
 $aboutSql = "SELECT * FROM about";
 $aboutResults = $conn->query($aboutSql);
 $about = mysqli_fetch_array($aboutResults);

 // Decode the JSON string into a PHP array
 $phpArray = json_decode($about['image'], true);


?>
<div class="content row">
    <!-- ------------ -->
    <!-- Website Info -->
    <!-- ------------ -->

    <div class="col-md-8 px-3 pb-2">
        <form method="post" name="editAbout-form" enctype="multipart/form-data">
            <div class="card row">
            <h5 class="card-header bg-warning">About us</h5>


                <div>
                    <div class="col-md-6">
                        <label for="name" class="col-form-label">Name</label>
                    </div>
                    <div class="col-md-8 mb-2 p-2 ">
                        <input type="text" id="name" name="name" class="form-control" placeholder="About us Name" value="<?php echo $about['name']; ?>">
                    </div>
                </div>

                <!-- text -->

                <div>
                    <div class="col-md-6 ">
                        <label for="context" class="col-form-label">Content</label>
                    </div>

                    <div class="col-md-12 mb-2 p-2">
                    <textarea id="editor" name="content" ><?php echo $about['content']; ?></textarea>
                    </div>   
                </div>

                <!-- images -->

                <div>
                    <div class="col-md-6 ">
                        <label for="images" class="col-form-label">Images</label>
                    </div>
                    <div class="col-md-8 mb-2 p-2">
                        <div class="input-row" id="input-row">
                            <?php 
                            if (!$about['image']){
                                ?>
                                <div class="input-row template" id="input-row">
                                <input type="file" class="form-control images" name="images[]" id="images">
                                
                                <a class="delete-image btn btn-danger"></a>

                                </div>
                                
                                
                                <?php
                            }else{ 
                                $count = 0;

                                foreach(json_decode($about['image'], true) as $aboutImage){
                                    

                                    if ($count == 0){?>
                                        <div class="input-row template" id="input-row">

                                            <input type="file" class="form-control images" name="images[]" id="images<?php echo $count; ?>">
                                            
                                            <a class="delete-image btn btn-danger">-</a>
                                        </div>
                                        

                            <?php
                                    }
                                    $count++;
                                    
                                }
                                } 
                                ?>
                        </div>
                    </div>
                    <div class="col-md-8 mb-2">
                        <a class="more-images btn btn-primary">+</a>
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-md-12 p-3 text-end">
                    <button type="submit" class="btn btn-primary"  name="submit-aboutEditForm">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#editor').summernote()({
            tabsize: 2,
            height: 300
        });
    });

    const addFileNameToLabel = file => {
        const fileName = file.target.files[0].name
        const customLabel = file.target.nextElementSibling
        customLabel.textContent = fileName
    }
    
    // Aply to each `.custom-file-label`
    document.querySelectorAll('input[type="file"]')
        .forEach(file => file.addEventListener('change', addFileNameToLabel))

</script>