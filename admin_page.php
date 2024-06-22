<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- heading/navbar section -->
    <div class="heading">
        <div class="logo">
            <img src="../grocerysystem/images/logo.jpg" alt="logo" class="imgclass">
        </div>
        <div class="head">INVENTORY MANAGEMENT</div>
        <!-- <button class="logout"><i class="fa-solid fa-power-off "></i>LOG OUT</button> -->
        <div class="dropdown">
            <button class="logout"><i class="fa-solid fa-user"></i>User<span class="arrow-down"></span></button>
            <div class="dropdown-content">
                <a href="login_form.php" class="btnw">Login</a>
                <a href="register_form.php" class="btnw">Register</a>
                <a href="logout.php" class="btnw">Logout</a>
                <!-- Add more options as needed -->
            </div>
        </div>
    </div>

    <nav id="navbar">
        <div class="navbottom">
            <ul class="list">
                <button class="btn1"><a href="admin_page.php" class="link"><i
                            class="fa-solid fa-house"></i>HOME</a></button>
                <button class="btn1"><i class="fa-solid fa-warehouse"></i>INVENTORY</button>
                <button class="btn1 "><a href="dashboardpanel.php" class="link"><i class="fa-solid fa-gauge"></i>DASHBOARD</a></button>
                <div class="search">
                    <input type="text" placeholder="search" class="searchtext search">
                    <button class="btn search btnw"><i class="fas fa-search"></i> SEARCH</button>
                </div>
            </ul>
        </div>
        <hr>
    </nav>
    <!-- end heading/navbar section end-->

    <div class="containerw">
        <div class="contentw">
            <h3 style="color: #333333;"><span><i class="fa-solid fa-address-card"></i>Seller</span></h3>
            <h1 class="welcomeh1" style="color: #333333;">Welcome <span>
                    <?php  echo $_SESSION['admin_name'] ?>
                </span></h1>
            <p>This is an Admin Page</p>
        </div>
    </div>

    <!-- page body start -->

    <div class="slideshow">
        <div class="wrapper">
            <img src="../grocerysystem/images/grocery1.jpg" alt="">
            <img src="../grocerysystem/images/grocery2.jpg" alt="">
            <img src="../grocerysystem/images/grocery3.jpg" alt="">
            <img src="../grocerysystem/images/grocery3.jpg" alt="">
        </div>
    </div>
    <div class="rightcontent">
        <h1>Tech Grocery</h1>
        <p>Welcome to our Inventory Management Project, where efficiency meets convenience! Streamline your grocery
            store operations effortlessly with our user-friendly system. From inventory management and order processing
            to customer engagement, our solution empowers you at every step.Track real-time inventory levels, automate
            reordering, and minimize stockouts with our robust inventory management module. Seamlessly process customer
            orders, ensuring prompt and accurate deliveries. </p>
    </div>
    <hr>
    <div id="maincontainer">
        <div class="fourboxes">
            <hr>
            <h1 style="color: #333333;">ADMINISTRATION</h1>
        </div>

        <div id="firstrow">

            <div class="container">
                <img src="images/download.jpeg" alt="">
                <a href="manage.html" class="maincontainerhref">
                    <p class="center containerheading">MANAGE CUSTOMER</p>
                </a>
                <p class="center">In the realm of inventory management, administrators play a pivotal role in
                    maintaining control and security over the system. Administrators have the responsibility of
                    overseeing user access and permissions, ensuring that team members are granted appropriate levels of
                    authorization. This involves the careful assignment of roles and permissions to individual users,
                    tailoring access rights to specific functionalities and data sets. </p>
                <button class="click btn1"><a href="indexcustomer.php" class="containerbtn">VIEW</a></button>
            </div>
            <div class="container">
                <img src="images/services7.jpeg" alt="">
                <a href="manage.html" class="maincontainerhref">
                    <p class="center containerheading">MANAGE DEBT</p>
                </a>
                <p class="center">Administrators wield the ability to customize the inventory management system to align
                    with the unique needs and workflows of the business. This includes configuring product categories,
                    setting reorder points, and implementing alert systems for low stock levels. The customization
                    process is crucial for tailoring the system to specific industry requirements, ensuring that it
                    aligns seamlessly with the organization's objectives.</p>
                <button class="click btn1"><a href="indexdebts.php" class="containerbtn">VIEW</a></button>
            </div>
        </div>
        <div id="secondrow">
            <div class="container">
                <img src="images/service17.jpeg" alt="">
                <a href="manage.html" class="maincontainerhref">
                    <p class="center containerheading">MANAGE PURCHASE</p>
                </a>
                <p class="center">Administrators are armed with powerful tools that empower them to monitor and track
                    inventory levels with precision. Through centralized dashboards and advanced reporting systems,
                    administrators gain real-time insights into various aspects of inventory management. This includes
                    but is not limited to current stock levels, sales trends, and the performance of individual
                    products.  </p>
                <button class="click btn1"><a href="indexpurchase.php" class="containerbtn">VIEW</a></button>
            </div>
            <div class="container">
                <img src="images/services4.jpeg" alt="">
                <a href="manage.html" class="maincontainerhref">
                    <p class="center containerheading">MANAGE SALES</p>
                </a>
                <p class="center">Efficient order management is at the core of successful inventory administration.
                    Administrators oversee the entire lifecycle of orders, from the initiation of purchase orders to the
                    fulfillment of customer orders. This involves coordinating and streamlining communication between
                    different departments, such as procurement, warehousing, and shipping. Administrators work towards
                    optimizing order workflows to enhance efficiency and reduce processing times</p>
                <button class="click btn1"><a href="managepurchase.html" class="containerbtn">VIEW</a></button>
            </div>
        </div>
        <script>
            // Add this JavaScript for animation
            document.addEventListener("DOMContentLoaded", function () {
                var containers = document.querySelectorAll('.container');

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                function handleScroll() {
                    containers.forEach(function (container) {
                        if (isElementInViewport(container)) {
                            container.style.opacity = 1;
                            container.style.transform = 'translateY(0)';
                        } else {
                            container.style.opacity = 0.4;
                            container.style.transform = 'translateY(20px)';
                        }
                    });
                }

                // Call handleScroll on page load
                handleScroll();

                // Add scroll event listener
                window.addEventListener('scroll', handleScroll);
            });
        </script>


        <div class="bg">
            <p class="para">

            <h1 class="heading-content">TECHNOLOGIES WE ARE DISCUSSING</h1>
            </p>
            <section class="secright">
                <div class="paras">
                    <h1 class="tag big">Database Management and Storage
                    </h1>
                    <p class="subtag small">At the core of modern inventory management systems lies robust database
                        management technology. These systems leverage relational databases, such as MySQL, PostgreSQL,
                        or MongoDB, to efficiently store and organize vast amounts of product and transaction data. The
                        use of database management systems enables quick and reliable retrieval of information,
                        facilitating seamless inventory tracking and management. Through the implementation of
                        structured query languages (SQL) and advanced indexing techniques, these databases ensure that
                        operations such as searching, updating, and reporting are executed with optimal speed and
                        accuracy. This foundational technology forms the backbone of inventory systems, providing a
                        secure and scalable infrastructure for managing diverse product catalogs and transaction
                        histories.

                    </p>
                </div>
                <div class="thumbnail">
                    <img src="images/services2.jpeg" alt="image" id="imgfluid">
                </div>
            </section>
            <section class="secleft">
                <div class="paras">
                    <h1 class="tag big">Barcode and RFID Technology:
                    </h1>
                    <p class="subtag small">Inventory management is significantly enhanced through the utilization of
                        barcode and Radio-Frequency Identification (RFID) technologies. Barcoding systems, employing
                        unique identifiers for each product, enable swift and accurate tracking of items throughout the
                        supply chain. RFID technology takes this a step further by allowing for real-time, wireless
                        communication between tags and RFID readers, providing instant visibility into inventory
                        movements. These technologies streamline processes such as order fulfillment, receiving, and
                        stock replenishment, minimizing human error and improving overall efficiency. Integration with
                        inventory management software ensures that the status and location of each item can be monitored
                        in real time, optimizing inventory accuracy and reducing the likelihood of stockouts or
                        overstock situations. </p>
                </div>
                <div class="thumbnail">
                    <img src="images/services9.jpeg" alt="image" id="imgfluid">
                </div>
            </section>
            <section class="secright">
                <div class="paras">
                    <h1 class="tag big">Cloud-Based Solutions:
                    </h1>
                    <p class="subtag small">The advent of cloud computing has revolutionized inventory management by
                        offering scalable and accessible solutions. Cloud-based inventory management systems, hosted on
                        platforms like Amazon Web Services (AWS), Microsoft Azure, or Google Cloud Platform, provide
                        businesses with the flexibility to store and access data remotely. This eliminates the need for
                        on-premise servers and allows for seamless collaboration across multiple locations. Cloud-based
                        solutions also facilitate automatic software updates, ensuring that businesses always have
                        access to the latest features and security patches. Additionally, the scalability of cloud
                        solutions accommodates businesses of varying sizes, from small enterprises to large
                        corporations, enabling them to adapt their inventory management systems to changing demands
                        without the need for significant infrastructure investment. </p>
                </div>
                <div class="thumbnail">
                    <img src="images/services12.jpeg" alt="image" id="imgfluid">
                </div>
            </section>
            <section class="secleft">
                <div class="paras">
                    <h1 class="tag big">Data Analytics and Predictive Modeling
                    </h1>
                    <p class="subtag small">Advanced analytics and predictive modeling technologies play a pivotal role
                        in optimizing inventory management strategies. Businesses leverage data analytics tools, such as
                        Tableau or Power BI, to derive actionable insights from historical and real-time data.
                        Predictive modeling algorithms, often powered by machine learning, analyze patterns and trends
                        to forecast demand, identify seasonality, and optimize stocking levels. These technologies
                        empower businesses to make informed decisions, reducing excess inventory costs, preventing
                        stockouts, and enhancing overall supply chain efficiency. .</p>
                </div>
                <div class="thumbnail">
                    <img src="images/services18.jpeg" alt="image" id="imgfluid">
                </div>
            </section>
        </div>


        <script>
            // Add this JavaScript for animation
            document.addEventListener("DOMContentLoaded", function () {
                var paras = document.querySelectorAll('.paras,.thumbnail img');

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                function handleScroll() {
                    paras.forEach(function (para) {
                        if (isElementInViewport(para)) {
                            para.style.opacity = 1;
                            para.style.transform = 'translateY(0)';
                        } else {
                            para.style.opacity = 0.4;
                            para.style.transform = 'translateY(20px)';
                        }
                    });
                }

                // Call handleScroll on page load
                handleScroll();

                // Add scroll event listener
                window.addEventListener('scroll', handleScroll);
            });
        </script>
        <footer id="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h2 class="foot-h2">Services</h2>
                    <span class="foot-container">
                        <ul>
                            <li class="foot-items">
                                Inventory Management
                            </li>
                            <li class="foot-items">
                                Customer Management
                            </li>
                            <li class="foot-items">
                                Debt Management
                            </li>
                            <li class="foot-items">
                                Purchase Management
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="footer-section">
                    <h2 class="foot-h2">Contacts</h2>
                    <p class="contacts">Email: kiranastore@gmail.com</p>
                    <p class="contacts">Phone: 000-000-000</p>


                </div>
                <div class="footer-section">
                    <h2 class="foot-h2">Follow Us</h2>
                    <a class="face" href="https://www.facebook.com/"><span class="sm face"><i
                                class="fa-brands fa-facebook"></i> Facebook</span></a> |
                    <a class="twit" href="https://www.twitter.com/"><span class="sm twit"><i
                                class="fa-brands fa-twitter"></i> Twitter</span></a> |
                    <a class="insta" href="https://www.instagram.com/"><span class="sm insta"><i
                                class="fa-brands fa-instagram"></i> Instagram<span></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p> &copy; 2023. All rights reserved.</p>
            </div>
        </footer>
</body>

</html>