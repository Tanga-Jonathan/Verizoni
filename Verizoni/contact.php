<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Contact</title>
</head>
<body style="background-color:blueviolet;">
    
    
 <section class="contact">
    <header>
        <nav>         
            <a href="index.php" class="active">Home</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contacts</a>
            <a href="Info.php">Info</a>
        </nav>
    </header>
        <div class="content">
        <h2 style="color: #fff; margin-top: 50px;"><u>Contact Us</u></h2>
        <p>Verizon General Trading Co. Ltd is managed by qualified Directors and senior
            management, staff is our most valuable asset. The art of profession and qualified
            personnel gives us confidence to meet your highest possible expectations. We
            provide competitive pricing win-win packages, which helped us build aformidable
            reputation to date. The company prides itself in being tne preferred few companies
            that give finest to any given work.</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fas fa-street-view" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Munuki, Suk Melisha <br>
                        Juba - South Sudan</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+211 917 743 706<br>
                    +211 921 645 143</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>verizongentra2020@gmail.com</p>
                </div>
            </div>

        </div>
        <div class="contactForm">
            <form action="emailform.php" method="post">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea required="required"></textarea>
                    <span>Type your Message</span>
                </div>
                <div class="inputBox">
                    <input type="submit" value ="Send">
                    
                </div>
            </form>
        </div>        
    </div>
 </section>



 

 <?php if (isset($error)) : ?>
  <p style="color: red;"><?php echo $error; ?></p>
<?php elseif (isset($success)) : ?>
  <p style="color: green;"><?php echo $success; ?></p>
<?php endif; ?>

</body>
</html>