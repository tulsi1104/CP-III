<?php
$username=$password='';
if($_POST){
    if(($_POST['name'])=="tulsi" && ($_POST['$password'])=="tpatel0411"){
        header("Location:admin.html");
    }
}
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Admin Log-in form</title>
        <link rel="stylesheet" href="admin_login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
    <div class="container">
        <div class="title">Log in as an admin</div>
        <form action="admin_login.php" method="post">
            <div class="volunteer-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input name="name" type="text" placeholder="Enter your username" required>
                </div>
                
                <div class="input-box">
                    <span class="details">Password</span>
                    <input name="password" type="password" placeholder="Enter the password" required>
                </div>
               
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>