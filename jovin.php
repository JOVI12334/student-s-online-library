<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <link rel="stylesheet" type="text/css" href="jovirangi.css">
    <script src="UserHome.js"></script>
</head>
<body>
<div class="juu" onclick="coming()">
    Students Online Library
</div>                                                        <!--Part ya juu kabisa-->
                                                                        <!--Sidebar ya kushoto-->
<div class="main"><center>
<form name="loginform" id="loginform" method="POST" action="home.php">
    <h2>
        Login
    </h2>
    <hr>
    <div class="label">Username:</div>
    <input name="jina" value="" placeholder="Username" required><br>
    <div class="label">Password:</div>
    <input type="password" value="" name="password" placeholder="Enter Password" required><br><br>

    <input type="submit" class="login" value="Login" name="login">
</form>
        <br>
        Don't have an account? <a href="signup.php">Sign Up Now</a>
</center>
</div><!--main body part-->
<div class="left">
    <div class="vyandani" class="vyandani" onclick="coming()">
        Help
    </div>
</div>  
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>