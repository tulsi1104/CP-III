<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Donor Registration Form </title>
        <link rel="stylesheet" href="css/donor_registration.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
    <div class="container">
        <div class="title">Register as a Donor</div>
        <form action="donor_process.php" method="post">
            <div class="donor-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input name="donor_name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input name="username" type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input name="email" type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input name="phone" type="tel" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <label class="details" for="type">Select Donation Type:</label>
                    <select name="donationtype" id="type" class="select1" required>
                    <option value="defult">--Select--  </option>
                    <option value="clothes">Clothes</option>
                    <option value="food">Food</option>
                    <option value="vessels">Vessels</option>
                    <option value="footwear">Footwear</option>
                    <option value="other">Others</option>

                <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Quantity</span>
                    <input name="quantity" type="number" placeholder="Enter Quantity of item" required>
                </div>
                
                <div class="input-box">
                <label for="description">Description:</label><br>
                <textarea name="description" class="d1" placeholder="Write about the donation" rows="4" cols="50"></textarea>
                </div>

                <div>
                    <label for="address">Address:</label><br>
                    <textarea name="address" class="ad1" placeholder="Write your Address here" rows="4" cols="50"></textarea>
                </div>

                <div>
                <label for="donation_date">Donation Date:</label>
                <input name="donation_date" class="dd1" placeholder="dd-mm-yyyy" onfocus="(this.type='date')" type="date" required><br>
                </div>

            </div>

            <div class="button">
                
                <input type="submit" name="Register" value="Register">
                
            </div>
        </form>
    </div>
</body>
</html>
