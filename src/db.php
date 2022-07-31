<?

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = mysqli_connect("localhost", "root", "", "wd05");
if (!$connection) {
    echo "Error connect DB";
}