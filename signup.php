<?php
 $connect=mysqli_connect("localhost", "root", "","libraryy");
if (isset($_POST['signup'])){
    $name=$_POST['jina'];
    $password=$_POST['cpassword'];

    $query="INSERT INTO users(name, password) VALUES('$name', '$password')";
    $sq=mysqli_query($connect, $query);

    if($sq==TRUE){
        header("location: jovin.php");
    }
}
 ?>
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
        <form name="loginform" id="loginform" method="POST" action="signup.php">
            <h2>
                Signup
            </h2>
            <hr>
            <div class="label">Username:</div>
            <input name="jina" value="" placeholder="Username" required><br>
            <div class="label">Password:</div>
            <input type="password" value="" name="password" placeholder="Enter Password" required><br><br>
            <div class="label">Confirm Password:</div>
            <input type="password" value="" name="cpassword" placeholder="Confirm Password" required><br><br>
            <input type="submit" class="login" value="Sign Up" name="signup">
        </form>
        <br>
        Have an account? <a href="jovin.php">Login</a>
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