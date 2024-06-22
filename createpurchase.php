<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "salesrecord";

//create connection
$connection = new mysqli($servername,$username,$password,$database);

if($connection->connect_error){
    die("Connection Falied: " . $connection->connect_error);
}

if(isset($_POST['submit'])){
    $file = ($_FILES["product"]);
    $supplier = $_POST['supplier'];
    $description = $_POST['description'];
    $contact = $_POST['contact'];

    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg','webp');
    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        $query = "INSERT INTO `purchasetable` (`product`,`description`,`supplier`,`contact`) VALUES ('$destinationfile','$description','$supplier','$contact')";
        $query_run = mysqli_query($connection,$query);
        header("location: /grocerysystem/indexpurchase.php");
        exit;
        $successMesssage = "Product Added Successfully...";
        echo '<script> alert("'.$successMesssage.'");</script>';

    }

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Product image uploaded Successfully...") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert(" Couldn\'t upload Product image.Something went wrong!!") </script>';
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Sales</title>
    <link rel="stylesheet" href="purchase.css">
</head>

<body>
    <div class="container">
        <h2 class="headingcustomer">New Sales Record</h2>
        <div class="back">
            <a class="backbtn" href="/grocerysystem/indexpurchase.php" role="button"> <span class="angle"> &#8624; </span> My
                Customers </a>
        </div>
        <div class="parenterr">
            <?php
        if(!empty($errorMessage)){
            echo '<div id="errmessage">' .$errorMessage. '</div>';
        }
        ?>
        </div>
        <form action="" method="POST" class="form" enctype="multipart/form-data">
            <div class="row">
                <label for="product" class="label">Product image</label>
                <div class="col">
                    <input type="file" class="inputclass" id="product" name='product' value="">
                </div>
            </div>
            
            <div class="row">
                <label for="supplier" class="label">Supplier</label>
                <div class="col">
                    <input type="text" class="inputclass" id="supplier" name='supplier' value="" required>
                </div>
            </div>

            <div class="row">
                <label for="description" class="label">Description</label>
                <div class="col">
                    <input type="text" class="inputclass" id="description" name='description' value="" required>
                </div>
            </div>

            <div class="row">
                <label for="contact" class="label">Contact</label>
                <div class="col">
                    <input type="tel" class="inputclass" id="contact" name='contact' value="" required>
                </div>
            </div>
            <div class="row">
                <div class="btn-smecreate">
                    <input type="submit" class="submitcreate" name="submit" value="Submit" href="/grocerysystem/indexpurchase.php">
                </div>
                <div class="btn">
                    <a onclick='cancelFunction()' class="btn-smecancel" href="/grocerysystem/indexpurchase.php"
                        role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // show/hide error message
        let hidediv = document.getElementById('errmessage');
        document.onclick = function (e) {
            if (e.target.id !== 'errmessage') {
                hidediv.style.display = 'none';
            }
        }

        //To alert on Cancel function  
        function cancelFunction() {
            alert("Data may not be saved. Press 'OK' to cancel:")
        }

        let errorMsg = document.getElementById('errmessage');

    </script>
</body>

</html>