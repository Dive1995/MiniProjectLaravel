<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-9 bg-white border-b border-gray-200">

                    <!-- modal form for add users manually -->
                    <div class="register-form ">
                        <form action="/dashboard" method="post">
                        @csrf
                            <input type="number" id="ceb" name="ceb" class="ceb-id" required placeholder="CEB Account number" autofocus>
                            <!-- <input type="text" name="type" required placeholder="Connection Type"> -->
                            <select name="type" placeholder="Connection Type">
                                <option value="domestic">Domestic Purpose</option>
                                <option value="general">General Purpose</option>
                            </select>
                            <input type="text" name="fname" required placeholder="First Name">
                            <input type="text" name="lname" required placeholder="Last Name">
                            <input type="text" name="nic" required placeholder="NIC">
                            <input type="number" name="phone" required placeholder="Phone Number">
                            <input type="text" name="balance" required placeholder="Account Balance">
                            <input type="text" name="reading" required placeholder="Last Reading">
                            <input type="text" name="address" required placeholder="Address">

                            <button type="submit" class="btn-secondary">Add</button>
                        </form>
                    </div>

                    <!-- list all users -->
                    <div>
                        @foreach($users as $user)
                            {{$user['fname']}}
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>