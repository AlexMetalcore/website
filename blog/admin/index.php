<?php
	require_once ("../db.php");
    require_once ("../models/functions.php");

    $connect_db = db_connect();
if (isset($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = "";
}
if ($action == 'add'){
    if (!empty($_POST)) {
        article_new ($connect_db , $_POST['title'] , $_POST['date'] , $_POST['content']);
        header ("location: index.php");
    }
    include ("../views/article_admin.php");
}
else if ($action == 'edit') {
    if (!isset ($_GET['id'])) {
        header ("Location: index.php");
    }
    $id = (int)$_GET['id'];
    if (!empty($_POST) && $id > 0) {
        article_edit($connect_db , $id , $_POST['title'] , $_POST['date'] , $_POST['content']);
        header("Location: index.php");
    }
    $article = article_get($connect_db , $id);
    include ("../views/article_admin.php");
}
else if ($action == 'delete'){
    $id = $_GET['id'];
    $article = article_delete ($connect_db , $id);
    header ("Location: index.php");
}
else {
    $articles = articles_all($connect_db);
    include ("../views/articles_admin.php");
}
?>
