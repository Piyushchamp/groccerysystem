<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customerdebts";

//create connection
$connection = new mysqli($servername,$username,$password,$database);

$name = "";
$phone = "";
$description = "";
$duedate = "";
$amount = "";

$errorMessage = "";
$successMesssage = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
   $name = $_POST["name"];
   $phone = $_POST["phone"];
   $description = $_POST["description"];
   $duedate = $_POST["duedate"];
   $amount = $_POST["amount"]; 

   do{
    if(empty($name) || empty($phone) || empty($description) || empty($amount)){
        $errorMessage = "All the fields are required";
        break;
    }
    //add new client to the database
    $sql = "INSERT INTO debtstable (name,phone,description,duedate,amount) VALUES ('$name','$phone','$description','$duedate','$amount')";
    $result = $connection->query($sql);

    if(!$result){
        $errorMessage = "Invalid Query: " . $connection->error;
        break;
    }

    $name = "";
    $phone = "";
    $description = "";
    $duedate = "";
    $amount = "";

    $successMesssage = "Client Added Successfully...";
    header("location: /grocerysystem/indexdebts.php");
    exit;

   }while(false);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Debts</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #fee5ec;
        }

        .headingcustomer {
            background-color: rgb(255, 171, 185);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 40px;
            margin-top: 200px;
            padding: 20px;
            font-size: xx-large;
            font-weight: bolder;
            border-radius: 25px;
            width: 40%;
            position: relative;
            left: 28%;
        }

        .backbtn {
            font-style: none;
            text-decoration: none;
            background-color: crimson;
            color: white;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            border: 2.5px solid black;
            box-shadow: 2px 5px 8px black;
            margin-left: -40%;
        }

        .form {
            background-color: #ffcccb;
            /* Light Pink */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100vw;
            /* Set width to 50% */
            max-width: 600px;
            margin-top: 7%;
            margin-bottom: 4%;
        }

        .row {
            margin-bottom: 20px;
        }

        .label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .col input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-sme {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .submit,
        .btn-sme a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 5px;
        }

        .submit {
            background-color: #f1395f;
            border: 2px solid black;
            transition: background-color 0.3s;
            margin-bottom: 5px;
            padding-left: 23px;
            padding: 13px 40px;
            font-size:1rem;
            margin-left: 37%;
            border-radius: 8px;
            margin-bottom: 13px;
            
        }

        /* .submit:hover {
            background-color: #ff1493; 
        } */

        .btn-sme a {
            background-color: #f1395f;
            border: 2px solid black;
            transition: background-color 0.3s;
            margin-bottom: 5px;
            border-radius: 8px;
            padding: 13px 40px;
        }

        .btn-sme a:hover {
            background-color: #db7093;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="headingcustomer">New Debts</h2>
        <div class="back">
            <a class="backbtn" href="/grocerysystem/indexdebts.php" role="button"> <span
                    class="angle"><!--&#8656; &#8624;-->
                    &#8624; </span> My Debts </a>
        </div>
        <div class="parenterr">
            <?php
        if(!empty($errorMessage)){
            echo '<div id="errmessage">' .$errorMessage. '</div>';
        }
        ?>
        </div>
        <form method="post" class="form">
            <div class="row">
                <label for="name" class="label">Name</label>
                <div class="col">
                    <input type="text" class="name" id="name" name='name' value="<?php echo $name ?>">
                </div>
            </div>
            <div class="row">
                <label for="phone" class="label">Phone No.</label>
                <div class="col">
                    <input type="tel" class="Phone_No" id="Phone_No" name='phone' value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row">
                <label for="description" class="label">Description</label>
                <div class="col">
                    <input type="text" class="description" id="description" name='description'
                        value="<?php echo $description; ?>">
                </div>
            </div>
            <div class="row">
                <label for="duedate" class="label">Due Date</label>
                <div class="col">
                    <input type="datetime-local" class="duedate" id="duedate" name='duedate'
                        value="<?php echo $duedate; ?>">
                </div>
            </div>
            <div class="row">
                <label for="amount" class="label">Amount</label>
                <div class="col">
                    <input type="text" class="amount" id="amount" name='amount' value="<?php echo $amount; ?>">
                </div>
            </div>
            <div class="row">
                <div class="btn-sme">
                    <input type="submit" class="submit" value="Submit">
                </div>
                <div class="btn-sme">
                    <a onclick='cancelFunction()' class="submit" href="/grocerysystem/indexdebts.php"
                        role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    let hidediv = document.getElementById('errmessage');
    document.onclick = function (e) {
        if (e.target.id !== 'errmessage') {
            hidediv.style.display = 'none';
        }
    }


    function submitFunction() {
        alert('Please Confirm to Add New Customer:');
    }
    function cancelFunction() {
        alert("Data may not be saved. Press 'OK' to cancel:")
    }

    let errorMsg = document.getElementById('errmessage');

</script>

</html>