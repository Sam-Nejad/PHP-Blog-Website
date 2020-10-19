<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script>
            function preventEvent()
            {
                if (document.forms["form"]["email"].value==="" && document.forms["form"]["password"].value==="")  {
                    event.preventDefault();
                    document.getElementById("email").style.borderColor = "red";
                    document.getElementById("password").style.borderColor = "red";
                    window.alert("Please fill out all required fields");
                }
                else if (document.forms["form"]["email"].value==="") {
                    event.preventDefault();
                    document.getElementById("email").style.borderColor = "red";
                    window.alert("Please fill out the email field");
                }
                else if (document.forms["form"]["password"].value==="") {
                    event.preventDefault();
                    document.getElementById("password").style.borderColor = "red";
                    window.alert("Please fill out the password field");
                }
                if (document.forms["form"]["email"].value!=="") {
                    document.getElementById("email").style.borderColor = "initial";
                }
                if (document.forms["form"]["password"].value!=="") {
                    document.getElementById("password").style.borderColor = "initial";
                }
            }
        </script>
    </head>
    <body>
        <header>
            <div class="header-login">
                <?php
                    if (!isset($_SESSION['userId'])) {
                        echo '<body class="text-center">
                              <form id="form" name="form" class="form-signin" action="includes/login.php" method="post" onsubmit="preventEvent()">
                              <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                              <i class="fas fa-envelope prefix grey-text"></i>
                              <input id="email"type="email" name="mailuid" placeholder="E-mail...">
                              </div>
                              
                              <div class="md-form mb-4">
                              <i class="fas fa-lock prefix grey-text"></i>
                              <input id="password" type="password" name="pwd" placeholder="Password...">
                              </div>
                              
                              <div class="modal-footer d-flex justify-content-center">
                              <button class="btn btn-danger btn-lg"" type="submit" name="login-submit">Login</button>
                              </div>
                              
                              </form>
                              </body>';
                    }
                ?>
            </div>
        </header>
    </body>
</html>
