<body class="admin_article">
    <link rel="stylesheet" type="text/css" href="../admin/css/admin.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <?php include("header.php"); 
        error_reporting(0);
    ?>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <br>
            <label class="nametitle">Название статьи</label><br><br>
                <input name="title" type="text" class="add_article" value="<?=$article['title']?>" required autofocus><br><br>
            <label class="nametitle">Дата публицации</label><br><br>
                <input name="date" type="date" class="add_article" value="<?=$article['date']?>" required autofocus><br><br>
            <label class="nametitle">Содержание статьи</label><br><br>
                <textarea class="add_content" name="content" required><?=$article['content']?></textarea><br>
                <?php if ($action == 'add') { ?>
                <input type="submit" value="Добавить статью" class="btn_1"><br>
                <?php } ?>
                
                <?php if ($action == 'edit') { ?>
                        <input type="submit" value="Редактировать статью" class="btn_2"><br>
                <?php } ?>
            </form>    
        </div>
    <?php include("../footer.php"); ?>
</body>