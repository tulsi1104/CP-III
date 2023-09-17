<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Volunteer Registration Form </title>
        <link rel="stylesheet" href="css/volunteer_registration.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
    <div class="container">
        <div class="title">Register as a Volunteer</div>
        <form action="volunteer_process.php" method="post">
            <div class="volunteer-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input name="vname" type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input name="vuname" type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input name="vemail" type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input name="vphn" type="text" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Availability</span>
                    <span class="details">Start</span>
                    <input name="as" type="time" placeholder="Enter your password" required>
                </div>
                <div class="e1">
                    <span class="a1">End</span>
                    <input class="i1" name="ae" type="time" placeholder="Confirm your password" required>
                </div>

            </div>
            <div class="button">
                <input type="submit" name="Register" value="Register">
            </div>
        </form>
    </div>
</body>
</html>