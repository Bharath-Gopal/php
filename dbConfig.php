<?ph
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName     = "bg1";

$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
