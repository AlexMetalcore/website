<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/modal.js"></script>
        <?php require_once ('form.php'); ?>
<div class="nav">
            <div class="logo">
                <a href="../blog/"><img src="img/img.jpg" width="200px;"></a>
            </div>
            <div class="head">
                <a href="../blog/">ИТ-Блог</a>
            </div>
            <div class="reglog">
                <a href="#" id="log">Войти</a>
                <a href="#" id="reg">Регистрация</a>
            </div>
            <div class="menu">
                <a href="../blog/">Главная</a>
                <a href="../blog/pagearticle.php">Статьи</a>
                <a href="../blog/about.php">Обо мне</a>
                <a href="../blog/kontact.php">Контакты</a>
            </div>
            <div class="search">
                <form id="search-info" action="getpagesame.php" method="post">
                    <input class="field" type="text" placeholder="Введите слово..." name="search">
                    <input class="button" type="submit" value="Поиск">
                </form>
            </div>
        </div>
        