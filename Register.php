<?php


include('Db_Connect.php');

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif !important;
        }

        .main_div {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .signup{
            margin-bottom: 0px !important;
        }
        @media screen and (max-width:768px) {
            .main_div{
                margin: 30px 0;
            }
        }
    </style>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="rstyle.css">
</head>

<body>
    <div class="main_div">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="u_name" id="name" placeholder="Your Name"  required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="u_email" id="email" placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="u_pass" id="pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="Gender" id="re_pass" placeholder="Gender M/F" required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="Phone_ID" id="re_pass" placeholder="Phone No" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="Register" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<?php

// Register Functionallity =>

if (isset($_POST['Register'])) {
    $Name = mysqli_real_escape_string($Con, $_POST['u_name']);
    $Email = mysqli_real_escape_string($Con, $_POST['u_email']);
    $Password = mysqli_real_escape_string($Con, $_POST['u_pass']);
    $Gender = mysqli_real_escape_string($Con, $_POST['Gender']);
    $Phone = mysqli_real_escape_string($Con, $_POST['Phone_ID']);


    // [$] Checking Email ID Already Exist =>

    $Check_Email_Query  = "SELECT * FROM `users` WHERE `Email`='$Email'";

    $Res = mysqli_query($Con, $Check_Email_Query);

    $Count = mysqli_num_rows($Res);

    if ($Count > 0) {
        ?>
        <script>
            swal("Good job!", "User Account Already Exist !!", "success");
        </script>
        <?php
    } else {
        $Insert_User_Query = "INSERT INTO `users`( `Name`, `Email`, `Password`, `Gender`, `Phone`) VALUES ('$Name','$Email','$Password','$Gender','$Phone')";

        $Result_Insert = mysqli_query($Con, $Insert_User_Query);

        if ($Result_Insert) {
            ?>
            <script>
                swal("Good job!", "Sign Up Succesfull !!", "success");
            </script>
            <?php
        } else {
            ?>
            <script>
                swal("Error!", "Error In Sign Up !!", "error");
            </script>
            <?php
        }
    }
}
