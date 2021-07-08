<?php

require ('dbconnection.php');

    // Define variables and initializes with empty values
    $fullName = $emailAddress = $phoneNumber = "";
    $fullNameError = $emailAddressError = $phoneNumberError = "";


   //Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Function which is going to be used for validation
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if (empty($_POST['fn'])){
            $fullNameError = "Please Fill in your Full Name.";
        }else{
            $fullName = test_input($_POST['fn']);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fullName)) {
                $fullNameError = "Only letters allowed";
            }
        }

        if (empty($_POST['email'])){
            $emailAddressError = "Please Fill in your Email Address.";
        }else{
            $emailAddress = test_input($_POST['email']);

            // Remove all illegal characters from email
            $emailAddress = filter_var($emailAddress, FILTER_SANITIZE_EMAIL);

            // check if e-mail address is well-formed
            if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
                $emailAddressError = "Invalid email format";
            }
        }

        if (empty($_POST['number'])){
            $phoneNumberError = "Please Fill in your Phone Number Correctly.";
        }else{
            $phoneNumber = test_input($_POST['number']);
        }
    
    


        //checking input errors before inserting in database
        if(empty($fullNameError) && empty($emailAddressError) && empty($phoneNumberError)){ 
       
        //Prepare an insert statement
        $sql = "INSERT INTO customerinfo (FullName, email, PhoneNumber) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($dbconnect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_fullname, $param_emailaddress, $param_number);
            
            // Set parameters
            $param_fullname = $fullName;
            $param_emailaddress = $emailAddress;
            $param_number = $phoneNumber;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("Location: https://sellforprofit.com.ng/7-simple-steps-training/");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

}

?>