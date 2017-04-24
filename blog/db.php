<?php
define('MYSQL_SERVER' , 'localhost');
define('MYSQL_USER' , 'blog');
define('MYSQL_PASSWORD' , 'pass');
define('MYSQL_DB' , 'blog');
    function db_connect() {
        $connect_db = mysqli_connect(MYSQL_SERVER , MYSQL_USER , MYSQL_PASSWORD , MYSQL_DB) or die ("Error :".mysqli_error($connect_db));
        if (!mysqli_set_charset($connect_db , "utf8")) {
            printf("Error: ".mysqli_error($connect_db));
        }
        return $connect_db;
    }
?>
