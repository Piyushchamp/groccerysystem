<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mycustomers";

//create connection
$connection = new mysqli($servername,$username,$password,$database);

$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMesssage = "";

if($_SERVER['REQUEST_METHOD']=='GET'){

    if(!isset($_GET["id"])){
        header("location:/grocerysystem/indexcustomer.php");
        exit;
    }
    $id = $_GET["id"];

    //read the row of the selected client from database
    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:/grocerysystem/indexcustomer.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
}
else{
    // POST METHOD: To update the data of the client

    $id = $_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do{
        if(empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)){
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE clients SET name = '$name', email = '$email', phone = '$phone', address = '$address' WHERE id = $id";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
        }

        $successMesssage = "Client Details Updated Successfully...";

        header("location:/grocerysystem/indexcustomer.php");
        exit;        

    }while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customers</title>
    <link rel="stylesheet" href="customer.css">
</head>
<body>
    <div class="container">
        <h2 class="headingcustomer">Edit Client Details</h2>
        <div class="back">
            <a class="backbtn" href="/grocerysystem/indexcustomer.php" role="button"> <span class="angle" ><!--&#8656; &#8624;--> &#8624; </span>      My Customers </a>
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
                <label for="email" class="label">Email</label>
                <div class="col">
                    <input type="email" class="email" id="email" name='email' value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row">
                <label for="Phone_No" class="label">Phone No.</label>
                <div class="col">
                    <input type="tel" class="Phone_No" id="Phone_No" name='phone' value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row">
                <label for="" class="label">Address</label>
                <div class="col">
                    <input type="text" class="address" id="address" name='address' value="<?php echo $address; ?>">
                </div>
            </div>
            <?php
            echo "$successMesssage";
            ?>
            <div class="row">
                <div class="btn-sme1">
                    <button type="submit" class="submit" onclick="changeSubmit()" >Submit</button>
                </div>
                <div class="btn-sme1">
                    <a onclick="changeCancel()" class="submit cancel" href="/grocerysystem/indexcustomer.php" role="button">Cancel</a>
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