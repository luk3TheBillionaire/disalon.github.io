<!-- Subtask 3 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Index Css -->
        <link rel="stylesheet" href="public/css/index.css">
        
        <!-- CDn Links -->
        
        <title>Customer Login</title>
    </head>
    <body>

    <?php
     if(isset($_POST['login'])){
        $email  =$_POST['userEmail'];
        $password=$_POST['userPassword'];
        
        echo $email . ' ' . $password;

    }
    
    ?>
    <!-- Header Section -->
    <section class="header-section login-header" id="header-section">
        <div class="nav-container" id="nav-container">
            <div class="logo">
                <a href="index.html">Di'Salon</a>
            </div>
            <div class="tab" id="tab">
                <ul class="nav-items-container">
                    <li class="nav-tab-item">
                        <a href="#">Products</a>
                        
                    </li>
                    <li class="nav-tab-item">
                        <a href="AboutUs.html">About </a>
                        
                    </li>
                    <li class="nav-tab-item">
                        <a href="contactUs.html">Contact Us </a>
                    </li>
                </ul>
            </div>
            <div class="buttons-container">
                <a class="login-btn" href="/loginPage.php">Login</a>
                <a class="register-btn" href="/registerPage.php">Register</a>
            </div>
        </div>
        <div class="form-container">
            <div class="section-heading">

                <h1 class="heading">
                    Customer
                    <?php
        require_once('config.php')
        ?>
                </h1>
                <h2 class="heading">
                    Login
                </h2>
            </div>
            
            <form id="myForm" action="loginPage.php" method="post">
                <div>
                    <label for="userEmail">Email</label>
                    <br>
                    <input type="email" name="userEmail" id="userEmail">
                    <br>
                    <label for="userPassword">Confirm Password</label>
                    <br>
                    <input type="password" name="userPassword" id="userPassword">
                    <br>
                    <button class="btn" name="login" type="submit">Login</button>
                    
                </div>
            </form>
        </div>
    </section>
    <!-- Footer Section -->
    <section class="footer-section" id="footer-section">
        <div class="footer-content-container">
            <div class="footer-content-left-col footer-col">
                <h2>Di'Salon</h2>
                <div class="footer-content-socials">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="footer-content-right-col footer-col">
                <h3 class="footer-content-links"><a href="Products.html">Products</a></h3>
                <h3 class="footer-content-links"><a href="AboutUs.html">About Us</a></h3>
                <h3 class="footer-content-links"><a href="contactUs.html">Contact Us</a></h3>
            </div>
        </div>
        <div class="footer-creds">
            <span>©All Rights Reserved Made With ❤️ By Tshedza Mannye</span>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/38182aa940.js" crossorigin="anonymous"></script>
</html>