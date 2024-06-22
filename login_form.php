<?php
    @include 'config.php';
    session_start();
    $error = '';

    if (isset($_POST['submit'])){
        // $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = md5($_POST['password']);
        // $cpass = md5($_POST['cpassword']);
        // $user_type =$_POST['user_type'];

        $select = "SELECT * FROM user_form WHERE  email = '$email' && password ='$pass' ";
        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);

            if($row['user_type']=='user'){

                $_SESSION['user_name'] = $row['name'];
                header('location:user_page.php');
            }
            elseif($row['user_type']=='admin'){

                $_SESSION['admin_name'] = $row['name'];
                header('location:admin_page.php');
            }
        }
        else{
            $error = 'Incorrect Email or Password..!!';
        }
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Here</h3>
            <?php if(isset($error)) { ?>
                <div class="errormg">
                    <p><?php echo $error ?></p>
                </div>
            <?php } ?>

            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Your password">
            <input type="submit" name="submit" value="Login Now" class="form-btn login-btn">
            <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
        </form>
    </div>
    <!-- <script>
        let errors = document.querySelector('.errormsg');

    </script> -->
</body>
</html>