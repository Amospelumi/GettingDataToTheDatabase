
<?php require ('backend.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">


</head>
<body>


    <div class="container">
        <div class="demo"> 
           <h1> SPECIAL OFFER </h1> 
        </div>

        <div class="box">
            <h1>Receive 200mb <br>
            Internet Data as Reward for <br> 
            Watching a Short Video<br>
            Presentation To The End.
            </h1><br>
            
            <div class="img" style="margin-left: 150px;"><img src="50cashcard3.png" alt="Presentation week" height="70%" width="70%"></div><br><br>

            <h2 style="color:rgb(14, 14, 141);"> Fill Out the Form Below to Watch <br>Presentation </h2><br><br>

            <div class="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    
                    

                    <label for="fn">Full Name:</label><br> <input type="text" name="fn" placeholder="Full Name" size=70 ><span class="error">*</span><br>
                    <span class="error"><?php echo $fullNameError;?></span><br><br>

                    <label for="email">Email Address:</label><br> <input type="text" name="email" placeholder="example@gmail.com" size=70 ><span class="error">*</span><br>
                    <span class="error"><?php echo $emailAddressError;?></span><br><br>

                    <label for="Number">Phone Number:</label><br> <input type="text" name="number" placeholder="09012345678"  maxlength="11"  size=70 ><span class="error">*</span><br>
                    <span class="error"><?php echo $phoneNumberError;?></span><br><br><br>

                    <button type="submit"> Click Here To Watch Now >> </button>
                    
                </form> 

                 <i><h5 style="color:black;"> This Offer is Only Valid for Nigerian WhatsApp Numbers.</h5></i>
            </div>
        
        </div>
        
    </div>

    <div class="footer">
        <p> &#169; <?php echo date('Y'); ?> Amos-Pelumi </p>
    </div>



</body>
</html>