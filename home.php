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
<div class="main">
<form
    action="FileUploadHandler"
    entype="multipart/form-data"
    method="post"><br><br>
    Enter File Name<input
        type="text"
    name="file_name"><br><br><br>
    select<input type="file"
                 name="file2"/><br><br>
    <input type="submit"
           value="upload"/>



</form>

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