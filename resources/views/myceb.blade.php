<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/myceb.css">
    <link rel="stylesheet" href="/css/footer.css">
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
                        <li><a href="/">Home</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/myceb">My CEB</a></li>
                            <li><a href="/login">Sign In</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Showcase -->
                <div class="showcase">
                    <!-- <div class="showcase-text">
                        <h1>
                            Stay Home
                        </h1>
                        <h2>
                            Stay Safe
                        </h2>
                      
                    </div> -->
                    
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </div>

    <!-- myceb -->
    <div class="container">
        <div class="myceb">

               <!-- displaay user details -->
               <div class="usercontainer">
                <div class="userdetails">
                    <div class="grid">
                        <h5>Name</h5>
                        <p>Thavarasa Diveshan</p>
                    </div>
                    <div class="grid">
                        <h5>Email</h5>
                        <p>Diveshan@gmail.com</p>
                    </div>
                    <div class="grid">
                        <h5>CEB id</h5>
                        <p>234546813345</p>
                    </div>
                    <div class="grid">
                        <h5>NIC</h5>
                        <p>953092387V</p>
                    </div>
                    <div class="grid">
                        <h5>Phone no.</h5>
                        <p>0765376766</p>
                    </div>
                </div>
            </div>
           
            <!-- display last reading, payment -->
            <div class="card-item flex">
                <div class="item lastreading">
                    <p>Last Reading</p>
                    <h4>23546</h4>
                </div>
                <div class="item payment">
                    <p>You have to pay</p>
                    <h4>Rs. 1450</h4>
                </div>
            </div>

            <h3><span style="color:red; font-weight:bold">NOTE :</span> Always put the currect reading of the meter, 
                don't try to put less amount of the original reading 
                it will cause you higher payments when we come in person to check and find out the readings after this pandamic is over.</h3>
                <!-- <p>You may have to pay more money per units according your usage, keep that in mind.</p> -->


                <!-- form -->
            <div class="myceb-form">
                <form action="/myceb" method="POST">
                @csrf
                    <p>Please double check your reading before submitting, you can submit only one time for a month</p>
                    <div class="grid userinput">
                            <label for="current_reading">This month reading</label>
                            <input id="current_reading" type="number" name="reading">
                    </div>
                    <div class="grid">
                            <label for="last_reading">Last reading</label>
                            <input id="last_reading" type="number" disabled>
                    </div>
                    <div class="grid">
                            <label for="units">Untits used</label>
                            <input id="units" type="number" disabled>
                    </div>
                    <div class="grid">
                            <label for="month_payment">Payment for this month</label>
                            <input id="month_payment" type="number" disabled>
                    </div>
                    <div class="grid">
                            <label for="total_payment">Total Payment</label>
                            <input id="total_payment" type="number" disabled>
                    </div>
                    <button name="submit" type="submit" class="btn-primary">Submit</button>
                </form>
            </div>
            
            <!-- if payment exceeds 4000 give warning -->
            <p>Please settle down your payments as soon as possible or <a href="contact.php">contact us</a> if you have any difficulties to avoid your electricity disconnection</p>
           
            
        </div>
    </div>
    
   

    <!-- footer -->
    <div class="footer">
        <div class="container grid">
            <h3>Copyright &copy; Electricity Board Sri Lanka 2021 </h3>
            <div class="navbar-links">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/myceb">My CEB</a></li>
                    <li><a href="/login">Sign In</a></li>
                </ul>
            </div>
        </div>
    </div>


</body>
</html>