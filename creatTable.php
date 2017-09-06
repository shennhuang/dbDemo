<?php

/**
 * Creat database demo(0905)
 *
 * @category None
 * @package  None
 * @author   Shen Huang <shen.huang@104.com.tw>
 * @license  http://www.php.net/license/3_01.txt  PHP License 5.6.31 
 * @link     http://www.xxxx.com/
 **/

creatDB($_POST['tableName']);

/**
 * Creat database demo(0905)
 *
 * @category None
 * @package  None
 * @author   Shen Huang <shen.huang@104.com.tw>
 * @license  http://www.php.net/license/3_01.txt  PHP License 5.6.31 
 * @link     http://www.xxxx.com/
 * @return   None
 **/
function creatDB($v)
{
    if ($v) {
        $servername = "localhost";
        $username = "demo0905";
        $password = "";
        $dbname = "demo0905";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, "");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO yo (a, b, c, d)
            VALUES ('t', 'e', 's', 't')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "SSSSSSS";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            echo "QAQ";
        }
        $conn = null;
        echo "</table>";
    }
    
    //header("Location : ./dbhome.html"); 
    
}
