<?php
    function articles_all($connect_db){
        $sql = "SELECT *FROM articles ORDER BY id DESC";
        $result = mysqli_query($connect_db , $sql);
        if (!$result)
            die ("Ошибка соединения с базой:" . $connect_db->connect_error);
        
        $num = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $num ; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;
    }

    function article_get($connect_db , $id_article) {
        $sql = sprintf("SELECT *FROM articles WHERE id=%d",(int)$id_article);
        $result = mysqli_query($connect_db , $sql);
        if (!$result)
            die ("Ошибка соединения с базой:" . $connect_db->connect_error);
        
            $article = mysqli_fetch_assoc($result);
        
        return $article;
    }
    
    function article_new($connect_db , $title , $date , $content){
        $title = trim($title);
        $content = trim($content);
        
    if ($title == ""){
        return false;
    }
    $sql = "INSERT INTO articles (title , date , content) VALUES ('%s' , '%s' , '%s')";
        
        $query = sprintf($sql , mysqli_real_escape_string($connect_db , $title) , mysqli_real_escape_string($connect_db , $date) , mysqli_real_escape_string($connect_db , $content));
        
        $result = mysqli_query($connect_db , $query);
        
        if (!$result)
            die (mysqli_error($connect_db));
        return true;
    }

    function article_edit($connect_db , $id , $title , $date , $content){
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
        
            if ($title == '') {
                return false;
            }
        $sql = "UPDATE articles SET title='%s' , content='%s' , date='%s' WHERE id='%d'";
        $query = sprintf($sql , mysqli_real_escape_string($connect_db, $title) , mysqli_real_escape_string($connect_db, $content) , mysqli_real_escape_string($connect_db, $date) , $id);
        
        $result = mysqli_query($connect_db , $query);
        
        if (!$result)
            die (mysqli_error($connect_db));
        
        return mysqli_affected_rows($connect_db);
    }
    function article_delete ($connect_db , $id){
        $id = (int)$_GET['id'];
        
        if ($id == 0) {
            return false;
        }
        $sql = sprintf("DELETE FROM articles WHERE id='%d'" , $id);
        $result = mysqli_query($connect_db , $sql);
        
        if (!$result)
            die (mysqli_error($connect_db));
        return mysqli_affected_rows($connect_db);
    }
/*SELECT * FROM `blog`.`articles` WHERE (CONVERT(`title` USING utf8) LIKE '%javascript%')*/

    function article_same ($connect_db , $search){
        $search = $_POST['search'];
        $search = trim($search);
        $sql = "SELECT * FROM articles search WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
        
        //$sql = mysql_real_escape_string($connect_db , $sql);
        
        $result = mysqli_query($connect_db , $sql);
        
        $num_same = mysqli_num_rows($result);
        
        global $row_count;
        $row_count = $result->num_rows;
        
        $articles_same = array();
        
        for ($i = 0; $i <= $num_same ; $i++)
        {
            $row_same = mysqli_fetch_assoc($result);
            $articles_same[] = $row_same;
        }
        if (!$result)
            die (mysqli_error($connect_db));
        
        return $articles_same;
    }
    function str_article($text , $len = 400){
        return mb_substr($text , 0 , $len);
    }
    function session_page(){
        $name = $_POST['name'];
        $password = $_POST['pass'];
        $sql = "SELECT *FROM users WHERE user='".$name."'";
        $result = mysqli_query($connect_db , $sql);
        if (!$result)
            die ("Ошибка соединения с базой:" . $connect_db->connect_error);
        $row = mysqli_fetch_assoc($result);
        if ($row == 0) {
            echo 'Такого пользователя нету в базе&nbsp;<a href="#" class="comment">авторизируйтесь</a>';
        }
        $sql = sprintf("INSERT INTO users ( user , password) VALUES (".$name." , ".$password.")");
        $rows = mysqli_fetch_assoc($result);
        if ($rows > 0 && !empty($name) && !empty($password)){
            echo "Вы успешно успешно авторизировались";
        }
        else {
            echo "Заполните поля";
        }
        return session_start();
    }
?>
