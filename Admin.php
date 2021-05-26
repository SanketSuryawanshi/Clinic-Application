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
    <title>Login User</title>
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

        .signup {
            margin-bottom: 0px !important;
        }
    </style>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="rstyle.css">
</head>

<body>

    <div class="main_div">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="Register.html" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Admin Log In</h2>
                        <form method="POST" class="register-form" style="margin-top: 5rem;" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="User_Email" id="your_name" placeholder="Your Email ID" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="User_Password" id="your_pass" placeholder="Your Password" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" style="width: 300px;" name="Login" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<?php


// [$] Login Functionallity  =>

if(isset($_POST['Login'])){
    
    $User_Email_ID = mysqli_real_escape_string($Con,$_POST['User_Email']);
    $User_Email_Pass = mysqli_real_escape_string($Con,$_POST['User_Password']);

    if("Admin"==$User_Email_Pass && $User_Email_ID=="Admin@gmail.com"){
        ?>
            <script>
                swal("Good Job", " Login Successful !!", "success");
            </script>
        <?php
            $_SESSION['Email'] = "Admin@gmail.com";
            $_SESSION['Pass'] = "Admin";
        ?>
            <script>
            setTimeout(() => {
                window.location.href = "admin_panel.php";
            }, 3000);
            </script>
        <?php
        }else{
            ?>
                <script>
                    swal("Error!", "Password Not Matched !!", "error");
                </script>
            <?php
        }
        
}



?>
