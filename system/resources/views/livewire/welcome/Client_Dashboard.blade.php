
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	  <link rel="icon" href="{{ asset('images/Client_images/QAC.jpeg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 
    <!-- Google Font: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/Client_images/QAC.jpeg') }}">
    <!-- Tab/Window Title -->
    <title>PUPQAC - Document Archiving and Control System</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

    <body class="bg-gray-100">
      <!-- Header -->
      <header class="bg-red-900 text-white p-4 pl-12 fixed w-full top-0 fixed top-0 left-0 right-0 h-[130px] shadow z-20 flex items-center px-4 flex justify-between items-center">
        <!-- Logo and title -->
        <div class="flex items-center gap-4">
            <!-- Logo Image -->
            <img src="{{ asset('images/Client_images/QAC.jpeg') }}" alt="QAC Logo" class="h-[80px] w[80px] object-contain" />
  
            <!-- Title -->
            <div class="pl-5 mt-2">
              <div class="text-md text-[25px] -mb-3" style="font-family: 'Playfair Display SC', serif;">Quality Assurance Center</div>
                <div class="text-[40px] font-bold mb-1">Document Archiving and Control System</div>
            </div>
        </div>
  
        <!-- Notification and profile -->
        <div class="flex items-center gap-4">
            <!-- Notification Icon -->
            <button class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition relative">
              <i class="fas fa-bell text-2xl"></i>
              <!-- Notification dot (optional) -->
              <!--<span class="absolute top-2 right-2 w-2 h-2 bg-red-700 rounded-full"></span>-->
            </button>
        
            <!-- Settings Icon -->
            <button class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition">
              <i class="fas fa-cog text-2xl"></i>
            </button>
        
            <!-- User Info -->
            <div class="flex items-center gap-2">
              <div class="flex flex-col leading-tight text-white text-right">
                <span class="font-medium">Nabila A.</span>
                <span class="text-sm text-gray-200 text-center">Client</span>
              </div>
              <img src="{{ asset('images/Client_images/Profile.jpeg') }}" class="rounded-full h-14 w-14 object-cover" alt="User Avatar">
            </div>
          </div>
      </header>
    
        <div class="flex h-screen">
          <!-- Sidebar -->
          <aside class="h-screen w-64  bg-white text-black p-5 fixed h-full bg-black shadow-[4px_0_6px_-1px_rgba(0,0,0,0.1)] z-10 pt-[127px] fixed top-0 left-0 h-screen z-10 overflow-y-auto">
                <nav class="mt-5 ml-[5px]">
                    <ul>
                        <ul>
                            <!-- Dashboard -->
                            <ul>
                                <!-- Dashboard -->
                                <li class="mb-4 mt-[28px]">
                                  <a href="{{ route('cdashboard') }}" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                          <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zm0 10h8v8h-8v-8zm-10 0h8v8H3v-8z" />
                                      </svg>
                                      <span class="text-red-800 text-[21px] font-bold transition-all">Dashboard</span>
                                  </a>
                              </li>
                                <!-- Form -->
                                <li class="mb-4">
                                    <a href="{{ route('Cform') }}" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                        <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 1H6zm7 0v5h5L13 2zM8 10h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>
                                        <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Form</span>
                                    </a></li>
                                <!-- Tracking -->
                                <li class="mb-4">
                                    <a href="{{ route('Ctracking') }}" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1 0 4.5 4.5a7.5 7.5 0 0 0 12.15 12.15z" /> </svg>
                                      <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Tracking</span>
                                    </a></li>
                                <!-- Events -->
                                <li class="mb-4">
                                    <a href="{{ route('Cevent') }}" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.3" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                        <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                                        <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Events</span>
                                    </a></li>
                                <!-- History -->
                                <li class="mb-4">
                                    <a href="{{ route('Chistory') }}" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.4" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                        <path d="M13 3a9 9 0 1 0 9 9h-2a7 7 0 1 1-7-7V3zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/></svg>
                                        <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">History</span>
                                    </a></li>
                            </ul>
                      </ul>
                </nav>
                <!-- Log Out Button Trigger -->
                <button onclick="openLogoutModal()" 
                    class="absolute inset-x-6 bottom-[50px] ml-2 flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" 
                        stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                    </svg>
                    <span class="text-red-800 text-[19px] group-hover:text-red-800 group-hover:text-[20px] group-hover:font-bold transition-all duration-200">
                    Log Out
                    </span>
                </button>

                <!-- Logout Confirmation Modal -->
                <div id="logoutModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-lg shadow-lg p-8 w-[400px] text-center">
                <h2 class="text-2xl font-bold mb-4 text-red-800">Confirm Logout</h2>
                <p class="text-gray-700 mb-6">Are you sure you want to log out?</p>
                <div class="flex justify-center gap-4">
                <button onclick="closeLogoutModal()" 
                        class="px-6 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">
                    Cancel
                </button>
                <!-- Logout form with redirect -->
                <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-6 py-2 bg-red-800 text-white rounded-lg hover:bg-red-900 transition">
                    Log Out
                    </button>
                </form>
                </div>
                </div>
                </div>                 
            </aside>
        
            <!-- Main Content -->
            <main class="ml-80 flex-1 p-8 overflow-y-auto mt-6">
                <h1 class="text-[70px] font-extrabold tracking-2 -mb-3 mt-40">REQUEST DOCUMENTS</h1>
                <h1 class="text-[70px] font-extrabold tracking-2 ">WITH EASE</h1>
                <p class="mt-5 text-[25px]">You can request any document records from Quality</p>
                <p class="mb-20 text-[25px]">Assurance Center <strong>online</strong>.</p>
            
                <a href="{{ route('Cform') }}" class="mt-4 px-6 py-3 bg-red-800 text-white rounded-md flex items-center gap-2 font-semibold tracking-wider hover:bg-red-900 transition-all duration-200 shadow-md" style="box-shadow: inset 0 3px 6px rgba(255,255,255,0.15), 0 4px 6px rgba(0,0,0,0.3);">
                  REQUEST NOW <span class="text-4xl -mt-3 ml-2">&rsaquo;</span></a>

              <h2 class="mt-56 text-lg font-bold text-red-900 flex items-center gap-2 ">Recent
                <i class="fas fa-clock text-red-900 text-base"></i>
              </h2>                  
              <div class="overflow-x-auto ">
                <table class="min-w-full mt-4 text-md">
                  <thead>
                    <tr class="text-gray-400 bg-gray-100">
                      <th class="py-3 px-4 text-left font-medium">Name</th>
                      <th class="py-3 px-4 text-left font-medium">Position</th>
                      <th class="py-3 px-4 text-left font-medium">Office</th>
                      <th class="py-3 px-4 text-left font-medium">Modified by</th>
                      <th class="py-3 px-4 text-left font-medium">Date</th>
                      <th class="py-3 px-4 text-left font-medium">Transaction</th>
                    </tr>
                  </thead>
              
                  <tbody class="text-gray-700">
                    <tr>
                        <td colspan="6" class="text-center text-gray-500">
                            No transaction has been made yet.
                        </td>
                    </tr>
                </tbody>
                </table>
              </div>

                <button class="mt-4 px-4 py-2 text-red-700">See More</button>
                <!-- Steps/FAQS Button-->
                <button id="toggle-request-steps" class="fixed bottom-10 right-10 bg-yellow-500 text-white rounded-full w-16 h-16 shadow-lg text-lg hover:bg-red-800 transition">
                  <p class="text-[35px] font-semibold"> ? </p>
                </button>

                <div id="request-steps" class="fixed bottom-32 right-16 bg-white shadow-lg p-8 rounded-lg w-90 border border-gray-300 hidden">
                  <div class="flex justify-between items-center border-b pb-2">
                    <h3 class="font-extrabold text-red-800 mb-4 text-[15px] text-xl"> 4 EASY STEPS <br/> TO CREATE A REQUEST</h3>
                    <button id="close-request-steps" class="text-gray-600 -mt-10 mb-4 hover:text-red-800 text-3xl font-bold">&times;</button>
                  </div>
                <div class="mt-7 text-gray-800 text-md">
                  <p class="font-bold">STEP 1</p>
                  <p>Click the <strong>“Request Now”</strong> button.</p>
      
                  <p class="font-bold mt-5">STEP 2</p>
                  <p>Fill out the request form.</p>
      
                  <p class="font-bold mt-5">STEP 3</p>
                  <p>Click the <strong>“Submit”</strong> button.</p>
      
                  <p class="font-bold mt-5">STEP 4</p>
                  <p>Track & Review your Document.</p>
      
                  <p class="text-gray-500 italic text-xs mt-7 text-center">
                      Fast, Simple, Hassle-Free – Get Your Documents in a Click!
                  </p>
              </div>

                <!-- JavaScript for toggling the floating card -->
                <script>
                  document.getElementById('toggle-request-steps').addEventListener('click', function() {
                      document.getElementById('request-steps').classList.toggle('hidden');
                  });
                  document.getElementById('close-request-steps').addEventListener('click', function() {
                      document.getElementById('request-steps').classList.add('hidden');
                  });

                    // LOGOUT SCRIPT
                  function openLogoutModal() {
                  document.getElementById('logoutModal').classList.remove('hidden');}
            
                  function closeLogoutModal() {
                  document.getElementById('logoutModal').classList.add('hidden');}
            
                  // Auto redirect after logout
                  document.getElementById('logoutForm').addEventListener('submit', function () {
                  setTimeout(function () {
                  window.location.href = "{{ route('login1') }}";
                   }, 100); // Give Laravel enough time to process the logout
                  });
                </script>
            </main>
        </div>
    </body>
</html>
