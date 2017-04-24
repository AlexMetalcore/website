<title>Статья</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/change.js">
          </script>  
            <script type="text/javascript" src="js/top.js"></script>
            <script type="text/javascript" src="js/change.js"></script>
            <script type="text/javascript" src="js/modal.js"></script>
<body class="image">
<?php
    error_reporting(0);
    require_once ('header.php');
    require_once('db.php');
    require_once('models/functions.php');
    $connect_db = db_connect();
    $article = article_get($connect_db , $_GET['id']);
    require_once("views/article.php");
    require_once ('footer.php');
?>
    </body>