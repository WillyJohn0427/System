
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

                <!-- Right Side Panel Container  -->
                <div class=" flex-1.1 pl-[101px] bg-gray-100 flex flex-col items-center justify-center rounded-tl-[80px] p-6" >
                
                    <!-- Upper Container for Profile Title  -->
                    <div class="bg-gray-200 p-6 mr-[70px] -mt-[26px] flex justify-center items-center rounded-t-2xl w-[550px] min-h-[105px] md:drop-shadow-lg ">
                        <div class="flex-1 text-center text-[30px] tracking-wider font-bold text-black text-red-900">Profile</div>
                    </div>
        
                        <!-- Main Container Holds Profile Upload Box -->
                        <div class="bg-white pt-[120.5px] pb-[81.5px] pr-[100px] pl-[100px] mr-[70px] drop-shadow-md md:drop-shadow-lg rounded-b-2xl rounded-t-2xl w-[550px] text-center -mb-[1px] -mt-[10px]">
                            <p class="text-[16px] text-gray-800 mb-4 -mt-[50px]">We suggest making your face visible on your profile.</p>
                        
                            <!-- Main Container Holds Profile Upload Box -->
                            <div class="mt-6 pt-[21px] pb-[55px] flex flex-col items-center p-6 rounded-lg">
                            <div class="w-[110px] h-[110px] bg-gray-400 rounded-full flex items-center justify-center">
                                <svg class="w-[110px] h-[110px] text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>

                            <!-- Container Below (Main) for Button Photo Upload Options -->
                            <div class="flex flex-col items-center text-black">
                                <p class="text-lg mt-[15px]">Drag photo here</p>
                                <p class="text-gray-600 my-2 mb-[15px]">- or -</p>
                        
                                <div class="flex gap-4">
                                    <button class="border border-black px-4 py-3 flex items-center gap-2 rounded-lg text-gray-700 text-sm min-w-[220px] justify-center">
                                        <svg class="w-5 h-5" fill="gray" viewBox="0 0 24 24">
                                            <path d="M4 4h16v12H4V4zm2 10h12V6H6v8zM2 20h20v2H2v-2z" />
                                        </svg>  
                                        Upload from computer
                                    </button> 
                                
                                    <button class="border border-black px-6 py-3 flex items-center gap-2 rounded-lg text-gray-700 text-sm min-w-[170px] justify-center">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="gray" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8814 4.5H9.11862L7.46862 7.03125H3.75L3 7.78125V18.75L3.75 19.5H20.25L21 18.75V7.78125L20.25 7.03125H16.5314L14.8814 4.5ZM8.28138 8.53125L9.93138 6H14.0686L15.7186 8.53125H19.5V18H4.5V8.53125H8.28138ZM9.75 12.75C9.75 11.5074 10.7574 10.5 12 10.5C13.2426 10.5 14.25 11.5074 14.25 12.75C14.25 13.9926 13.2426 15 12 15C10.7574 15 9.75 13.9926 9.75 12.75ZM12 9C9.92893 9 8.25 10.6789 8.25 12.75C8.25 14.8211 9.92893 16.5 12 16.5C14.0711 16.5 15.75 14.8211 15.75 12.75C15.75 10.6789 14.0711 9 12 9Z" />
                                        </svg>
                                        Take a picture
                                    </button>                                      
                                </div>
                            </div>
                        </div>

                        <!-- Mini Container for Next Button -->
                        <div class="text-center -mt-[29px] mb-[9px]">
                            <a href="{{ route('verify1') }}"
                            class="bg-red-900 text-white px-[62px] py-3 mr-2 rounded-xl font-semibold hover:bg-red-950 transition duration-200 inline-block text-center">
                            Skip
                            </a>
                            <a href="{{ route('verify1') }}"
                            class="bg-red-900 text-white px-[60px] py-3 ml-2 rounded-xl font-semibold hover:bg-red-950 transition duration-200 inline-block text-center">
                            Next
                            </a>
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
</html>
<!-- End of Code -->
