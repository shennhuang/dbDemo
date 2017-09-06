<?php

/**
 * Show Table
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

 $servername = "localhost";
 $username = "demo0905";
 $password = "";
 $dbname = "demo0906";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM 104corp_engineer";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
} catch(PDOException $e) {
    echo $e . "QAQ";
}
echo json_encode($result);