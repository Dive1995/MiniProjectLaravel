<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/newcustomer.css">
    <title>CEB</title>

</head>
<body>
     <!-- Header -->
     <div class="header">

        <div class="container">
            <!-- Navbar -->
            <div class="content">
                <div class="navbar">
                    <div class="logo">
                        <h1>Ceylon Electricity Board</h1>
                    </div>
                    <div class="navbar-links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="myceb.php">My CEB</a></li>
                            <li><a href="login.php">Sign In</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Showcase -->
                <div class="showcase">
                    <div class="showcase-text">
                        <h1>
                            New Customer
                        </h1>
                      
                        <!-- <button class="btn-primary">Login</button> -->
                        <!-- <button class="btn-secondary">Register</button> -->
                    </div>
                    
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </div>


    <div class="container">
        <div class="plans ">
           
            <h2>HOW CAN I GET AN ELECTRICITY CONNECTION?</h2>
            <p>If you fall under Domestic purpose or Religious purpose with electricity supply demand less than 42kVA, here is how you can get an electricity connection. If your demand is more than 42kVA, please contact the Commercial Engineer at the respective Provincial Deputy General Manager’s Office.</p>

            <h3>WHAT ARE THE PRE-REQUISITES?</h3>
            <p>You (Applicant) have to clear the way leaves along the route where the service line has be drawn. The cost for way leave clearing is not including in the estimate. The applicant should finish the way leave clearing before the CEB staff arrive to give the service connection.</p>
            <p>A trip switch &  a main switch should be installed properly.
            </p>
            <p>Special attention should be drawn for the place of installing the electricity meter. This should be a place outside the building where the meter reader can access easily. The meter should be installed so that it is protected from direct sunlight and the rain for its durability.</p>
            <p>The load wire should have an excess length of 1.5 feet at the place of the meter.</p>


            <!-- <h3>HOW TO APPLY?
            </h3>
            <p>Hand over the duly filled application form along with the supportive documents to the closest Consumer Service Centre (CSC) or submit the application online. A voucher is issued by the CSC for this purpose. Payments can be made at the Peoples Bank or POS counters at the CEB.</p>
            <p>This application form issued by the CEB should be filled and signed by the applicant himself/herself.</p> -->
            <div class="form">
                <h2>New customer form</h2>
                <form action="/newcustomer" method="post">
                @csrf
                    <div class="input">
                        <input type="text" name="fname" required placeholder="First Name">
                        <input type="text" name="lname" required placeholder="Last Name">
                        <input type="text" name="nic" required placeholder="NIC">
                        <input type="number" name="phone" required placeholder="Phone Number">
                        <input type="text" name="address" required placeholder="Address">
                        <input type="text" name="gs_division" required placeholder="GS Division">
                        <input type="email" name="email" required placeholder="Email">
                            <select name="type" id="">
                                <option value="domestic">Domestic Purpose</option>
                                <option value="general">General Purpose</option>
                            </select>
                        </input>
                    
                    </div>
                    <button class="btn-secondary">Submit</button>
                    <a href="/register">Already have a connection?</a>
                </form>
            </div>
        </div>
    </div>
    
   

    <!-- footer -->
    <div class="footer">
        <div class="container grid">
            <h3>Copyright &copy; Electricity Board Sri Lanka 2021 </h3>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="myceb.php">My CEB</a></li>
                    <li><a href="login.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </div>


</body>
</html>