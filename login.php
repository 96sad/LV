<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/sign.css" rel="stylesheet">
</head>
<body>
    <form action="logindata.php" method="post">
        <div class="form1">
            <div class="page">
                <h1>Login page</h1>
            
                <label for="username">Username</label>
                <input type="text" name="uname" required>

                <label for="password">Password</label>
                <input type="password" name="pass_word" required>

                 <div class="box3">
                    <input type="Submit" value="Login" class="btn"> 
               
                </div>
                <div class="box6">
                <h3>Don't Have Account?<a href="signup.php">    Sign Up here...</a></h3>
            </div>
            </div>
        </div>
    </form>
    <script src="main.js"></script>
</body>
</html>