
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
        <div class="flex w-full h-full bg-cover bg-center relative rounded-br-[90px]" 
        style="background-image: url('{{ asset('images/LandingPage_Images/Background.png') }}')";>

            <!-- Left Side Panel Container -->
            <div class="flex w-full h-full ">
                <div class="flex-1 bg-red-900 text-white flex flex-col items-center justify-center text-center p-5 rounded-br-[90px] bg-cover bg-center relative" style="background-image: url('{{ asset('images/LandingPage_Images/Cover.png') }}');">
    
                    <!-- Red Transparent Overlay -->
                    <div class="absolute inset-0 bg-red-900 opacity-60 rounded-br-[90px]" ></div>

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
            
                <!-- Right Side Panel Container  -->
                <div class=" flex-1.1 pl-[101px] bg-gray-100 flex flex-col items-center justify-center rounded-tl-[80px] p-6" >
                
                    <!-- Upper Container for Forgot Your Password Title  -->
                    <div class="bg-gray-200 p-6 mr-[70px] -mt-[23px] flex justify-center items-center rounded-t-2xl w-[550px] min-h-[105px] md:drop-shadow-lg ">
                        <div class="flex-1 text-center text-[28px] tracking-[2px] font-bold text-red-900">Reset Password</div>
                    </div>
        
                        <!-- Main Container Holds Forgor Password Box -->
                        <div class="bg-white pt-[30px] pb-[35px] pr-[100px] pl-[100px] mr-[70px] drop-shadow-md md:drop-shadow-lg rounded-b-2xl rounded-t-2xl w-[550px] text-center -mt-[10px]">
                            <p class="text-[16px] text-gray-800 -mb-[30px] ">Please Enter and Confirm your New Password.</p>
                        
                        
                            <!-- Main Container Holds Email Input Box -->
                            <div class="pl-6 pt-[60px] rounded-lg -ml-[20px]">
                                <label class="block text-red-900 text-md font-bold text-left" >PUP Webmail*</label>
                                <input type="email" class=" inline-block w-[350px] p-2.5 border-[2.5px] h-[50px] mt-[10px] border-red-900 rounded-md" required placeholder="Enter your Webmail.">
                            </div>

                            @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror

                            <!-- Password Field -->
                            <label class="block ml-[4px] font-bold text-red-900 text-md text-left pt-[15px]">Password*</label>
                            <div class="relative w-[350px]">
                            <input type="password" id="passwordInput" name="password"
                                class="w-full p-2.5 border-[2.5px] ml-[4px] h-[50px] mt-[7px] mb-[20px] border-red-900 rounded-md pr-10" required>
                            
                            <svg onclick="togglePassword('passwordInput', 'eyeIcon1')" id="eyeIcon1"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-red-900 absolute top-[33px] right-3 transform -translate-y-1/2 cursor-pointer"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            </div>

                            <!-- Confirm Password Field -->
                            <label class="block ml-[4px] font-bold text-red-900 text-md text-left">Confirm Password*</label>
                            <div class="relative w-[350px]">
                            <input type="password" id="passwordConfirmInput" name="password_confirmation"
                                class="w-full p-2.5 border-[2.5px] ml-[4px] h-[50px] mt-[7px] border-red-900 rounded-md pr-10" required>
                            
                            <svg onclick="togglePassword('passwordConfirmInput', 'eyeIcon2')" id="eyeIcon2"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-red-900 absolute top-[33px] right-3 transform -translate-y-1/2 cursor-pointer"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            </div>

                            @error('password')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror

                        <!-- Button for Password Reset Link -->
                        <div class="text-center mt-[65px] pb-[10px]">
                            <button class="bg-red-900 text-white py-3 px-5 rounded-xl w-[180px] hover:bg-red-950 hover:text-white transition font-semibold">Reset Password</button>
                        </div>
                        
                        <!-- Mini Container for return Login Page Option-->
                        <div class="mt-[20px] pb-[12px]">
                            <a class="font-semibold text-lg text-gray-700">Go Back to</a>
                            <a href="{{ route('login1') }}" class="font-semibold text-lg text-red-900">Login</a><a class="font-semibold text-lg text-gray-700">?</a>
                        </div>
                    </div>

                    <!-- Main Footer -->
                    <div class="fixed bottom-2 mr-[40px] text-center text-gray-600"> 
                        <p class="text-md ">For other PUP Services, kindly visit our site <a href="https://www.pup.edu.ph" class="text-yellow-500 underline">www.pup.edu.ph</a></p>
                        <p class="text-sm ">By using this service, you understood and agree to the PUP Online Service</p>
                        <p class="text-sm "><a href="#" class="text-yellow-500 underline">Terms of Use</a> and  <a href="#" class="text-yellow-500 underline">Privacy Statement</a></p>
                        <p class="text-xs mt-[20px]">&copy; 2025 Polytechnic University of the Philippines. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </body>
        <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            if (input.type === "password") {
            input.type = "text";
            icon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.944-9.543-7a9.964 9.964 0 012.103-3.437m1.414-1.414A9.956 9.956 0 0112 5
                    c4.478 0 8.269 2.944 9.543 7a9.964 9.964 0 01-4.297 5.569M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3l18 18" />
            `;
            } else {
            input.type = "password";
            icon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            `;
            }
        }
        </script>
</html>
<!-- End of Code -->
