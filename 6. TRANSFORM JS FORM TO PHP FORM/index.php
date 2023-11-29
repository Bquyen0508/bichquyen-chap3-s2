<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>

<body>
    <form action="index.php" method="post">
        <input value="<?php if(isset($_POST["password"])) $_POST["password"] ?>" type="text" name="password" id="password" placeholder="Password">
        <button id="login_btn">Log in</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $password = $_POST["password"];
            if($password=="1234"){
                echo "<div id=\"hidden\">This is sensitive data visible only if the user knows the correct password</div>";            
            }
        }
        
    ?>
</body>

</html>