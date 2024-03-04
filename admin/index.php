<?php
    include '../config.php';
    include 'functions.php';
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="../assets/script.js"></script>
    </head>

    <body class="container-fluid">
        <header>
        </header>
            <div class="row">
                <div class="col-md-auto bg-light">
                    <nav class="navbar navbar-expand-md bg-body-tertiary">
                            
                        <div class="container-fluid align-items-center">
                        
                            <div class="flex-nowrap">
                                <a href="?settings" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                                    <img src="https://picsum.photos/50">
                                </a>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="navbar-nav collapse navbar-collapse flex-column w-75" id="navbarNavAltMarkup">
                                
                                    <a href="?news" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                        <i class="fa-solid fa-newspaper"></i>
                                    </a>
                                
                                    <a href="?gallery" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                        <i class="fa-solid fa-image"></i>
                                    </a>
                                
                                    <a href="?about" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a href="?contacts" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                        <i class="fa-solid fa-book"></i>
                                    </a>
                                    <a href="?settings" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                        <i class="fa-solid fa-gear"></i>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </nav>
                </div>
                <div class="col-md p-3 min-vh-100">
                    <!-- content -->
                    <?php
                    $page = 'views/settings';

                    if(isset($_GET['settings'])) {
                        $page = 'views/settings';
                    }elseif(isset($_GET['about'])) {
                        $page = 'views/about';
                    }elseif(isset($_GET['news'])) {
                        $page = 'views/news';
                    }elseif(isset($_GET['news_form'])) {
                        $page = 'views/news_form';
                    }elseif(isset($_GET['gallery'])) {
                        $page = 'views/gallery';
                    }elseif(isset($_GET['gallery_form'])) {
                        $page = 'views/gallery_form';
                    }elseif(isset($_GET['contacts'])) {
                        $page = 'views/contacts';
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