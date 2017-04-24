 <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
<?php 
    require_once("db.php");
    require_once("models/functions.php");
    require_once ('header.php');
    $connect_db = db_connect();
    //error_reporting(0);

if (isset($_POST['search']) && !empty($_POST['search'])){
$search = $_POST['search'];
        article_same($connect_db, $search);
        include ('views/article_same.php');
    require_once ('footer.php');
}
else if (empty($_POST['search'])){
    include ("views/pagenotfound.php");
    require_once ('footer.php');
}
?>