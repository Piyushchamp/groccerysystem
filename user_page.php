<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Myntra Functional Clone</title>
    <link rel="stylesheet" href="userindex.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
</head>

<body>
    <header>
        <div class="logo_container">
            <a href="#"><img class="myntra_home" src="/images/logo.jpeg" alt="Myntra Home"></a>
        </div>
        <nav class="nav_bar">
            <a href="#">Biscuits</a>
            <a href="#">Dairy</a>
            <a href="#">Chips</a>
            <a href="#">Cold Drinks</a>
            <a href="#">Dry Fruits</a>
            <a href="#">Discounts <sup>New</sup></a>
        </nav>
        <div class="search_bar">
            <span class="material-symbols-outlined search_icon">search</span>
            <input class="search_input" placeholder="Search for products, brands and more">
        </div>
        <div class="action_bar">
            <div class="action_container">
                <span class="material-symbols-outlined action_icon">person</span>
                <span class="action_name">Profile</span>
            </div>

            <div class="action_container">
                <span class="material-symbols-outlined action_icon">favorite</span>
                <span class="action_name">Wishlist</span>
            </div>

            <a class="action_container" href="pages/bag.html">
                <span class="material-symbols-outlined action_icon">shopping_bag</span>
                <span class="action_name">Bag</span>
                <span class="bag-item-count">0</span>
            </a>
        </div>
    </header>
    <main>
        <div class="items_container"></div>
    </main>
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
    <script src="data/items.js"></script>
    <script src="scripts/index.js"></script>
    <script src="scripts/bag.js"></script>
</body>

</html>