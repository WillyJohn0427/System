
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="QAC_Logo.png">

    <!-- Google Font: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('images/Client_images/QAC.jpeg')}}">
    <!-- Tab/Window Title -->
    <title>PUPQAC - Document Archiving and Control System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleTracking(id) {
            const element = document.getElementById(id);
            element.classList.toggle("hidden");}
    </script>
</head>

<body class="bg-gray-100">
        <!-- Header -->
        <header class="bg-red-900 text-white p-4 pl-12 fixed w-full top-0 fixed top-0 left-0 right-0 h-[130px] shadow z-20 flex items-center px-4 flex justify-between items-center">
            <!-- Logo and title -->
            <div class="flex items-center gap-4">
                <!-- Logo Image -->
                <img src="{{asset('images/Client_images/QAC.jpeg')}}" alt="QAC Logo" class="h-[80px] w[80px] object-contain" />
        
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
                <a href="{{ route('Cprofile') }}" class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition flex items-center justify-center">
                    <i class="fas fa-cog text-2xl"></i>
                </a>
            
                <!-- User Info -->
                <div class="flex items-center gap-2">
                <div class="flex flex-col leading-tight text-white text-right">
                    <span class="font-medium">Nabila A.</span>
                    <span class="text-sm text-gray-200 text-center">Client</span>
                </div>
                <img src="{{asset('images/Client_images/Profile.jpeg')}}" class="rounded-full h-14 w-14 object-cover" alt="User Avatar">
                </div>
            </div>
        </header>

  <!-- Sidebar -->
  <aside class="h-screen w-64  bg-white text-black p-5 fixed h-full shadow-[4px_0_6px_-1px_rgba(0,0,0,0.1)] z-10 pt-[157px] fixed top-0 left-0 h-screen z-10 overflow-y-auto">
    <nav class="-mt-[30px] ml-[5px]">
      <ul>
          <ul>
              <!-- Dashboard -->
              <ul>
                  <!-- Dashboard -->
                  <li class="mb-4 mt-[28px]">
                    <a href="{{ route('cdashboard') }}" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                            <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zm0 10h8v8h-8v-8zm-10 0h8v8H3v-8z" />
                        </svg>
                        <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Dashboard</span>
                    </a>
                </li>
                  <!-- Form -->
                  <li class="mb-4">
                      <a href="{{ route('Cform') }}" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                          <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 1H6zm7 0v5h5L13 2zM8 10h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>
                          <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Request</span>
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
                      <a ref="{{ route('Chistory') }}" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.4" stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                          <path d="M13 3a9 9 0 1 0 9 9h-2a7 7 0 1 1-7-7V3zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/></svg>
                          <span class="text-red-800 text-[21px] font-bold transition-all">Document</span>
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

      <div class="flex min-h-screen pl-[253px]">
      
         <!-- Main Content -->
         <main class="flex-1 p-8 overflow-y-auto pt-[123px] bg-gray-100">
          <!-- Search Bar -->
          <div class="max-w-[895px] mx-auto mt-10 px-8">
          <div class="mb-6">
            <div class="relative">
              <input type="text" placeholder="Enter keyword"
                class="w-full p-4 pl-16 border border-red-800 focus:outline-none text-lg focus:ring-2 focus:ring-red-800 rounded-full shadow-md" />
              <i class="fas fa-search absolute left-[24px] top-1/2 transform -translate-y-1/2 text-red-800"></i>
            </div>
          </div></div>
    
          <div class="max-w-[1555px] mx-auto -mt-[7px] px-8">
            
            <!-- Document List -->
            <div class="space-y-4 mt-[55px] mb-[10px]">
              <!-- 1st Row -->
              <div class="flex items-center justify-between border-b pb-4 pt-[10px] border-gray-500 hover:bg-gray-200 rounded-lg">
                <p class="text-[20px] text-black pl-[8px]">Certificate of Program Compliance (COPC Evaluation) BSBA-FM</p>
                <div class="flex space-x-6 text-gray-600">
                  <!-- View Icon -->
                  <button title="View File" class="hover:text-red-600">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 12C1 12 5 5 12 5C19 5 23 12 23 12C23 12 19 19 12 19C5 19 1 12 1 12Z" stroke="#555" stroke-width="2" fill="none"/>
                      <circle cx="12" cy="12" r="3" stroke="#555" stroke-width="2" fill="none"/>
                    </svg>
                  </button>
                  <!-- Download Icon -->
                  <button title="Download File" class="pr-[8px] hover:text-red-600">
                    <svg class="w-[25px] h-[25px] text-gray-700 mb-[1px]" 
                      fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 3V15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 11L12 17L18 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 21H18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
              </div>
              
              <!-- 2nd Row -->
              <div class="flex items-center justify-between border-b pb-4 pt-[10px] border-gray-500 hover:bg-gray-200 rounded-lg">
                <p class="text-[20px] text-black pl-[8px]">Certificate of Program Compliance (COPC Evaluation) BSBA-FM</p>
                <div class="flex space-x-6 text-gray-600">
                  <!-- View Icon -->
                  <button title="View File" class="hover:text-red-600">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 12C1 12 5 5 12 5C19 5 23 12 23 12C23 12 19 19 12 19C5 19 1 12 1 12Z" stroke="#555" stroke-width="2" fill="none"/>
                      <circle cx="12" cy="12" r="3" stroke="#555" stroke-width="2" fill="none"/>
                    </svg>
                  </button>
                  <!-- Download Icon -->
                  <button title="Download File" class="pr-[8px] hover:text-red-600">
                    <svg class="w-[25px] h-[25px] text-gray-700 mb-[1px]" 
                      fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 3V15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 11L12 17L18 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 21H18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- 3rd Row -->
              <div class="flex items-center justify-between border-b pb-4 pt-[10px] border-gray-500 hover:bg-gray-200 rounded-lg">
                <p class="text-[20px] text-black pl-[8px]">Certificate of Program Compliance (COPC Evaluation) BSBA-FM</p>
                <div class="flex space-x-6 text-gray-600">
                  <!-- View Icon -->
                  <button title="View File" class="hover:text-red-600">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 12C1 12 5 5 12 5C19 5 23 12 23 12C23 12 19 19 12 19C5 19 1 12 1 12Z" stroke="#555" stroke-width="2" fill="none"/>
                      <circle cx="12" cy="12" r="3" stroke="#555" stroke-width="2" fill="none"/>
                    </svg>
                  </button>
                  <!-- Download Icon -->
                  <button title="Download File" class="pr-[8px] hover:text-red-600">
                    <svg class="w-[25px] h-[25px] text-gray-700 mb-[1px]" 
                      fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 3V15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 11L12 17L18 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 21H18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
              </div>
      
              <!-- Repeat similar rows -->
              <div class="text-right pt-[8px]">
                <a href="#" class="text-red-900 text-md font-bold hover:underline">See More</a>
              </div>
            </div>
          </div>

          <script>
            function openLogoutModal() {
            document.getElementById('logoutModal').classList.remove('hidden');}
                            
            function closeLogoutModal() {
            document.getElementById('logoutModal').classList.add('hidden'); }
                            
            // Function to handle logout confirmation (this is just a placeholder)
            function confirmLogout() {
            alert("You have been logged out!"); 
            // Example: window.location.href = '/logout';  <-- real logout
            closeLogoutModal();}

            function toggleDropdown() {
            document.getElementById('notificationDropdown').classList.toggle('hidden');
            // When opening notification dropdown, also close 3-dot mini-dropdown
            document.getElementById('threeDotDropdown').classList.add('hidden');}
                            
            function toggleThreeDotDropdown() {
            document.getElementById('threeDotDropdown').classList.toggle('hidden');}

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
