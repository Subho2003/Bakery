<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="Style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <div class ="main">
    <div class="Registration">
        <h2> Registration Here</h2>
        <form id="Register" method="post">
            <label>First Name: </label>
            <br>
            <input type="text" name="fname" id="name" placeholder="Enter your First Name">
            <br><br>

            <label> Last Name:</label>
            <br>
            <input type="text" name="lname" id="name" placeholder="Enter your Last Name">
            <br><br>
            <label> Your Age:</label>
            <br>
            <input type="number" name="age" id="name" placeholder="How Old Are You?">
            <br><br>
            <label>Phone number:</label>
            <br>
            <input type="Phone number" name="Phone number" id="name" placeholder="Enter your valid number">
            <br><br>
            <label>Email:</label>
            <br>
            <input type="Email" name="email" id="name" placeholder="Enter your valid Email">
            <br><br>
           <label>Gender:</label>
            <br>
            &nbsp;&nbsp;&nbsp; 
            <input type="radio" name="Gender" id="Male">
            &nbsp;
            <span id="Male">Male</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="Gender" id="female">
            &nbsp;
            <span id="Female">Female</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="Gender" id="Prefer Not to Say">
            &nbsp;
            <span id="Prefer Not to Say">Prefer Not To Say</span>
            <br>
            <h4 class="name"> City:</h4>
            <select class="option" name="City">
            <option disabled="disabled" selected="selected"></option>
            <option>Kolkata</option>
            <option>Delhi</option>
            <option>Mumbai</option>
            <option>Chennai</option>
            <option>Hyderabad</option>
            </select>
            <br>
            <label><h4>Location:</h4></label>
            <input type="text" name="location" id="name" placeholder="Enter your Address"



        </form>
    </div>
    </div>
</body>
</html>