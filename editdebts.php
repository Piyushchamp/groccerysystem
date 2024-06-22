<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customerdebts";

//create connection
$connection = new mysqli($servername,$username,$password,$database);

$id = "";
$name = "";
$phone = "";
$description = "";
$duedate = "";
$amount = "";


$errorMessage = "";
$successMesssage = "";

if($_SERVER['REQUEST_METHOD']=='GET'){

    if(!isset($_GET["id"])){
        header("location:/grocerysystem/indexdebts.php");
        exit;
    }
    $id = $_GET["id"];

    //read the row of the selected client from database
    $sql = "SELECT * FROM debtstable WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:/grocerysystem/indexdebts.php");
        exit;
    }

    $name = $row["name"];
    $phone = $row["phone"];
    $description = $row["description"];
    $duedate = $row["duedate"];
    $amount = $row["amount"];
}
else{
    // POST METHOD: To update the data of the client

    $id = $_POST['id'];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $description = $_POST["description"];
    $duedate = $_POST["duedate"];
    $amount = $_POST["amount"];

    do{
        if(empty($id) || empty($name) || empty($phone) || empty($description) || empty($duedate) || empty($amount)){
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE debtstable SET name = '$name', phone = '$phone', description = '$description', duedate = '$duedate', amount='$amount' WHERE id = $id";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
        }

        $successMesssage = "Client Details Updated Successfully...";

        header("location:/grocerysystem/indexdebts.php");
        exit;        

    }while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" href="styledebts.css">
</head>
<body>
    <div class="container">
        <h2 class="headingcustomer">Edit Client Debts</h2>
        <div class="back">
            <a class="backbtn" href="/grocerysystem/indexdebts.php" role="button"> <span class="angle" ><!--&#8656; &#8624;--> &#8624; </span>      My Debts </a>
        </div>
        <?php
        if(!empty($errorMessage)){
            echo "
            $errorMessage";
        }
        ?>
        <form method="post" class="form" >
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row">
                <label for="name" class="label">Name</label>
                <div class="col">
                    <input type="text" class="name" id="name" name='name' value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row">
                <label for="phone" class="label">Phone</label>
                <div class="col">
                    <input type="tel" class="phone" id="phone" name='phone' value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row">
                <label for="description" class="label">Description</label>
                <div class="col">
                    <input type="text" class="description" id="description" name='description' value="<?php echo $description; ?>">
                </div>
            </div>
            <div class="row">
                <label for="duedate" class="label">Duedate</label>
                <div class="col">
                    <input type="datetime-local" class="duedate" id="duedate" name='duedate' value="<?php echo $duedate; ?>">
                </div>
            </div>
            <div class="row">
                <label for="amount" class="label">Amount</label>
                <div class="col">
                    <input type="text" class="amount" id="amount" name='amount' value="<?php echo $amount; ?>">
                </div>
            </div>
            <?php
            echo "$successMesssage";
            ?>
            <div class="row">
                <div class="btn-smeedit">
                    <button type="submit" class="submitedit" onclick="changeSubmit()" >Submit</button>
                </div>
                <div class="btn">
                    <a onclick="changeCancel()" class="btn-smecancel" href="/grocerysystem/indexdebts.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
        <script>
        function changeSubmit(){
            alert("Saved the Changes.🙂 Please Confirm to return to previous page:");
        }
        function changeCancel(){
            alert("Changes you made may not be saved. Press 'OK' to Cancel:");
        }
    </script>
    </div>
    
</body>
</html>