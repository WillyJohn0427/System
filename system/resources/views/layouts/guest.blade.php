<!-- layouts/guest.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PUPQAC - Document Archiving and Control System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/QAC_Logo.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="flex h-screen bg-gradient-to-t from-gray-50 to-red-800">
    <div class="flex w-full h-full bg-cover bg-center relative rounded-br-[90px]" style="background-image: url('{{ asset('images/Background.png') }}');">
        <div class="flex w-full h-full">
            <!-- Left Section -->
            <div class="flex-1 bg-red-900 text-white flex flex-col items-center justify-center text-center p-5 rounded-br-[90px] bg-cover bg-center relative" style="background-image: url('{{ asset('images/Cover.png') }}');">
                <div class="absolute inset-0 bg-red-900 opacity-60 rounded-br-[90px]"></div>
                <div class="relative z-10 flex flex-col items-center justify-center">
                    <img src="{{ asset('images/PUPLogo.png') }}" alt="PUP Logo" class="w-[120px] mt-[20px]">
                    <img src="{{ asset('images/QAC.png') }}" alt="QAC Logo" class="w-[125px] mt-[35px]">
                    <h2 class="text-[30px] tracking-wider font-medium mb-[5px] mt-[20px]" style="font-family: 'Playfair Display SC', serif;">Welcome to the PUP-QAC</h2>
                    <h1 class="text-[40px] tracking-wider font-bold mb-1" style="font-family: 'Playfair Display SC', serif;">DOCUMENT ARCHIVING AND CONTROL SYSTEM</h1>
                </div>
            </div>

            <!-- Right Section (Slot for login) -->
            <div class="flex-1.1 pl-[1px] bg-gray-100 flex flex-col items-center justify-center rounded-tl-[80px] p-6 pt-[35.5px] pb-[40px]">
                {{ $slot }}
            </div>
        </div>
    </div>

    <div class="fixed bottom-2 right-[126px] text-center text-gray-600">
        <p class="text-md">For other PUP Services, kindly visit our site <a href="https://www.pup.edu.ph" class="text-yellow-500 underline">www.pup.edu.ph</a></p>
        <p class="text-sm">By using this service, you understood and agree to the PUP Online Service</p>
        <p class="text-sm"><a href="#" class="text-yellow-500 underline">Terms of Use</a> and <a href="#" class="text-yellow-500 underline">Privacy Statement</a></p>
        <p class="text-xs mt-[20px]">&copy; 2025 Polytechnic University of the Philippines. All Rights Reserved.</p>
    </div>

    @livewireScripts
</body>
</html>
