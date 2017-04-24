<?php
    $connect_db = db_connect();
    $articles = articles_all($connect_db);
    error_reporting(0);
    $images = [
        'ubuntu' => 'img/1.jpg',
        'debian' => 'img/2.jpg',
        'centos' => 'img/3.jpg',
        'freebsd' => 'img/4.jpg',
        'asterisk' => 'img/5.jpg',
        'php' => 'img/6.jpg',
        'js' => 'img/7.jpg',
        'jquery' => 'img/8.jpg',
        'ajax' => 'img/9.jpg',
    ];
?>
<div class="content">
    <?php
    require_once('filter.php');
    ?>
    
    <div class="articles">
        <?php foreach($articles as $a): ?>
        <h3 class="title" title="<?=$a['title']?>"><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
    <em>Опубликовано: <?=$a['date']; ?></em>
        <?php foreach ($images as $key => $img): ?>
        <?php if ($img[4] == $a['id']){ ?>
        <a href="article.php?id=<?=$a['id']?>"><img src="<?=$img;?>" alt="<?=$key;?>" class="preview"></a>
        <?php }
        endforeach;
        ?>
    <p class="articles_1"><?=str_article($a['content'])?>&nbsp;<a class="readto" href="article.php?id=<?=$a['id']?>">Читать далее&nbsp;&raquo;&raquo;</a></p>
        <hr>
    <?php endforeach ?>
    </div>
   <?php require_once('pagination.php')?>
</div>
