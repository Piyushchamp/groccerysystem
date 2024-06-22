<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mycustomers";

//create connection
$connection = new mysqli($servername,$username,$password,$database);

$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMesssage = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $address = $_POST["address"]; 

   do{
    if(empty($name) || empty($email) || empty($phone) || empty($address)){
        $errorMessage = "All the fields are required";
        break;
    }
    //add new client to the database
    $sql = "INSERT INTO clients (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
    $result = $connection->query($sql);

    if(!$result){
        $errorMessage = "Invalid Query: " . $connection->error;
        break;
    }

    $name = "";
    $email = "";
    $phone = "";
    $address = "";

    $successMesssage = "Client Added Successfully...";
    echo '<script> alert("'.$successMesssage.'");</script>';
    header("location: /grocerysystem/indexcustomer.php");
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
        <h2 class="headingcustomer">New Client</h2>
        <div class="back">
            <a class="backbtn" href="/grocerysystem/indexcustomer.php" role="button"> <span class="angle" ><!--&#8656; &#8624;--> &#8624; </span>      My Customers </a>
        </div>
        <div class="parenterr">
        <?php
        if(!empty($errorMessage)){
            echo '<div id="errmessage">' .$errorMessage. '</div>';
        }
        ?></div>
        <form method="post" class="form" >
            <div class="row">
                <label for="name" class="label">Name</label>
                <div class="col">
                    <input type="text" class="name" id="name" name='name' value="<?php echo $name ?>">
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
                <label for="address" class="label">Address</label>
                <div class="col">
                    <input type="text" class="address" id="address" name='address' value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row">
                <div class="submitform">
                    <input type="submit" class="submitcreate" value="Submit">
                </div>
                <div class="submitform">
                    <a onclick='cancelFunction()' class="btn-smee" href="/grocerysystem/indexcustomer.php">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
    <script>
            let hidediv=document.getElementById('errmessage');
            document.onclick=function(e){
                if(e.target.id!=='errmessage'){
                    hidediv.style.display='none';
                }
            }


        function submitFunction(){
            alert('Please Confirm to Add New Customer:');
        }
        function cancelFunction(){
            alert("Data may not be saved. Press 'OK' to cancel:")
        }
        
        let errorMsg=document.getElementById('errmessage');

    </script>
</html>