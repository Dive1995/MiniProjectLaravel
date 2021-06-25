<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
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
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="myceb.php">My CEB</a></li>
                            <li><a href="/login">Sign In</a></li>
                            <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Showcase -->
                <div class="showcase">
                    <div class="showcase-text">
                        <h1>
                            Enrich Life Through Power
                        </h1>
                        <p>
                            Illuminating the Motherland
                        </p>
                        <a href="/login" class="btn-primary">Login</a>
                        <a href="/register" class="btn-secondary">Register</a>
                    </div>

                </div>
            </div>
            <div class="overlay"></div>

        </div>
    </div>


    <div class="container">
    
    <div class="message">
        <h5>{{session('msg')}}</h5>
    </div>

        <!-- Card -->
        <div class="card-section grid">
            <a href="newCustomer.php">
                <div class="card">
                    <img src="images/New-Customer.png" alt="">
                    <div class="card-text">
                        <h3>New Customer</h3>
                        <p>How can i get an Electricity Connection?</p>
                    </div>
                </div>
            </a>
            <a href="/plans">
                <div class="card">
                    <img src="images/tariff.jpeg" alt="">
                    <div class="card-text">
                        <h3>Tariff Plans</h3>
                        <p>Rates applied for Domestic & General Purposes</p>
                    </div>
                </div>
            </a>
            <a href="https://www.leco.lk/pages_e.php?id=98">
                <div class="card">
                    <img src="images/reading-meter.jpeg" alt="">
                    <div class="card-text">
                        <h3>How to Read Your Meter</h3>
                        <p>Know how to read your meter.</p>
                    </div>
                </div>
            </a>
            <a href="/feedback">
                <div class="card">
                    <img src="images/feedback2.jpeg" alt="">
                    <div class="card-text">
                        <h3>Feedback</h3>
                        <p>We are always working to improve</p>
                    </div>
                </div>
            </a>
            
        </div>

        

            <!-- Intro to Billing -->
        <div class="billing grid">
            <img src="/images/reading2.jpeg" alt="">
            <div class="billing-text">
                <h1>Meter reading during Covid-19</h1>
                <p>Now more than ever, we want you to know that we take our responsibilities for health and safety very seriously.</p>
                <a href="#" class="btn-readmore">Read more.</a>
            </div>
        </div>

             <!-- hotline -->
             <div class="hotline flex">
                <div class="faq hotline-item">
                    <h1>FAQ</h1>
                </div>
                <div class="faq hotline-item">
                    <h1>Help</h1>
                </div>
                <div class="hotline-num hotline-item">
                    <h1 class="">Hotline</h1>
                    <h2>1987</h2>
                </div>
            </div>

    </div>


    <!-- footer -->
    <div class="footer">
        <div class="container grid">
            <h3>Copyright &copy; Electricity Board Sri Lanka 2021 </h3>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="myceb.php">My CEB</a></li>
                    <li><a href="login.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </div>

    
</body>
</html>