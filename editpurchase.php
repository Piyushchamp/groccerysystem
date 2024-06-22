<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "salesrecord";

//create connection
$connection = new mysqli($servername,$username,$password,$database);

$id = "";
// $destinationfile = "";
$supplier = "";
$description = "";
$contact = "";


$errorMessage = "";
$successMesssage = "";

if($_SERVER['REQUEST_METHOD']=='GET'){

    if(!isset($_GET["id"])){
        header("location:/grocerysystem/indexpurchase.php");
        exit;
    }
    $id = $_GET["id"];

    //read the row of the selected client from database
    $sql = "SELECT * FROM purchasetable WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:/grocerysystem/indexpurchase.php");
        exit;
    }

    // $destinationfile = $row["product"];
    $supplier = $row['supplier'];
    $description = $row['description'];
    $contact = $row['contact'];
}
else{
    // POST METHOD: To update the data of the client

    $id = $_GET['id'];
    // $destinationfile = ($_FILES["product"]);
    $supplier = $_POST['supplier'];
    $description = $_POST['description'];
    $contact = $_POST['contact'];

    do{
        if(empty($id) || empty($supplier) || empty($description) || empty($contact)){
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE purchasetable SET supplier = '$supplier', description = '$description', contact = '$contact' WHERE id = $id";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
        }

        $successMesssage = "Client Details Updated Successfully...";

        header("location:/grocerysystem/indexpurchase.php");
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
    <link rel="stylesheet" href="purchase.css">
</head>
<body>
    <div class="container">
        <h2 class="headingcustomer">Edit Sales Record</h2>
        <div class="back">
            <a class="backbtn" href="/grocerysystem/indexpurchase.php" role="button"> <span class="angle" ><!--&#8656; &#8624;--> &#8624; </span>      My Sales </a>
        </div>
        <?php
        if(!empty($errorMessage)){
            echo "
            $errorMessage";
        }
        ?>
        <form action="" method="POST" class="form" enctype="multipart/form-data">            
            <div class="row">
                <label for="supplier" class="label">Supplier</label>
                <div class="col">
                    <input type="text" class="inputclass" id="supplier" name='supplier' value="<?php echo $supplier; ?>" required>
                </div>
            </div>

            <div class="row">
                <label for="description" class="label">Description</label>
                <div class="col">
                    <input type="text" class="inputclass" id="description" name='description' value="<?php echo $description; ?>" required>
                </div>
            </div>
            
            <div class="row">
                <label for="contact" class="label">Contact</label>
                <div class="col">
                    <input type="tel" class="inputclass" id="contact" name='contact' value="<?php echo $contact; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="btn-smeedit">
                    <input onclick="changeSubmit()" type="submit" class="submitedit" name="submit" value="Submit" href="/grocerysystem/indexpurchase.php">
                </div>
                <div class="btn">
                    <a onclick='changeCancel()' class="btn-smeedit" href="/grocerysystem/indexpurchase.php" role="button">Cancel</a>
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