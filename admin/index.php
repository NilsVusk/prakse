<?php
    include '../config.php';
    

 
    if(isset($_POST['submit-webform'])) {



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
    }elseif(isset($_POST['submit-adminform'])) {


        
        $username = $_POST['username'];
        $email = $_POST['email'];

        $user_id = 0;

        $inputQuery = "UPDATE user SET username = '". $username ."', email = '". $email ."'";

        // var_dump($inputQuery);

        

        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }



    $sql = "SELECT * FROM config";
    $results = $conn->query($sql);
    $config = mysqli_fetch_array($results);

    $userSql = "SELECT * FROM user";
    $adminResults = $conn->query($userSql);
    $admin = mysqli_fetch_array($adminResults);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>admin</title>
        <link href="../assets/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="../assets/fontawesome/css/brands.css" rel="stylesheet">
        <link href="../assets/fontawesome/css/solid.css" rel="stylesheet">
        <link href="../assets/fontawesome/css/all.css" rel="stylesheet">
        <link href="../assets/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="assets/https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body class="container-fluid">
        <header>
        </header>
            <div class="row">
                <div class="col-md-auto bg-light">
                    <nav class="navbar navbar-expand-md bg-body-tertiary">
                            
                        <div class="container-fluid align-items-center">
                        
                            <div class="flex-nowrap">
                                <a href="?admin_dashboard" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                                    <img src="https://picsum.photos/50">
                                </a>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="navbar-nav collapse navbar-collapse flex-column w-75" id="navbarNavAltMarkup">
                                
                                    <a href="?admin_dashboard" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                        <i class="fa-solid fa-gauge"></i>
                                    </a>
                                
                                    <a href="?admin_order" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                        <i class="fa-solid fa-table"></i>
                                    </a>
                                
                                    <a href="?admin_customers" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                        <i class="fa-solid fa-person"></i>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </nav>
                </div>
                <div class="col-md p-3 min-vh-100">
                    <!-- content -->
                    <?php
                    $page = 'admin_dashboard';

                    if(isset($_GET['admin_dashboard'])) {
                        $page = 'admin_dashboard';
                    }elseif(isset($_GET['admin_customers'])) {
                        $page = 'admin_customers';
                    }elseif(isset($_GET['admin_order'])) {
                        $page = 'admin_order';
                    }
                    include $page . ".php";

                ?>
                </div>
            </div>
        <footer>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>