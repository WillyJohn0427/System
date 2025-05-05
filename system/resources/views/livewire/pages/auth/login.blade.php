<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>



<!-- Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 
    <!-- Google Font: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- Import for Icon -->
    <link rel="icon" type="image/png" href="{{ asset('images/LandingPage_Images/QAC.png') }}">
    <!-- Tab/Window Title -->
    <title>PUPQAC - Document Archiving and Control System</title>
    <!-- Tailwind CSS Connection -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
    <!-- Main Body of Login Page Using Gradient Background for the Round Corners -->
    <body class="flex h-screen bg-gradient-to-t from-gray-50 to-red-800 ">
        <!-- First Layer Under Container Background Gradient -->
        <div class="flex w-full h-full bg-cover bg-center relative rounded-br-[90px]" 
        style="background-image: url('{{ asset('images/LandingPage_Images/Background.png') }}');">
    
            <!-- Left Side Panel Container -->
            <div class="flex w-full h-full">
                <div class="flex-1 bg-red-900 text-white flex flex-col items-center justify-center text-center p-5 rounded-br-[90px] bg-cover bg-center relative" style="background-image: url('{{ asset('images/LandingPage_Images/Cover.png') }}');">

                    <!-- Red Transparent Overlay -->
                    <div class="absolute inset-0 bg-red-900 opacity-60 rounded-br-[90px]"></div>

                    <!-- Content of Left Container (Ensures it appears above the overlay) -->
                    <div class="relative z-10 flex flex-col items-center justify-center">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <img src="{{ asset('images/LandingPage_Images/PUPLogo.png') }}" alt="PUP Logo" class="w-[120px] mt-[20px]">
                            </div>
                            <div>
                                <img src="{{ asset('images/LandingPage_Images/QAC.png') }}" alt="PUP Logo" class="w-[125px] mt-[35px]">
                            </div>
                        </div>
                        <h2 class="text-[30px] tracking-wider font-medium mb-[5px] mt-[20px]" style="font-family: 'Playfair Display SC', serif;">Welcome to the PUP-QAC</h2>
                        <h1 class="text-[40px] tracking-wider font-bold mb-1" style="font-family: 'Playfair Display SC', serif;">DOCUMENT ARCHIVING AND CONTROL SYSTEM</h1>
                    </div>
                </div>
            
               <!-- Main Gray Background Container. -->
               <div class="flex-1.1 pl-[1px] bg-gray-100 flex flex-col items-center justify-center rounded-tl-[80px] p-6 pt-[35.5px] pb-[40px]">

                <!-- Upper Container for "Log In to your Account" Title. -->
                <div class="bg-gray-200 p-6 mr-[70px] ml-[100px] flex justify-center items-center rounded-t-2xl w-[550px] h-[105px] md:drop-shadow-lg mb-[2px]">
                    <div class="flex-1 text-center text-[28px] mb-[10px] tracking-normal font-bold text-red-900">Log in to your Account</div>
                </div>

                <!-- Main Form for Log In Container. -->
                <form method="POST" action="{{ route('login.authenticate') }}">
                    @csrf
                    <div class="bg-white pt-[93px] ml-[100px] pb-[41.5px] pr-[100px] pl-[100px] mr-[70px] drop-shadow-md md:drop-shadow-lg rounded-b-2xl rounded-t-2xl w-[550px] text-center mb-[20px] -mt-[10px]">
                    <label class="block ml-[2px] text-red-900 text-md font-bold mb-1 text-left">PUP Webmail*</label>
                    <input type="email" name="email" class="inline-block w-[350px] p-2.5 border-[2.5px] h-[50px] mt-[10px] border-red-900 rounded-md mb-2" required placeholder="example@pup.edu.ph">
                    
                    <!-- Display error for email -->
                    @error('email')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror

                    <label class="block ml-[2px] text-red-900 text-md font-bold mb-1 mt-[25px] text-left">Password*</label>
                    <div class="relative w-[350px]">
                    <input type="password" name="password" id="passwordInput"
                    class="inline-block w-[350px] p-2.5 border-[2.5px] h-[50px] mt-[10px] mb-[15px] border-red-900 rounded-md" required>
                    <!-- Eye Icon -->
                    <button type="button" onclick="togglePassword()" 
                            class="absolute top-[22px] right-3 text-red-900 cursor-pointer">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                    </div>
                    <!-- Display error for password -->
                    @error('password')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    <div class="flex justify-between items-center space-x-4 ml-[25px] mb-[15px] absolute right-[105px]">
                        <a href="{{ route('forgot1') }}" class="text-[14px] text-red-900 hover:underline">Forgot Password?</a>
                    </div>
                    
                    <div class="flex justify-center items-center space-x-4 mb-[93px] mt-[103px]">
                        <button type="submit" class="bg-red-900 text-white py-3 px-5 rounded-xl mt-5 w-[155px] -mb-[75px] hover:bg-red-950 hover:text-white transition font-semibold ">Log in</button>
                    </div>
                </form>
                        <a class="font-semibold text-lg text-gray-700">Doesn't have an Account?</a>
                        <a href="{{ route('register1') }}" class=" font-semibold text-lg text-red-900">Register</a>
                   </div>
                </div>

                <!-- Main Footer -->
                <div class="fixed bottom-2 right-[126px] text-center text-gray-600"> 
                    <p class="text-md ">For other PUP Services, kindly visit our site <a href="https://www.pup.edu.ph" class="text-yellow-500 underline">www.pup.edu.ph</a></p>
                    <p class="text-sm ">By using this service, you understood and agree to the PUP Online Service</p>
                    <p class="text-sm "><a href="#" class="text-yellow-500 underline">Terms of Use</a> and  <a href="#" class="text-yellow-500 underline">Privacy Statement</a></p>
                    <p class="text-xs mt-[20px]">&copy; 2025 Polytechnic University of the Philippines. All Rights Reserved.</p>
                </div>
            </div>

            <script>
            function togglePassword() {
                const password = document.getElementById("passwordInput");
                const eye = document.getElementById("eyeIcon");
                
                if (password.type === "password") {
                password.type = "text";
                eye.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.944-9.543-7a9.964 9.964 0 012.103-3.437m1.414-1.414A9.956 9.956 0 0112 5c4.478 0 8.269 2.944 9.543 7a9.964 9.964 0 01-4.297 5.569M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3l18 18" />
                `;
                } else {
                password.type = "password";
                eye.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
                }
            }
            </script>
        </body>
</html>
<!-- End of Code -->
