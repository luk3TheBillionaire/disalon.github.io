
<!-- Subtask 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Index Css -->
    <link rel="stylesheet" href="public/css/index.css">

    <!-- CDn Links -->
    
    <title>Customer Registration</title>
</head>
<body>
    <?php

    // Add new user to the database

    if(isset($_POST['register'])){
        $name = $_POST['userName'];
        $surname=$_POST['userSurname'];
        $email=$_POST['userEmail'];
        $phonenumber=$_POST['userPhone'];
        $password=$_POST['userPassword'];
        try{
            $sql = 'INSERT INTO users (name,surname,email,phone,password) VALUES(?,?,?,?,?)';
            $stmtinsert = $db->prepare($sql);
            $result=$stmtinsert->execute([$name,$surname,$email,$phonenumber,$password]);
        }catch(Exception $e){
            echo 'Error:' . $e->getMessage(); 
        }
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
                        <a href="Products.html">Products</a>
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
                    <h1>Register</h1>
                        <?php
                            require_once('config.php')
                        ?>

                </div>
                
                <form action="registerPage.php" id="myForm">
                    <div>
                        
                        <label for="userName">Name</label>
                        <input type="text" name="userName" id="userName">
                        <br>
                        <label for="userSurname">Surname</label>
                        <input type="text" id="userSurname" name="userSurname">
                        <br>
                        <label for="userEmail">Email</label>
                        <input type="email" name="userEmail" id="userEmail" >
                        <br>
                        <label for="userPhone">Phone Number</label>
                        <input type="tel" name="userPhone" id="userPhone">
                        <br>
                        <label for="createPass">Create Password</label>
                        <br>
                        <input type="password" name="createPass" id="createPass" required>
                        <br>
                        <label for="userPassword">Confirm Password</label>
                        <br>
                        <input type="password" name="userPassword" id="userPassword" required>
                        <br>
                        <fieldset>
                            <legend> Gender </legend>
                            
                            <div class="radio-btns">
                                <input type="radio" value="Male" name="Gender" id="radMale">
                                <label for="radMale">Male</label>
                            </div>
                            <div class="radio-btns">
                                <input type="radio" value="Female" name="Gender"id="radFemale">
                                <label for="radFemale">Female</label>
                            </div>
                        </fieldset>    
                        <button  class="btn" name="register" type="submit">Register</button>
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
        <script src="https://kit.fontawesome.com/38182aa940.js" crossorigin="anonymous"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script src="/public/js/registration.js"></script>
    </body>
</html>