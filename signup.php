<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="sign.css" rel="stylesheet">
</head>

<body>
    <form action="signdata.php" method="post" id="registrationForm">
        <div class="form1">
        <div class="page">
            <h1>Sign Up</h1>
            <h2>Create Your Account</h2>
        
             
                <label for="username">Username</label>
                <input type="text" id="username" name="user" required>
                <span id="usernameError" class="error"></span>
            
        
          
                <label for="email">Email</label>
                <input type="text" id="email" name="mail" required>
                <span id="emailError" class="error"></span>
           

           
           <label for="password">Password</label>
                <input type="password" id="password" name="passwd" required>
                <span id="passwordError" class="error"></span>
           
           
          
           <label for="cpassword">Confirm Password</label>
                <input type="password"  id="confirmpassword" name="cpasswd" required>
                <span id="confirmPasswordError" class="error"></span>
       

             <div class="box5">
                <input type="Submit" value="Sign Up" class="btn"> 
                
            </div>
            <div class="box6">
                <h3>Allready Sign up !!!<a href="login.php">    Login here...</a></h3>
            </div>

        </div>
    </div>
    </form>
    <script src="main.js"></script>
</body>
</html>