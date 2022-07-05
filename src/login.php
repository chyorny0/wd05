<?
include_once 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_users = mysqli_query($connection, "SELECT * FROM users");
    $users = mysqli_fetch_all($db_users, 1);
    foreach ($users as $user_data) {
        if (in_array($_POST["login"], $user_data) == TRUE && in_array(md5($_POST["password"]), $user_data) == TRUE) {
            $_SESSION["is_login"] = 1;
            header('Location: /add_page.php');
        }
    }
    if (!isset($_SESSION["is_login"]) || $_SESSION["is_login"] !== 1) {
        header('Location: /register.php');
    }
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