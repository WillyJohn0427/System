
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="QAC.png">

    <!-- Google Font: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('images/Chief_images/QAC.jpeg')}}">
    <!-- Tab/Window Title -->
    <title>PUPQAC - Document Archiving and Control System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleTracking(id) {
            const element = document.getElementById(id);
            element.classList.toggle("hidden");}
    </script>
</head>

<body class="bg-gray-100 h-screen overflow-hidden">
        <!-- Header -->
        <header class="bg-red-900 text-white p-4 pl-12 fixed w-full top-0 fixed top-0 left-0 right-0 h-[130px] shadow z-20 flex items-center px-4 flex justify-between items-center">
            <!-- Logo and title -->
            <div class="flex items-center gap-4">
                <!-- Logo Image -->
                <img src="{{asset('images/Chief_images/QAC.jpeg')}}" alt="QAC Logo" class="h-[80px] w[80px] object-contain" />
        
                <!-- Title -->
                <div class="pl-5 mt-2">
                    <div class="text-md text-[25px] -mb-3" style="font-family: 'Playfair Display SC', serif;">Quality Assurance Center</div>
                    <div class="text-[40px] font-bold mb-1">Document Archiving and Control System</div>
                </div>
            </div>
        
             <!-- Notification and profile -->
        <div class="flex items-center gap-4">
            <!-- Notification Icon -->
        <div class="relative">
            <button onclick="toggleDropdown()" class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition relative">
            <i class="fas fa-bell text-2xl"></i>
            <span class="absolute top-[1px] -right-[4px] bg-red-600 text-white text-[15px] font-bold rounded-full h-6 w-6 flex items-center justify-center">3</span>
            </button>
    
            <!-- Main Notification Dropdown -->
            <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg overflow-hidden z-50">
            <div class="bg-yellow-400 px-4 py-2 font-bold tracking-wide pt-3 pb-3 text-xl text-white">Notifications</div>
    
            <!-- "All" and "Unread" Buttons + Three Dot -->
            <div class="flex justify-between items-center px-4 py-2 relative">
                <div class="flex gap-4">
                <button class="font-bold text-blue-600 bg-blue-100 px-3 py-1 rounded-full">All</button>
                <button class="font-bold text-gray-600 hover:text-black">Unread</button>
                </div>
    
                <!-- Three Dot Button -->
                <button id="threeDotButton" onclick="toggleThreeDotDropdown()" class="text-gray-600 hover:text-black relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                </button>
    
                <!-- Mini Dropdown for Three Dots -->
                <div id="threeDotDropdown" class="hidden absolute right-0 top-10 w-48 bg-gray-200 border border-gray-300 rounded-lg shadow-lg z-50">
                <button class="w-full text-left px-4 py-2 hover:bg-red-800 text-black hover:text-white">Mark All as Read</button>
                <button class="w-full text-left px-4 py-2 hover:bg-red-800 text-black hover:text-white">Turn off Notification</button>
                </div>
            </div>
    
            <!-- Notifications List -->
            <div class="divide-y divide-gray-200">
                <!-- Notification 1 -->
                <div class="flex items-center px-4 py-3 hover:bg-gray-100 cursor-pointer relative">
                <img src="{{asset('images/Client_images/Profile.jpeg')}}" alt="User Avatar" class="rounded-full h-10 w-10 object-cover mr-3">
                <div class="flex-1">
                    <p class="text-black"><strong>Kevin Mendoza</strong> requested a document.</p>
                    <p class="text-xs text-gray-400">40 minutes ago</p>
                </div>
                <div class="absolute top-4 right-4 h-3 w-3 bg-red-700 rounded-full"></div>
                </div>
    
                <!-- Notification 2 -->
                <div class="flex items-center px-4 py-3 hover:bg-gray-100 cursor-pointer relative">
                <img src="{{asset('images/Client_images/Profile.jpeg')}}" alt="User Avatar" class="rounded-full h-10 w-10 object-cover mr-3">
                <div class="flex-1">
                    <p class="text-black"><strong>Marynhel Estorninos</strong> requested a document.</p>
                    <p class="text-xs text-gray-400">1 day ago</p>
                </div>
                <div class="absolute top-4 right-4 h-3 w-3 bg-red-700 rounded-full"></div>
                </div>
    
                <!-- Notification 3 -->
                <div class="flex items-center px-4 py-3 hover:bg-gray-100 cursor-pointer relative">
                <img src="{{asset('images/Client_images/Profile.jpeg')}}" alt="User Avatar" class="rounded-full h-10 w-10 object-cover mr-3">
                <div class="flex-1">
                    <p class="text-gray-500"><strong>Kassandra Denise Serillano</strong> requested a document.</p>
                    <p class="text-xs text-gray-400">10 hours ago</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        
            <!-- Settings Icon -->
            <a href="{{ route('profile1') }}" class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition flex items-center justify-center">
                    <i class="fas fa-cog text-2xl"></i>
                </a>
        
            <!-- User Info -->
            <div class="flex items-center gap-2">
            <div class="flex flex-col leading-tight text-white text-right">
                <span class="font-medium">Luna C.</span>
                <span class="text-sm text-gray-200 text-center">Executive</span>
            </div>
            <img src="{{asset('images/Chief_images/AdminProfile.png')}}" class="rounded-full h-14 w-14 object-cover" alt="User Avatar">
            </div>
        </div>
        </header> 

        <!-- Sidebar -->
        <aside class="w-64 bg-white text-white p-5 fixed top-[130px] pt-[27px] left-0 h-[calc(100vh-130px)] shadow-lg z-10 overflow-y-auto">
            <nav class="ml-2">
                <ul>
                    <ul>
                        <!-- Dashboard -->
                        <ul>
                            <!-- Dashboard -->
                            <li class="mb-4">
                                <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                        <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zm0 10h8v8h-8v-8zm-10 0h8v8H3v-8z" />
                                    </svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Dashboard</span>
                                </a>
                            </li>

                            <!-- Document -->
                            <li class="mb-4">
                              <a href="{{ route('documents') }}" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                      <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 1H6zm7 0v5h5L13 2zM8 10h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>
                                  <span class="text-red-800 text-[21px] font-bold transition-all duration-200">Documents</span>
                              </a></li>

                            <!-- Request --> 
                            <li class="mb-4">
                                <a href="{{ route('request')  }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Request</span> 
                                </a>
                                </li>

                            <!-- Events -->
                            <li class="mb-4">
                                <a href="{{ route('event') }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.3" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                    <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Events</span>
                                </a>
                            </li>

                            <!-- Users -->
                            <li class="mb-4">
                                <a href="{{ route('users2') }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="2" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800 ml-[3px]" viewBox="0 0 24 24">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <line x1="20" y1="8" x2="20" y2="14" />
                                    <line x1="17" y1="11" x2="23" y2="11" /></svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Users</span>
                                </a>
                            </li>

                            <!-- Report -->
                            <li class="mb-4">
                                <a href="{{ route('report') }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800">
                                        <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                                    </svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Report</span>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </nav>
                <a href="{{ route('bin') }}" class="absolute inset-x-6 bottom-[110px] ml-1 flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="2" 
                    stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2" />
                </svg>
                <span class="text-red-800 text-[19px] group-hover:text-red-800 group-hover:text-[20px] group-hover:font-bold transition-all duration-200">Bin</span>
                </a>  
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
            
            <main class="ml-64 p-4 pt-[200px] flex flex-col items-center max-w-full">
                <div class="rounded-lg p-4 w-full max-w-7xl">
                  
                  <!-- Cards Grid -->
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mt-6 justify-items-center">
                    
                    <!-- Card 1 -->
                    <a href="{{ route('documents2') }}" class="relative rounded-tr-[70px] rounded-tl-[15px] rounded-bl-[70px] rounded-br-[15px] h-[550px] w-full max-w-[420px] overflow-hidden shadow-lg shadow-gray-200 group">
                        <img src="{{ asset('images/DBoard_images/PUP_Pylon.jpg') }}" alt="PUP Campuses" class="absolute inset-0 h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-red-800 opacity-60 group-hover:opacity-0 transition-opacity"></div>
                    <div class="absolute bottom-0 w-full bg-red-800 bg-opacity-80 py-10 text-center">
                     <h3 class="text-white text-[30px] font-bold">Main Campus</h3>
                    </div>
                    </a>
              
                    <!-- Card 2 -->
                    <a href="{{ route('documents4') }}" class="relative rounded-tr-[70px] rounded-tl-[15px] rounded-bl-[70px] rounded-br-[15px] h-[550px] w-full max-w-[420px] overflow-hidden shadow-lg shadow-gray-200 group">
                        <img src="{{ asset('images/DBoard_images/PUP_Pylon.jpg') }}" alt="PUP Campuses" class="absolute inset-0 h-full w-full object-cover" />
                        <div class="absolute inset-0 bg-red-800 opacity-60 group-hover:opacity-0 transition-opacity"></div>
                        <div class="absolute bottom-0 w-full bg-red-800 bg-opacity-80 py-10 text-center">
                            <h3 class="text-white text-[30px] font-bold">Campuses</h3>
                        </div>
                    </a>
                  </div>
                </div>
                    <script>
                    function openLogoutModal() {
                    document.getElementById('logoutModal').classList.remove('hidden');
                    }
                            
                    function closeLogoutModal() {
                    document.getElementById('logoutModal').classList.add('hidden');
                    }
                            
                    // Function to handle logout confirmation (this is just a placeholder)
                    function confirmLogout() {
                    alert("You have been logged out!"); 
                    // Example: window.location.href = '/logout';  <-- real logout
                    closeLogoutModal();
                    }

                    function toggleDropdown() {
                    document.getElementById('notificationDropdown').classList.toggle('hidden');
                    // When opening notification dropdown, also close 3-dot mini-dropdown
                    document.getElementById('threeDotDropdown').classList.add('hidden');
                    }
                            
                    function toggleThreeDotDropdown() {
                    document.getElementById('threeDotDropdown').classList.toggle('hidden');
                    }
                        
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
    </body>
</html>
