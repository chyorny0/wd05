<?
include_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = md5($_POST["password"]);
    $db_users = mysqli_query($connection, "SELECT login, password FROM users WHERE login = '$login' AND password = '$password'");
    $users = mysqli_fetch_all($db_users, 1);
    if (empty($users)) {
        $res = mysqli_query($connection, "INSERT INTO users (login,password) VALUES ('$login','$password')");
        if ($res == 1) {
            echo "Новый пользователь был успешно зарегестрирован";
        } else {
            echo "Что-то пошло не так";
        }
    } else {
        echo "Такой пользователь уже существует";
    }
    // $res = mysqli_query($connection, "INSERT INTO users (login,password) VALUES ('$login','$password')");
    // if ($res == 1) {
    //     echo "Новый пользователь был успешно зарегестрирован";
    // } else {
    //     echo "Что-то пошло не так";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">send</button>
    </form>
</body>

</html>