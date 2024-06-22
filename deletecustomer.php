<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mycustomers";

    //create connection
    $connection = new mysqli($servername,$username,$password,$database);

    $sql = "DELETE FROM clients WHERE id = $id";
    $result = $connection->query($sql);
    if($result){
        header("location: /grocerysystem/indexcustomer.php");
        exit;
    }
}
?>