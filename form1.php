<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="Stylesheet" type="text/css" href="Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="main">
    <h2> Registration Here</h2>
    <div class="form-container">
        <form>
        <div class ="Input name">
            <i class="fa fa-user-circle"></i>
            <input type="text" name="fname" id="name" placeholder="Enter your First Name" class="fname">
            <span>
                <i class="fa fa-user-circle"></i>
                <input type="text" name="lname" id="name" placeholder="Enter your Last Name" class="fname">
            </span>
        </div>
        <br>
        <div class ="Input name">
            <i class="fa fa-envelope emil"></i>
            <input type="email" name="fname" id="name" placeholder="Enter your Email" class="name">
        </div>
        <br>
        <div class ="Input name">
            <i class="fa fa-lock"></i>
            <input type="password" name="fname" id="name" placeholder="Enter your Password" class="name">
        </div>
        <br>
        <div class ="Input name">
            <i class="fa fa-phone"></i>
            <input type="numeric" name="fname" id="name" placeholder="Enter your Number" class="name">
        </div>
        <br>
        <div class ="Input name">
        <i class="fa fa-location-arrow"></i>
            <input type="text" name="location" id="name" placeholder="Enter your Address" class="name">
        </div>
        <div class ="Input name">
            <h4 class="cname"> City:</h4>
            <select class="option" name="City">
            <option disabled="disabled" selected="selected"></option>
            <option>Kolkata</option>
            <option>Delhi</option>
            <option>Mumbai</option>
            <option>Chennai</option>
            <option>Hyderabad</option>
            </select>
             <div class="arrow"></div>
        </div>
           
        <br>
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
            <br><br>
            <div class ="Input name">
                <input type="checkbox"class="check button">
                <label>I accept the terms and conditions</label>
            </div>
            <br><br>
            <div class ="Input name">
                <input type="submit"class=" button" value="Register">
            </div>


        </form>
    </div>
    </div>
    
</body>
</html>