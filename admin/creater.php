<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление новости</title>
</head>
<body>
<h3>Добавление новости</h3>
<form action="crud/create.php" method="post">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="text"></textarea>
    <button type="submit">Добавить</button>
</form>
</body>
</html>