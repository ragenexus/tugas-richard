<?php
    session_start();
    if(isset($_SESSION['salah']))
    {
        echo '<script>alert("Username Atau Password Yang Dimasukan Salah")</script>';
    }    
    session_destroy();
?>

<!DOCTYPE html>
    <head>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="alert alert-danger" role="alert">
  <center>COPYRIGHT RICHARD REINHART RENALDY</center>
</div> 




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        
        <link rel="stylesheet" href="../assets/style/login.css">
    </head>
    <body>
        <div class="login-container">
            <div class="admin-icon">
                <img src="../assets/image/admin.webp" id="icon" alt="User Icon"/>
            </div>
            <div class="admin-login-form">
                <form name="login" method="post" action="admin_validate.php">
                    <div>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div>
                        <input type="password" id="passsword" name="password" placeholder="Password" required>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>