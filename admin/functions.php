<?php
if(isset($_GET['news_form']) || isset($_GET['news'])) {
    include 'functions/news.php';
}elseif(isset($_GET['gallery_form']) || isset($_GET['gallery'])) {
    include 'functions/gallery.php';
}elseif(isset($_GET['products_form']) || isset($_GET['products'])) {
    include 'functions/products.php';
}elseif(isset($_GET['about'])) {
    include 'functions/about.php';
}elseif(isset($_GET['contacts_form'])) {
    include 'functions/contacts.php';
}elseif(isset($_GET['settings'])) {
    include 'functions/settings.php';
}

function restructureFilesArray($files)
{
    $output = [];
    foreach ($files as $attrName => $valuesArray) {
        foreach ($valuesArray as $key => $value) {
            $output[$key][$attrName] = $value;
        }
    }
    return $output;
}

//AJAX functions

if($_POST['test'] = 'news_delete'){
    $query = "DELETE FROM news WHERE news_id='".$_POST['id']."'";
 
    $conn->query($query);

   }
?>

