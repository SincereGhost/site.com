<!doctype html>
<html lang="ru">
<head>
<title>Админ-панель</title>
</head>
<body>
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// $hostname = 'localhost';
// $username = 'root';
// $password = 'root'; //установленный вами пароль
// $db_name = 'exchangerDB';
// $link = mysql_connect($hostname,$username,$password);
// mysql_select_db($db_name,$link);
$link = mysqli_connect('localhost','root','root','exchangerDB');

//Если переменная Name передана
if (isset($_POST["name"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query("INSERT INTO `reserve_valuta` (`name`, `value`) 
                        VALUES ('".$_POST['name']."','".$_POST['value']."')");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}
?>
<table>
<form action="" method="post">
    <tr>
        <td>Название валюты:</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Значение:</td>
        <td><input type="text" name="value" size="3"> руб.</td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
    </tr>
</form>
</table>

<?php
//Удаляем, если что
if (isset($_GET['del'])) {
    $sql = mysqli_query('DELETE FROM `reserve_valuta` WHERE `id` = "'.$_GET['del'].'"');
    if ($sql) {
        echo "<p>Валюта удалена.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}

//Получаем данные
$sql = mysqli_query('SELECT `id`, `name` FROM `reserve_valuta`');
while ($result = mysqli_fetch_array($sql)) {
    echo $result['id'].") ".$result['name']." - <a href='?del=".$result['id']."'>Удалить</a><br>";
}
?>
</body>
