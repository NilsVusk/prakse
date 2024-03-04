<div class="content row">
    <!-- ------------ -->
    <!-- News Edit Info -->
    <!-- ------------ -->

    <div class="col-md-8 px-3 pb-2">
        <form method="post" name="editNews-form" enctype="multipart/form-data" >
            <div class="card row bg-info-subtle">
                <h5 class="card-header bg-info"><?php echo $news_title ?></h5>

                       


                    <!-- Main Image -->

                    <div>
                        <div class="col-md-6">
                        <label for="main_image" class="col-form-label">Main Image</label>
                        </div>

                        <div class="col-md-8 flex-wrap">
                                <input type="file" class="form-control" name="main_image" id="main_image">
                            <!-- <div class="input-group custom-file-button">
                                <label class="input-group-text" for="main_image" role="button">Browse...</label>
                                <label for="main_image" class="form-control" id="review-image-label" role="button"></label>
                                <input type="file" class="d-none" id="main_image" name="main_image">
                            </div> -->
                        </div>

                        <div class="p-2">
                            <img style="width: 100px;" src="../images/<?php echo $news['main_image'];?>">
                        </div>
                    </div>

                    <!-- gallery name -->

                    <div>
                        <div class="col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-md-8 mb-2 p-2 ">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Gallery Name" value="<?php echo $news['name']; ?>">
                        </div>
                    </div>

                    <!-- Gallery Images -->
                    <div>
                        <div class="col-md-6 ">
                            <label for="context" class="col-form-label">Context</label>
                        </div>

<!-- ------- -->
                        <div class="col-md-12 mb-2 p-2">
                        <textarea id="editor" name="context" ><?php echo $news['context']; ?></textarea>
                        </div>


                            
                    </div>
                    
                    
                    
                    <!-- Submit -->
                    <div class="col-md-12 p-3 text-end">
                        <a class="btn btn-danger" href="?news" role="button">Cancel</a>
                        <button type="submit"class="btn btn-primary"  name="submit-newsEditForm">Submit</button>
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

    </script>