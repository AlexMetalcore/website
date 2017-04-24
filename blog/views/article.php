<?php
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
    
    <div class="article">
        <h3 class="title"><?=$article['title']?></h3>
    <em>Опубликовано: <?=$article['date']; ?></em><br>
        <?php foreach ($images as $key => $img): ?>
        <?php if ($img[4] == $article['id']){ ?>
        <img src="<?=$img;?>" alt="<?=$key;?>" class="img">
        <?php } 
        endforeach;
        ?>
        <p class="article_1"><?=$article['content']?></p>
        <input type="submit" onclick="history.back();" class="btn" value="Назад">
    <?php if(session_start() === 'true') {
            require_once ("formcomment.php");
          }
           else {
        ?>
        <p class="comment">Чтобы добавить комментарий нужно <a href ="#" class="comment">авторизироваться</a></p>
        <?php } ?>
    </div>
</div>
