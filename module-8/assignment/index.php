<?php
//ASSIGNEMENT ON MODULE 08
//Submitted by : Sheikh Mohammed Morshed
//Dated : 27/03/2023
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment on Module 08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-06">
                <h1>Registration Form</h1>
                <form method="post" action="register.php">
                    <label for="fname">First name:</label><br>
                    <input type="text" required id="firstName" name="firstName"><br><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" required id="lastName" name="lastName"><br><br>
                    <label for="email">Email Address:</label><br>
                    <input type="email" required id="email" name="email"><br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" required id="password" name="password"><br><br>
                    <label for="confirmPassword">Confirm Password:</label><br>
                    <input type="password" required id="confirmPassword" name="confirmPassword"><br><br>

                    <input type="submit" name="submit" value="Register">
                  </form> 
            </div>
        </div>
    </div>
    
	
<style>
    col-md-06{
        margin: 0 auto;
    }
    *{
        font-size: 16px;
    }
    h1 {
        margin-top: 20px;
        margin-bottom: 20px;
        font-weight: 700;
        font-size: 25px;
        text-transform: uppercase;
    }
    label{
        font-weight: 600;
    }
    input {
        width: 40%;
    }
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
