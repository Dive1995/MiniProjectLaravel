<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            

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
            </div>
        </div>
    </div>
</x-app-layout>



