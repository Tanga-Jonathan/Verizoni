<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Contact</title>
</head>
<body>
    
    
 <section class="contact">
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