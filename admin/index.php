<?php
    include '../config.php';


 
    if(isset($_POST['submit-webform'])) {

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }

        $adress = $_POST['adress'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $inputQuery = "UPDATE config SET logo = '". $logo ."', adress = '". $adress ."', email = '". $email ."', phone ='". $phone . "'";
        var_dump($inputQuery);
        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }



    $sql = "SELECT * FROM config";
    $results = $conn->query($sql);
    $config = mysqli_fetch_array($results);
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>admin</title>
            <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
            <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
            <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
            <link href="assets/style.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="assets/https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        </head>

        <body class="container">
            <header>
               
            </header>  
            
            <div class="content row">


                <!-- ------------ -->
                <!-- Website Info -->
                <!-- ------------ -->

                <div class="col-md-6">
                    <form method="post" name="website-form">
                        <div class="card row">
                            <h5 class="card-header">Website Info</h5>

                                <!-- Logo -->

                                <div>
                                    <div class="col-md-6">
                                    <label for="logo" class="col-form-label">Logo</label>
                                    </div>

                                    <div class="col-md-6 flex-wrap">
                                    <input type="file" class="form-control" name="logo" id="logo" value="<?php echo $config['logo']; ?>">
                                    </div>
                                    <div class="p-2">
                                        <img src="<?php echo $config['logo'];?>">
                                    </div>
                                </div>

                                <!-- Adress -->

                                <div>
                                    <div class="col-md-6">
                                        <label for="adress" class="col-form-label">Adrese</label>
                                    </div>
                                    <div class="col-md-6 mb-2 p-2 ">
                                        <input type="text" id="adress" name="adress" class="form-control" placeholder="Adrese" value="<?php echo $config['adress']; ?>">
                                    </div>
                                </div>

                                <!-- Email -->

                                <div>
                                    <div class="col-md-6 ">
                                        <label for="email" class="col-form-label">Epasts</label>
                                    </div>
                                    <div class="col-md-6 mb-2 p-2">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Epasts" value="<?php echo $config['email']; ?>">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="">
                                    <div class="col-md-6">
                                        <label for="phone" class="col-form-label">Telefons</label>
                                    </div>
                                    <div class="col-md-6 mb-2 p-2">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefons" value="<?php echo $config['phone']; ?>">
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-md-12 p-3 text-end">
                                    <button type="submit" class="btn btn-primary"  name="submit-webform">Submit</button>
                                </div>
                        </div>
                    </form>
                    <?php 


                ?>
                </div>
                

                <!-- ---------- -->
                <!-- Admin Info -->
                <!-- ---------- -->

                <div class="col-md-6">
                        <form method="post">
                        <div class="card bg-danger-subtle row">
                            <h5 class="card-header bg-danger">Admin Info</h5>

                                <!-- username -->

                                <div>
                                    <div class="col-md-6">
                                        <label for="username" class="col-form-label">Username</label>
                                    </div>
                                    <div class="col-md-6 mb-2 p-2 ">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    
                                </div>

                                <!-- email -->

                                <div>
                                    <div class="col-md-6">
                                        <label for="email" class="col-form-label">Epasts</label>
                                    </div>
                                    <div class="col-md-6 mb-2 p-2 ">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Epasts">
                                    </div>
                                </div>

                                <!-- change password -->

                                <div>
                                    <div class="col-md-6 ">
                                        <label for="password" class="col-form-label">Password</label>
                                    </div>
                                    <div class="col-md-6 mb-2 p-2">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-md-12 p-3 text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <footer>

            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>
    </html>