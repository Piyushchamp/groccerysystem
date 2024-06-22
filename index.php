<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="inddex.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  <div class="heading">
    <div class="logo">
      <img src="../grocerysystem/images/logo.jpg" alt="logo" class="imgclass">
    </div>
    <div class="head">INVENTORY MANAGEMENT</div>
    <div class="btn">
      <!-- <a href="register_form.php" role="button" class="logout"><i class="fa-solid fa-right-to-bracket"></i> Register</a>
      <a href="login_form.php" role="button" class="logout"><i class="fa-solid fa-right-to-bracket"></i> Login</a> -->
      <a href="register_form.php"><button><i class="fa-solid fa-right-to-bracket"></i>Signup</button></a>
      <a href="login_form.php"><button><i class="fa-solid fa-right-to-bracket"></i>login</button></a>
    </div>
  </div>
  <div class="headline">
    <h1>"Effortless Online Store Management Made Simple!"</h1>
  </div>
  <div class="signup">
    Sign  Up  It's  Free!
  </div>
  <div class="para">
    <p>
      Welcome to our Grocery Store Management System, your all-in-one solution for efficient and seamless grocery store operations. Our user-friendly platform is designed to streamline inventory management, automate sales processes, and enhance overall productivity. With features like real-time stock tracking our system empowers grocery store owners to stay in control and make informed business decisions. Whether you're a small local market or a growing supermarket chain, our Grocery Store Management System is tailored to meet your unique needs. Experience the convenience of a modern, digitally-driven approach to managing your grocery store, ensuring a smooth and delightful shopping experience for both you and your.</p>
  </div>
  <div class="about">
    <h1 class="head1">About Us</h1>
    <div class="content">
      <div class="box slide-in">
        <h2>Innovative Solutions</h2>
        <p>We're dedicated to constantly evolving and offering the latest tools and features. Our commitment to innovation ensures that you always have access to cutting-edge .</p>
      </div>
      <div class="box slide-in">
        <h2>Continuous Improvement</h2>
        <p>Feedback matters. We're constantly listening to our users' feedback and refining our platform to better serve your evolving needs. Your input drives our improvements.</p>
      </div>
      <div class="box slide-in">
        <h2>Accessible Support</h2>
        <p>We believe in accessible and prompt support. Our dedicated support team is here for you, ready to assist and guide you through any challenges you might face while using our platform.</p>
      </div>
    </div>
  </div>
  <!-- <hr> -->
  <section class="section-container1">
    <h1 class="about head1">EVENTS & WORKSHOP</h1>
    <div id="services1">
      <div class="box1">

        <img src="../grocerysystem/images/services4.jpeg" alt="">
        <p class="center1">Customer-Centric Features <br><br> Easily browse through our extensive inventory, add products to your cart, and place orders seamlessly. Our intuitive interface ensures a hassle-free shopping experience. Create and manage personalized shopping lists for quick and efficient reordering.</p>
      </div>
      <div class="box1">
        <img src="../grocerysystem/images/services3.jpeg" alt="">
        <p class="center1">Store Owner Benefits <br><br>
          Our system assists store owners in managing their inventory effectively. Track stock levels, receive alerts for low inventory, and streamline the restocking process.Process and fulfill orders efficiently with our order management tools. 
        </p>
      </div>
      <div class="box1">
        <img src="../grocerysystem/images/services5.jpeg" alt="">
        <p class="center1">Security and Reliability <br><br>
          Shop with confidence knowing that our system prioritizes the security of your transactions. We implement industry-standard security measures to protect your personal and financial information</p>
      </div>
    </div>
  </section>
  <section class="section-container1">
    <div id="services2">

      <div class="box1">

        <img src="../grocerysystem/images/services6.jpeg" alt="">
        <p class="center1">AUG 22,2022 <br><br>Info Session <br>Eduhub Community Tech Conference Jaipur 2022 University of
          Engineering & Management-Jaipur</p>
      </div>
      <div class="box1">
        <img src="../grocerysystem/images/services7.jpeg" alt="">
        <p class="center1">OCT 6,2022 <br><br>Info Session <br>Entry Steps to the WEB 3.0 Universe University of Engineering
          & Management-Jaipur </p>
      </div>
    </div>
  </section>
  <script>
        // Intersection Observer options
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5,
        };

        // Intersection Observer callback
        const handleIntersection = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                } else {
                    entry.target.classList.remove('fade-in');
                }
            });
        };

        // Create Intersection Observer
        const observer = new IntersectionObserver(handleIntersection, options);

        // Observe each section
        const sections = document.querySelectorAll('.section-container1');
        sections.forEach((section) => {
            observer.observe(section);
        });
    </script>
  <hr>
  <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
        <form action="">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="name">Email: </label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="name">Phone Number: </label>
                <input type="number" name="number" id="phone-number" placeholder="Enter Your Number">
            </div>
            <div class="form-group">
                <label for="name">Queries: </label>
                <textarea name="message" id="message" cols="30" rows="5"
                    placeholder="Write your Queries"></textarea>

            </div>
        </form>
    </div>
    <div class="centerbtn">
      <button class="submitbutton">SUBMIT</button>
    </div>
</section>
<script>
  // Intersection Observer options
const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,
};

// Intersection Observer callback
const handleIntersection = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            entry.target.classList.remove('fade-out');
        } else {
            entry.target.classList.remove('fade-in');
            entry.target.classList.add('fade-out');
        }
    });
};

// Create Intersection Observer
const observer = new IntersectionObserver(handleIntersection, options);

// Observe the contact section
const contactSection = document.getElementById('contact');
observer.observe(contactSection);

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
            <a class="face" href="https://www.facebook.com/"><span class="sm face"><i class="fa-brands fa-facebook"></i>Facebook</span></a> |
            <a class="twit" href="https://www.twitter.com/"><span class="sm twit"><i class="fa-brands fa-twitter"></i>Twitter</span></a> |
            <a class="insta" href="https://www.instagram.com/"><span class="sm insta"><i class="fa-brands fa-instagram"></i>Instagram<span></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p> &copy; 2023. All rights reserved.</p>
    </div>
</footer>
</body>
</html>