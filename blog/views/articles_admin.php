<body class="admin">
    <link rel="stylesheet" type="text/css" href="../admin/css/admin.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <?php include("header.php"); ?>
    <a href="index.php?action=add" id="add">Добавить статью</a>
<table style="width: 1300px; margin-bottom: 15px;">
    <tr>
        <th>Дата публикации статьи</th>
        <th>Название статьи</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    <?php foreach ($articles as $a): ?>
        <tr>
           <td><?=$a['date']?><hr></td>
           <td><?=$a['title']?><hr></td>
            <td><a class="edit_art" href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a><hr></td>
            <td><a class="del_art" href="index.php?action=delete&id=<?=$a['id'];?>">Удалить</a><hr></td>
        <tr>
    <?php endforeach ?>
</table>
    <?php include("../footer.php"); ?>
</body>