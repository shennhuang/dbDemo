<?php
/**
 * Insert data  
 * database : demo0906
 * table : 104corp_engineer
 * (date:0906)
 *
 * @category None
 * @package  None
 * @author   Shen Huang <shen.huang@104.com.tw>
 * @license  http://www.php.net/license/3_01.txt  PHP License 5.6.31 
 * @link     http://www.xxxx.com/
 * @return   None
 **/

$id = 520;
$name = $_POST['username'];
$age = $_POST['age'];
$city = $_POST['city'];
$projects = $_POST['projects'];

echo $name;
echo $age;
echo $city;
echo $projects;

$servername = "localhost";
$username = "demo0905";
$password = "";
$dbname = "demo0906";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, "");
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO 104corp_engineer (id, name, age, city, projects)
    VALUES ( ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(1, $id);
    $stmt -> bindParam(2, $name);
    $stmt -> bindParam(3, $age);
    $stmt -> bindParam(4, $city);
    $stmt -> bindParam(5, $projects);
    $stmt -> execute();
    echo "SSSSSSS";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo "QAQ";
}
$conn = null;
$j = $id;
