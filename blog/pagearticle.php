<title>Статьи</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/change.js"></script>
        <script type="text/javascript" src="js/top.js"></script>
<body class="images">
<?php
    error_reporting(0);
    require_once('db.php');
    require_once('models/functions.php');
require_once ('header.php');
     $connect_db = db_connect();
require_once ('views/articles.php');
require_once ('footer.php');
?>
</body>