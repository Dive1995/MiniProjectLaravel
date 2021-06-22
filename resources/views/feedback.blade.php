<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/feedback.css">
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
                    <div class="showcase-text">
                        <h1>
                            How are we doing?
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
        <div class="feedback ">
            <h2>We like to hear from you.</h2>
            <h3>
                We are always working to improve the user experience, so we'd love to
                hear what's working and how we can do better.
            </h3>
            <h4>
                This isn’t a way to contact us, though. If you have questions or problems you can <a href="/contact.html">contact us</a>.
            </h4>
            <div class="feedback-form">
                <h2>Feedback</h2>
                <form action="/feedback" method="POST">
                    @csrf
                    <div class="input">
                        <input type="text" name="title" placeholder="What's your feedback about ?">
                        <textarea id="subject" name="subject"  placeholder="Tell us a little more..."></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn-primary">
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