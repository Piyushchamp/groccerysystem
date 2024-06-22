<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            /* background: #dfe9f5; */
            background: #fee5ec;
        }

        .container {
            display: flex;
        }


        /* Main Section */
        .main {
            position: relative;
            padding: 20px;
            width: 100%;
        }

        .main-top {
            display: flex;
            width: 100%;
        }

        .main-top i {
            position: absolute;
            right: 0;
            margin: 10px 30px;
            color: rgb(110, 109, 109);
            cursor: pointer;
        }

        .main-skills {
            display: flex;
            margin-top: 20px;
        }

        .main-skills .card {
            width: 25%;
            margin: 10px;
            background: #fff;
            text-align: center;
            border-radius: 20px;
            padding: 10px;
            padding-bottom: 25px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .main-skills .card h3 {
            margin: 10px;
            text-transform: capitalize;
        }

        .main-skills .card p {
            font-size: 12px;
        }

        .main-skills .card button {
            background: crimson;
            color: #fff;
            padding: 7px 15px;
            border-radius: 10px;
            margin-top: 15px;
            cursor: pointer;
        }

        .main-skills .card button:hover {
            background: rgb(226, 59, 93);
        }

        .main-skills .card i {
            font-size: 22px;
            padding: 10px;
        }

        /* Courses */
        .main-course {
            margin-top: 20px;
            text-transform: capitalize;
        }

        .course-box {
            width: 100%;
            height: 300px;
            padding: 10px 10px 30px 10px;
            margin-top: 10px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .course-box ul {
            list-style: none;
            display: flex;
        }

        .course-box ul li {
            margin: 10px;
            color: gray;
            cursor: pointer;
        }

        .course-box ul .active {
            color: #000;
            border-bottom: 1px solid #000;
        }

        .course-box .course {
            display: flex;
        }

        .box {
            width: 33%;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            /* background: rgb(235, 233, 233); */
            background: rgb(213, 209, 209);
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .box p {
            font-size: 1rem;
            font-weight: bold;
            margin-top: 5px;
            color: red;
        }

        .box button {
            background: crimson;
            color: #fff;
            padding: 7px 10px;
            border-radius: 10px;
            margin-top: 3rem;
            cursor: pointer;
        }

        .box button:hover {
            background: rgba(0, 0, 0, 0.842);
        }

        .box i {
            font-size: 7rem;
            float: right;
            margin: -20px 20px 20px 0;
        }

        .html {
            color: rgb(25, 94, 54);
        }

        .css {
            color: rgb(104, 179, 35);
        }

        .js {
            color: rgb(28, 98, 179);
        }

        .chart-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .chart {
            width: 45%;
            padding: 20px;
            box-sizing: border-box;
            border: 3px solid black;
            border-radius: 10px;
            box-shadow: 8px 8px 2px black;
        }

        .progress-bar {
            height: 20px;
            background-color: rgb(191, 188, 188);
            border-radius: 5px;
            margin-bottom: 10px;
            margin-top: 20px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            width: 0;
            background-color: red;
            transition: background 0.2s ease-in-out;
        }

        .progress:hover {
            background-color: rgb(246, 34, 34);
        }

        .category {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .categories {
            margin-bottom: 20px;
        }

        .category-label {
            flex: 1;
            /* margin-top: 20px; */
        }

        .category-value {
            margin-left: 10px;
        }

        /* navbar */

        .navtop {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 80px;

        }

        .logo img {
            /* height: 60px; */
            width: 100px;
            mix-blend-mode: color-burn;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 15px;
            background-color: #f1395f;
            color: #fff;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            background: linear-gradient(45deg, #f1395f, #ff5679);
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(45deg, #ff5679, #f1395f);
            /* Change the background color on hover */
            /* transform: scale(1.1) rotate(5deg); Scale up and rotate the button on hover */
            box-shadow: 0px 0px 12px white;
        }

        i {
            background-color: #f1395f;
            color: white;
            margin-right: 5px;
        }

        .list {
            display: flex;
            text-align: center;
            justify-content: space-around;
            /* background: linear-gradient(to left, #ffb6c1, #e91e63); */
            color: #fff;
            width: 364%;
        }

        .list li a {
            text-decoration: none;
        }

        .link {
            text-decoration: none;
            color: white;
        }

        .list li {
            list-style: none;
        }

        .list button {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .searchtext {
            height: 30px;
            width: 375px;
            color: white;
            text-align: center;
            font-size: 14px;
            border-bottom: 2px solid white;
            border-top: none;
            border-left: none;
            border-right: none;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .search {
            background: linear-gradient(to bottom, #2c3e50, #34495e);
        }

        .searchtext:hover {
            background: linear-gradient(45deg, #2c3e50, #34495e);
            box-shadow: inset 0px 0px 12px white;
        }

        .search ::placeholder {
            color: white;
            /* Set the desired color */
        }

        .btn1 {
            background-color: #f1395f;
            color: white;
            border: none;
            border-radius: 6px;
            height: 40px;
            width: 120px;
            background: linear-gradient(45deg, #f1395f, #ff5679);
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn1:hover {
            background: linear-gradient(45deg, #ff5679, #f1395f);
            box-shadow: 0px 0px 12px white;
        }
        .graph{
          background-color:  rgb(213, 209, 209);;
        }
        /* end nav */
    </style>
</head>

<body>
    <div class="container">
        <section class="main">

            <div class="main-top">
                <h1>Dashboard</h1>

                <nav id="navbar">
                    <div class="navbottom">
                        <ul class="list">
                            <button class="btn1"><a href="admin_page.php" class="link"><i
                                        class="fa-solid fa-house"></i>HOME</a></button>
                            <button class="btn1"><i class="fa-solid fa-warehouse"></i>INVENTORY</button>
                            <button class="btn1"><a href="dashboardpanel.html"><i class="fa-solid fa-gauge"></i>DASHBOARD
                                </a></button>
                        </ul>
                    </div>
                    <hr>
                </nav>
            </div>
            <div class="main-skills">
                <div class="card">
                    <i class="fa-solid fa-users"></i>
                    <h3>My Customers</h3>
                    <p>Serving over 1 thousand Customers.</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-truck-field"></i>
                    <h3>Suppliers</h3>
                    <p>Supporting over 100 suppliers.</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-store"></i>
                    <h3>Our Branches</h3>
                    <p>Spreading more than 100 branches.</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <h3>Income</h3>
                    <p>Rapid growth over years.</p>
                    <button>Get Started</button>
                </div>
            </div>

            <div class="chart-container">
                <!-- Inventory Quantity Chart -->
                <div class="chart">
                    <h2>Inventory Quantity</h2>
                    <div class="progress-bar">
                        <div class="progress" style="width: 60%;"></div>
                    </div>
                </div>

                <div class="chart">
                    <h2 class="categories">Products Available</h2>
                    <div class="category">
                        <span class="category-label">Biscuits:</span>
                        <span class="category-value">50%</span>
                    </div>
                    <div class="category">
                        <span class="category-label">Dairy:</span>
                        <span class="category-value">20%</span>
                    </div>
                    <div class="category">
                        <span class="category-label">Chips:</span>
                        <span class="category-value">25%</span>
                    </div>
                    <div class="category">
                        <span class="category-label">Cold Drinks:</span>
                        <span class="category-value">75%</span>
                    </div>
                    <div class="category">
                        <span class="category-label">Dry Fruits:</span>
                        <span class="category-value">85%</span>
                    </div>
                </div>
            </div>


            <!-- end section -->
            <section class="main-course">
                <h1>MY SALES</h1>
                <div class="course-box">
                    <ul>
                        <li class="active">In progress</li>
                        <li>explore</li>
                        <li>incoming</li>
                        <li>finished</li>
                    </ul>
                    <div class="course">
                        <div class="box">
                            <h3>THIS WEEK</h3>
                            <p>80% - Profit</p>
                            <button class="continue">continue</button>
                            <i class="fa-solid fa-chart-simple graph"></i>
                        </div>
                        <div class="box">
                            <h3>THIS MONTH</h3>
                            <p>50% - Profit</p>
                            <button class="continue">continue</button>
                            <i class="fa fa-pie-chart graph" aria-hidden="true"></i>
                        </div>
                        <div class="box">
                            <h3>THIS YEAR</h3>
                            <p>30% - Profit</p>
                            <button class="continue">continue</button>
                            <i class="fa fa-line-chart graph"></i>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</body>

</html>