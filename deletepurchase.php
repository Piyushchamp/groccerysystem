<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "salesrecord";
    //create connection
$connection = new mysqli($servername,$username,$password,$database);

if(isset($_POST['delete'])){
    $id = $_POST['delete_id'];

    $sql = "DELETE FROM purchasetable WHERE id = $id";
    $query_run = mysqli_query($connection,$sql);
    if($query_run)
    {
        $_SESSION['success']="Data is Deleted";
        header("location:indexpurchase.php");
    }
    else
    {
        $_SESSION['status']="Data is not deleted";
        header("location:indexpurchase.php");
    }
}

?>