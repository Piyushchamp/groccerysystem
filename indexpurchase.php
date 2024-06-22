<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Details</title>
    <link rel="stylesheet" href="purchase.css">
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
        <h2 class="headingcustomer">Purchase Details</h2>
        <div class="parentbutton">
        <a class="btn" href="/grocerysystem/createpurchase.php" role="button"> <span class="plus"> &plus; </span> New Product</a>
        <input class="search" type="text" name="" id="myInput" placeholder=" Search by Supplier Name...."
        onkeyup="searchfun()">
        <button onclick="confirmSearch()" class="searchbtn">Search</button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="parenttable">
            <table id="table">
                <thead class="thead">
                    <tr class="row">
                        <th class="head">Sl.No.</th>
                        <th class="head">Supplier</th>
                        <th class="head">Description</th>
                        <th class="head">Contact</th>
                        <th class="head">Date/Time</th>
                        <th class="head">Product</th>
                        <th class="head headqty">Quantity</th>
                        <th class="head headprice">Price</th>
                        <th class="head headnetprice">Net Price</th>
                        <th class="head">Actions</th>
                    </tr>
                </thead>
                <tbody class="tbody">
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

                        //Read all data from table
                        $sql = "SELECT * FROM `purchasetable` ";
                        $result = $connection->query($sql);

                        if(!$result){
                            die("Invalid Query: " . $connection->error);
                        }
                        //read data of each row
                        while($row = $result->fetch_assoc())
                        {
                    ?>
                    <tr class='row'>
                        <td class='data'>
                            <?php echo $row['id'] ?>
                        </td>
                        <td class='data'>
                            <?php echo $row['supplier'] ?>
                        </td>
                        <td class='data'>
                            <?php echo $row['description'] ?>
                        </td>
                        <td class='data'>
                            <?php echo $row['contact'] ?>
                        </td>
                        <td class='data'>
                            <?php echo $row['created_at'] ?>
                        </td>
                        <td class='data'>
                            <div class='productcontainer'>
                                <figure class='img-container'>
                                    <img id='chosen-image' src="<?php echo $row['product'] ?>" height="100px" width="100px">
                                    <figcaption id='file-name'>Product Image</figcaption>
                                </figure>
                        </td>
                        <td class='data qty'> <input class='inputfield' type='text' onkeyup='quantityFunc(this)'> </td>
                        <td class='data price'> <input class='inputfield' type='text' onkeyup='priceFunc(this)'></td>
                        <td class='data netprice'>0</td>
                        <td class='data'>
                            <form action="editpurchase.php" method="GET">
                                <input type="hidden" class="btn-sme" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn-sme">Edit</button>
                            </form>
                            <form action="deletepurchase.php" method="POST" onsubmit="return confirmDelete();">
                                <input type="hidden" class='btn-smd' name='delete_id' value="<?php echo $row['id'] ?>">
                                <button type="submit" class="btn-smd" name='delete'> DELETE</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        };
                    ?>
                </tbody>
                <table id="netTotalTable">
                    <tfoot class="tfoot">
                        <tr class="row frow">
                            <th class="head fhead" colspan="8">netTotal</th>
                            <td class="data fdata" id="total">0</td>
                        </tr>
                    </tfoot>
                </table>
            </table>
            </div>
        </form>

        <!-- scroll top -->
        <div id="scrolltop">
            <button class="scrltop">
                <p class="uparrow"> &#8686; </p>
            </button>
        </div>

        <!-- JAVASCRIPT -->
        <script>

            function confirmDelete() {
                return confirm("Are you sure you want to delete?");
            }
            const total = document.getElementById('total');
            const netPrice = document.getElementsByClassName('netprice');

            function totalResult() {
                let cal = 0;
                for (let i = 0; i < netPrice.length; i++) {
                    cal = cal + parseInt(netPrice[i].innerText);
                }
                total.innerHTML = cal;
            }

            function quantityFunc(q) {
                const priceValue = q.parentElement.parentElement.children[7].children[0].value;
                q.parentElement.parentElement.children[8].innerHTML = q.value * priceValue;
                totalResult();
            }

            function priceFunc(p) {
                const quantityValue = p.parentElement.parentElement.children[6].children[0].value;
                p.parentElement.parentElement.children[8].innerHTML = p.value * quantityValue;
                totalResult();
            }

            // product image

            // let uploadButton = document.getElementById("upload-button");
            // let chosenImage = document.getElementById("chosen-image");
            // let fileName = document.getElementById("file-name");

            // uploadButton.onchange = () => {
            //     let reader = new FileReader();
            //     reader.readAsDataURL(uploadButton.files[0]);
            //     reader.onload = () => {
            //         chosenImage.setAttribute("src",reader.result);
            //     }
            //     fileName.textContent = uploadButton.files[0].name.split('.')[0];
            // }

            // scroll function
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

            // Search function 

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

            // Confirm Search
            function confirmSearch() {
                alert("Your Search Doesn't Exist !!");
            }
        </script>
    </div>
</body>

</html>