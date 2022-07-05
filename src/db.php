<?

$connection = mysqli_connect("localhost", "root", "", "wd05");
if (!$connection) {
    echo "Error connect DB";
}