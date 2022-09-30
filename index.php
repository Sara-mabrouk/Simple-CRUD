
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsitration Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="action.php" method="get">
            <div class="row">
                <div class="col-25">
                    <label for="FirstName"><b>First Name</b></label>
                </div>
                <div class="col-75">
                    <input type="text" id="FirstName" name="FirstName" placeholder="Your First name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="LastName"><b>Last Name</b></label>
                </div>
                <div class="col-75">
                    <input type="text" id="LastName" name="LastName" placeholder="Your Last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email"><b>Email </b></label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" class="email" placeholder="Your Email..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country"><b>Password </b></label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" class="pass" placeholder="Your Password..">
                </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="name"><b> Address </b></label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" placeholder="Your address..">
            </div>
        </div>
            <!-- <div class="row">
            <div class="col-25">
                <label for="name"><b> Phone Number </b></label>
            </div>
            <div class="col-75">
                <input type="number" id="number" name="Your phone" placeholder="Your phone..">
            </div>
        </div> -->
            <br>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>