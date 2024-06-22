<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CUSTOMERS</title>
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <nav id="navbar">
            <div class="navbottom">
                <ul class="list">
                    <button class="btn1"><a href="admin_page.php" class="link"><i
                                class="fa-solid fa-house"></i>HOME</a></button>
                    <button class="btn1"><i class="fa-solid fa-warehouse"></i>INVENTORY</button>
                    <button class="btn1 "><a href="dashboardpanel.php" class="link"><i class="fa-solid fa-gauge"></i>DASHBOARD</a></button>
                </ul>
            </div>
            <hr>
        </nav>

        <!--plus-> &#43; -->
        <h2 class="headingcustomer">List of Customers</h2>
        <div class="parentbutton">
            <a class="btn" href="/grocerysystem/createcustomer.php" role="button"> <span class="plus"> &plus; </span> New
                Customers</a>

            <input class="search" type="text" name="" id="myInput" placeholder=" Search by names...."
                onkeyup="searchfun()">
            <button onclick="confirmSearch()" class="searchbtn">Search</button>
        </div>
        <div class="parenttable">
            <table id="table">
                <thead class="thead">
                    <tr class="row">
                        <th class="head">ID</th>
                        <th class="head">Name</th>
                        <th class="head">Email</th>
                        <th class="head">Phone</th>
                        <th class="head">Address</th>
                        <th class="head">Created At</th>
                        <th class="head">Action</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mycustomers";

                //create connection
                $connection = new mysqli($servername,$username,$password,$database);

                if($connection->connect_error){
                    die("Connection Falied: " . $connection->connect_error);
                }

                //Read all data from table
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid Query: " . $connection->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr class='row'>
                        <td class='data' >$row[id]</td>
                        <td class='data' >$row[name]</td>
                        <td class='data' >$row[email]</td>
                        <td class='data' >$row[phone]</td>
                        <td class='data' >$row[address]</td>
                        <td class='data' >$row[created_at]</td>
                        <td class='data' >
                            <a class='btn-sme' href='/grocerysystem/editcustomer.php?id=$row[id]'>Edit</a>
                            <a onclick=\"javascript:return confirm('Data Will be Erased!! Do you want to Preceed?');\" ' class='btn-smd' href='/grocerysystem/deletecustomer.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                    ";
                };
                ?>
                </tbody>
            </table>
            
        </div>
        <div id="scrolltop">
            <button class="scrltop">
                <p class="uparrow"> &#8686; </p>
            </button>
        </div>
    </div>
</body>
    <script>
        // search function
        const searchfun = () => {
            let filter = document.getElementById('myInput').value.toUpperCase();
            let myTable = document.getElementById('table');
            let mytr = myTable.getElementsByTagName('tr');

            for (let i = 0; i < mytr.length; i++) {
                let tdata = mytr[i].getElementsByTagName('td')[1];

                if (tdata) {
                    let textvalue = tdata.textContent || tdata.innerHTML;

                    if (textvalue.toUpperCase().indexOf(filter) > -1) {
                        mytr[i].style.display = '';

                    }
                    else {
                        mytr[i].style.display = 'none';
                    }
                }
            }
        }
        // function myClickFunction(){
        //     let confirmDel = confirm('Data Will be Erased!! Do you want to Preceed?');
        // }

        function confirmSearch() {
            // let tableBlur = document.getElementById('table');
            // tableBlur.style.filter="blur(10px)";
            alert("Your Search Doesn't Exist !!");
        }

        //scroll features
        const backToTop = document.querySelector('.scrltop');
        window.addEventListener("scroll", scrollFunction);
        function scrollFunction() {
            if (window.pageYOffset > 200) {
                backToTop.style.display = "block";
            }
            else {
                backToTop.style.display = "none";

            }
        }

        let btnScrollTop = document.querySelector(".scrltop");
        btnScrollTop.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behaviour: "smooth",
            });
        });
    </script>

</html>

<!-- html code for upload file 'choose file'  -->
<!-- transition:color 0.2s; -->
<!-- social links -->
<!-- blur popup -->