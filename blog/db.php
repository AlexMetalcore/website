<?php
/*define('MYSQL_SERVER' , 'localhost');
define('MYSQL_USER' , 'blog');
define('MYSQL_PASSWORD' , '623apekru');
define('MYSQL_DB' , 'blog');

$host = "localhost";
$user = "blog";
$pass = "623apekru";
$db = "blog";

function db_connect () {
    $connect_db = new mysqli($host, $user , $pass , $db);
    $connect_db->set_charset("utf8");
        if ($connect_db->connect_error){
                die ("Ошибка соединения с базой:" . $connect_db->connect_error);
       }
    return $connect_db;
}*/
define('MYSQL_SERVER' , 'localhost');
define('MYSQL_USER' , 'blog');
define('MYSQL_PASSWORD' , '623apekru');
define('MYSQL_DB' , 'blog');
    function db_connect() {
        $connect_db = mysqli_connect(MYSQL_SERVER , MYSQL_USER , MYSQL_PASSWORD , MYSQL_DB) or die ("Error :".mysqli_error($connect_db));
        if (!mysqli_set_charset($connect_db , "utf8")) {
            printf("Error: ".mysqli_error($connect_db));
        }
        return $connect_db;
    }
?>
