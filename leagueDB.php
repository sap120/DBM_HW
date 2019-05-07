/**
 * Created by PhpStorm.
 * User: sapirama
 * Date: 5/7/2019
 * Time: 12:28
 */

<html>
<body>
<h1>Parts Table</h1>
<?php
$server = "tcp:techniondbcourse01.database.windows.net,1433";
$user = "sap120";
$pass = "Qwerty12!";
$database = "sap120";
$c = array("Database" => $database, "UID" => $user, "PWD" => $pass);
sqlsrv_configure('WarningsReturnAsErrors', 0);
$conn = sqlsrv_connect($server, $c);
if($conn === false)
{
    echo "error";
    die(print_r(sqlsrv_errors(), true));
}
$sql="SELECT * FROM Parts";
$result = sqlsrv_query($conn, $sql);
while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{
    echo $row['pid'] . " " . $row['pname'];
    echo "<br>";
}
?>