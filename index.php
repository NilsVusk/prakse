<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>testing</title>
            <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
            <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
            <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
            <link href="assets/style.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="assets/https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="assets/script.js"></script>
        </head>

        <body class="container">
            
                  <header>
                        <div class="logo text-center my-2">
                            <a href=""><img src="https://picsum.photos/100"></a>
                        </div>

                        <nav class="navbar navbar-expand-md bg-body-tertiary">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#"><img src="https://picsum.photos/50"></a></a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                  <a class="nav-link active" aria-current="page" href="?home">Sākums</a>
                                  <a class="nav-link" href="?gallery">Galērija</a>
                                  <a class="nav-link" href="?about">Par Mums</a>
                                  <a class="nav-link" href="?contacts">Kontakti</a>
                                </div>
                              </div>
                            </div>
                          </nav>
                    </header>
                    <?php
                        if(isset($_GET['home'])) {
                            include 'home.php';
                        }elseif(isset($_GET['about'])) {
                            include 'about.php';
                        }elseif(isset($_GET['contacts'])) {
                            include 'contacts.php';
                        }elseif(isset($_GET['gallery'])) {
                            include 'gallery.php';
                        }
                    ?>
                <footer>
                    <div class="container bg-body-tertiary">
                        <div class="row">
                            <div class="contacts col-md-6 text-center">
                                <ul class="list-unstyled">
                                    <div><li><p><i class="fa-solid fa-location-dot"></i> Ut vitae iaculis purus. Sed id ornare diam. </p></li></div>
                                    <div><li><p><i class="fa-solid fa-envelope"></i> Sed lobortis dignissim nisi et vestibulum.</p></li></div>
                                    <div><li><p><i class="fa-solid fa-phone"></i> Curabitur at elementum quam.</p></li></div>
                                </ul>
                            </div>
                            <div class="bar col-md-6 mb-2 mt-2">
                                <div class="list-group col-md-5">
                                    <a href="?home" class="list-group-item list-group-item-action">Sākums</a>
                                    <a href="?gallery" class="list-group-item list-group-item-action">Galērija</a>
                                    <a href="?about" class="list-group-item list-group-item-action">Par mums</a>
                                    <a href="?contacts" class="list-group-item list-group-item-action">Kontakti</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>

</html>