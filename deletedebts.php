<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "customerdebts";

    //create connection
    $connection = new mysqli($servername,$username,$password,$database);

    $sql = "DELETE FROM debtstable WHERE id = $id";
    $result = $connection->query($sql);
    if($result){
        header("location: /grocerysystem/indexdebts.php");
        exit;
    }
}
?>