<?

include_once "db.php";

$DIR = str_ireplace("\\", "/", __DIR__);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!file_exists("uploads")) {
        mkdir("uploads");
    }

    foreach ($_FILES as $file) {
        if ($file["error"] == 0) {

            $name = $file["name"];
            $repeatName = explode(".", $file["name"]);
            $size = $file["size"];
            $type = $file["type"];
            $path = $DIR . "/uploads" . "/" . $file["name"];

            move_uploaded_file($file["tmp_name"], $path);

            $res = mysqli_query($connection, "SELECT fileName FROM files WHERE fileName = '$name' or fileName LIKE '$repeatName[0](_).$repeatName[1]'");
            $repeatFiles = mysqli_fetch_all($res);

            if (!empty($repeatFiles)) {
                $number = count($repeatFiles);
                $tempName = explode(".", $file["name"]);
                $tempName[0] .= "($number)";
                $file["name"] = implode(".", $tempName);
                $name = $file["name"];
                $tempPath = $DIR . "/uploads" . "/" . $file["name"];
                copy($path, $tempPath);
                $path = $tempPath;
            }

            $ok =  mysqli_query($connection, "INSERT INTO files (fileName, fileSize, fileType, filePath) VALUES ('$name', '$size', '$type', '$path')");
            if ($ok) {
                echo "Файл $name успешно добавлен<br>";
            } else {
                echo "С файлом $name что-то пошло не так<br>";
            }
        }
    }
} else {
    $res = mysqli_query($connection, "SELECT * FROM files");
    $files = mysqli_fetch_all($res, 1);

    foreach ($files as $file) {
        $name = $file["fileName"];
        $size = $file["fileSize"] / 1000000;
        $type = $file["fileType"];
        $path = $file["filePath"];
        $output = "Имя файла: $name || Размер файла: $size мб || Тип файла: $type || Путь к файлу: $path <br>";
        echo $output;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work with files</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file_1">
        <br><br>
        <input type="file" name="file_2">
        <br><br>
        <input type="file" name="file_3">
        <br><br>
        <button>Send</button>
    </form>
</body>

</html>