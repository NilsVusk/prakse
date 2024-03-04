<?php
if(isset($_GET['news_form']) || isset($_GET['news'])) {
    include 'functions/news.php';
}elseif(isset($_GET['gallery_form']) || isset($_GET['gallery'])) {
    include 'functions/gallery.php';
}elseif(isset($_GET['about'])) {
    include 'functions/about.php';
}elseif(isset($_GET['contacts_form'])) {
    include 'functions/contacts.php';
}elseif(isset($_GET['settings'])) {
    include 'functions/settings.php';
}
?>