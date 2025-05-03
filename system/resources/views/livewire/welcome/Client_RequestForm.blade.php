
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
    
        <div class="flex h-screen">
          <!-- Sidebar -->
          <aside class="h-screen w-64  bg-white text-black p-5 fixed h-full shadow-[4px_0_6px_-1px_rgba(0,0,0,0.1)] z-10 pt-[127px] fixed top-0 left-0 h-screen z-10 overflow-y-auto">
                <nav class="mt-5 ml-[5px]">
                    <ul>
                        <ul>
                            <!-- Dashboard -->
                            <ul>
                                <!-- Dashboard -->
                                <li class="mb-4 mt-[28px]">
                                  <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                          <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zm0 10h8v8h-8v-8zm-10 0h8v8H3v-8z" />
                                      </svg>
                                      <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Dashboard</span>
                                  </a>
                              </li>
                                <!-- Form -->
                                <li class="mb-4">
                                    <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                        <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 1H6zm7 0v5h5L13 2zM8 10h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>
                                        <span class="text-red-800 text-[21px] font-bold transition-all">Form</span>
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
        
            <!-- Main Content with Form -->
            <div class="flex flex-col items-center w-full h-screen pl-60 padding-top: 700px pt-48">
                <!-- Title Container -->
                <div class="bg-yellow-500 p-6 padding-top: 700px mt-[10px] flex justify-center items-center rounded-t-2xl w-full max-w-6xl min-h-[50px] h-20 md:drop-shadow-lg">
                    <div class="flex-1 text-center text-[30px] tracking-wide font-bold text-black text-white">Document Request Form</div>
                </div>

                <!-- Form Container -->
                <div class="flex justify-center items-center w-full h-[400px] mt-12 pt-12">
                    <form class="bg-white p-9 rounded-lg shadow-md w-full max-w-6xl">
                        <!-- Section Title -->
                        <h2 class="text-m font-medium text-gray-800 mb-2 flex items-center gap-2 mt-9">
                            <i class="fas fa-cloud text-gray-500"></i> Saved</h2>

                        <!-- Faculty Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 p-4">
                            <!-- Faculty Name -->
                            <div>
                                <label class="block text-red-800 font-semibold text-xl mb-1" for="timeframe">Faculty Name</label>
                                <input type="text" id="timeframe" name="timeframe" placeholder="Juan Dela Cruz" 
                                    class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg outline-red-800 hover:border-red-900">
                            </div>

                            <!-- Status -->
                            <div>
                                <label class="block text-red-800 font-semibold text-xl mb-1" for="status">Status</label>
                                <div class="relative">
                                    <select id="status" name="status" class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg outline-red-800 appearance-none">
                                        <option value="Urgent">Urgent</option>
                                        <option value="Important">Important</option>
                                        <option value="Medium" selected>Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                    <!-- Custom Dropdown Icon -->
                                    <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Campus & Program -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 mt-4 p-4">
                            <div>
                                <label class="block text-red-800 font-semibold text-xl mb-1" for="campus">Campus</label>
                                <div class="relative">
                                    <select id="campus" name="campus" class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg outline-red-800 appearance-none">
                                        <option value="selectcampuses" disabled selected class="text-gray-400">Select Campus</option>
                                        <option value="Alfonso">Alfonso, Cavite</option>
                                        <option value="Bansud">Bansud</option>
                                        <option value="Cabiao">Cabiao</option>
                                        <option value="Calauan">Calauan</option>
                                        <option value="GeneralLuna">General Luna</option>
                                        <option value="Lopez">Lopez</option>
                                        <option value="Maragondon">Maragondon</option>
                                        <option value="Mariveles">Mariveles</option>
                                        <option value="Mulanay">Mulanay</option>
                                        <option value="Parañaque">Parañaque</option>
                                        <option value="Pulilan">Pulilan</option>
                                        <option value="QuezonCity">Quezon City</option>
                                        <option value="Ragay">Ragay</option>
                                        <option value="Sablayan">Sablayan</option>
                                        <option value="SanJuan">San Juan</option>
                                        <option value="SanPedro">San Pedro</option>
                                        <option value="Sta.Rosa">Sta. Rosa</option>
                                        <option value="Sta.Maria">Sta. Maria</option>
                                        <option value="Sto.Tomas">Sto. Tomas</option>
                                        <option value="Taguig">Taguig</option>
                                        <option value="Unisan">Unisan</option>
                                    </select>
                                    <!-- Custom Dropdown Icon -->
                                    <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-red-800 font-medium text-xl mb-1" for="program">Program</label>
                                <div class="relative">
                                    <select id="program" name="program" class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg outline-red-800 appearance-none">
                                        <option value="selectcampuses" disabled selected class="text-gray-400">Select Program</option>
                                        <option value="BAPR">Bachelor in Advertising and Public Relations</option>
                                        <option value="BAB">Bachelor of Arts in Broadcasting</option>
                                        <option value="BACR">Bachelor of Arts in Communication Research</option>
                                        <option value="BAELS">Bachelor of Arts in English Language Studies</option>
                                        <option value="BAF">Bachelor of Arts in Filipinology</option>
                                        <option value="BAH">Bachelor of Arts in History</option>
                                        <option value="BAIS">Bachelor of Arts in International Studies</option>
                                        <option value="BAJ">Bachelor of Arts in Journalism</option>
                                        <option value="BALCS">Bachelor of Arts in Literary and Cultural Studies</option>
                                        <option value="BAPS">Bachelor of Arts in Philippine Studies</option>
                                        <option value="BAP">Bachelor of Arts in Philosophy</option>
                                        <option value="BAPE">Bachelor of Arts in Political Economy</option>
                                        <option value="BAPolSci">Bachelor of Arts in Political Science</option>
                                        <option value="BAS">Bachelor of Arts in Sociology</option>
                                        <option value="BPA">Bachelor of Performing Arts</option>
                                        <option value="BPE">Bachelor of Physical Education</option>
                                        <option value="BPA">Bachelor of Public Administration</option>
                                        <option value="BPA-PFM">Bachelor of Public Administration major in Public Financial Management</option>
                                        <option value="BSA">Bachelor of Science in Accountancy</option>
                                        <option value="BSAM">Bachelor of Science in AgriBusiness Management</option>
                                        <option value="BSAM">Bachelor of Science in Applied Mathematics</option>
                                        <option value="BSArch">Bachelor of Science in Architecture</option>
                                        <option value="BSB">Bachelor of Science in Biology</option>
                                        <option value="BSBA">Bachelor of Science in Business Administration</option>
                                        <option value="BSBA-FM">Bachelor of Science in Business Administration major in Financial Management</option>
                                        <option value="BSBA-HRM">Bachelor of Science in Business Administration major in Human Resource Management</option>
                                        <option value="BSBA-MM">Bachelor of Science in Business Administration major in Marketing Management</option>
                                        <option value="BSCE">Bachelor of Science in Civil Engineering</option>
                                        <option value="BSCE">Bachelor of Science in Computer Engineering</option>
                                        <option value="BSCS">Bachelor of Science in Computer Science</option>
                                        <option value="BSC">Bachelor of Science in Cooperatives</option>
                                        <option value="BSC-CECD">Bachelor of Science in Cooperatives major in Cooperative Education and Community Development</option>
                                        <option value="BSC-SEM">Bachelor of Science in Cooperatives major in Social Enterprise Management</option>
                                        <option value="BSE">Bachelor of Science in Economics</option>
                                        <option value="BSEE">Bachelor of Science in Electrical Engineering</option>
                                        <option value="BSEE">Bachelor of Science in Electronics Engineering</option>
                                        <option value="BSE">Bachelor of Science in Entrepreneurship</option>
                                        <option value="BSEP">Bachelor of Science in Environmental Planning</option>
                                        <option value="BSESS">Bachelor of Science in Exercise and Sports Science</option>
                                        <option value="BSFT">Bachelor of Science in Food Technology</option>
                                        <option value="BSHM">Bachelor of Science in Hospitality Management</option>
                                        <option value="BSIE">Bachelor of Science in Industrial Engineering</option>
                                        <option value="BSIT">Bachelor of Science in Information Technology</option>
                                        <option value="BSID">Bachelor of Science in Interior Design</option>
                                        <option value="BSMA">Bachelor of Science in Management Accounting</option>
                                        <option value="BSM">Bachelor of Science in Mathematics</option>
                                        <option value="BSME">Bachelor of Science in Mechanical Engineering</option>
                                        <option value="BSND">Bachelor of Science in Nutrition and Dietetics</option>
                                        <option value="BSOA">Bachelor of Science in Office Administration</option>
                                        <option value="BSOA-CT">Bachelor of Science in Office Administration major in Corporate Transcription</option>
                                        <option value="BSP">Bachelor of Science in Physics</option>
                                        <option value="BSPsych">Bachelor of Science in Psychology</option>
                                        <option value="BSREM">Bachelor of Science in Railway Engineering Management</option>
                                        <option value="BSREM">Bachelor of Science in Real Estate Management</option>
                                        <option value="BSS">Bachelor of Science in Statistics</option>
                                        <option value="BSTM">Bachelor of Science in Tourism Management</option>
                                        <option value="BSTM">Bachelor of Science in Transportation Management</option>
                                        <option value="BSE">Bachelor of Secondary Education</option>
                                        <option value="BSE-ENG">Bachelor of Secondary Education major in English</option>
                                        <option value="BSE-FIL">Bachelor of Secondary Education major in Filipino</option>
                                        <option value="BSE-MATH">Bachelor of Secondary Education major in Mathematics</option>
                                        <option value="BSE-SCI">Bachelor of Secondary Education major in Science</option>
                                        <option value="BSE-SS">Bachelor of Secondary Education major in Social Studies</option>
                                        <option value="BTLED">Bachelor of Technology and Livelihood Education</option>
                                        <option value="BTLED-HE">Bachelor of Technology and Livelihood Education major in Home Economics</option>
                                        <option value="BTLED-IA">Bachelor of Technology and Livelihood Education major in Industrial Arts</option>
                                        <option value="BTLED-ICT">Bachelor of Technology and Livelihood Education major in Information and Communication Technology</option>
                                        <option value="DBA">Doctor in Business Administration</option>
                                        <option value="DPA">Doctor in Public Administration</option>
                                        <option value="DPC">Doctor of Philosophy in Communication</option>
                                        <option value="DPE">Doctor of Philosophy in Economics</option>
                                        <option value="DPEM">Doctor of Philosophy in Education Management</option>
                                        <option value="DPELS">Doctor of Philosophy in English Language Studies</option>
                                        <option value="DPF">Doctor of Philosophy in Filipino</option>
                                        <option value="DPP">Doctor of Philosophy in Psychology</option>
                                        <option value="JD">Juris Doctor</option>
                                        <option value="MAS">Master in Applied Statistics</option>
                                        <option value="MBA">Master in Business Administration</option>
                                        <option value="MBE">Master in Business Education</option>
                                        <option value="MLIS">Master in Library and Information Science</option>
                                        <option value="MPA">Master in Public Administration</option>
                                        <option value="MAC">Master of Arts in Communication</option>
                                        <option value="MAE">Master of Arts in Education</option>
                                        <option value="MAE-ME">Master of Arts in Education major in Mathematics Education</option>
                                        <option value="MAE-TCA">Master of Arts in Education major in Teaching in the Challenged Areas</option>
                                        <option value="MAEM-SELIL">Master of Arts in Education Management with Specialization in Educational Leadership and Instructional Leadership</option>
                                        <option value="MAELS">Master of Arts in English Language Studies</option>
                                        <option value="MAELT">Master of Arts in English Language Teaching</option>
                                        <option value="MAF">Master of Arts in Filipino</option>
                                        <option value="MAPES">Master of Arts in Physical Education and Sports</option>
                                        <option value="MAP">Master of Arts in Psychology</option>
                                        <option value="MAS">Master of Arts in Sociology</option>
                                        <option value="ME-RESM">Master of Engineering major in Railway Engineering Systems Management</option>
                                        <option value="MSB">Master of Science in Biology</option>
                                        <option value="MSCE">Master of Science in Civil Engineering</option>
                                        <option value="MSCE">Master of Science in Computer Engineering</option>
                                        <option value="MSE">Master of Science in Economics</option>
                                        <option value="MSE">Master of Science in Engineering</option>
                                        <option value="MSEE">Master of Science in Electronics Engineering</option>
                                        <option value="MSIE">Master of Science in Industrial Engineering</option>
                                        <option value="MSIT">Master of Science in Information Technology</option>
                                        <option value="MSITHM">Master of Science in International Tourism and Hospitality Management</option>
                                        <option value="MSND">Master of Science in Nutrition and Dietetics</option>
                                        <option value="PBDE">Post-Baccalaureate Diploma in Education</option>
                                    </select>
                                    <!-- Custom Dropdown Icon -->
                                    <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button Inside the Form Container -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 mt-4 p-4">
                            <!-- Type of Document Dropdown -->
                            <div class="relative w-full">
                                <label class="block text-red-800 font-semibold text-xl mb-1">Type of Document *</label>
                                
                                <div id="dropdownButton" onclick="toggleDropdown()" class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg cursor-pointer flex justify-between items-center">
                                  <span id="selectedValue" class="text-gray-500">Select Document Type</span>
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                                </div>
                              
                                <div id="dropdownOptions" class="absolute z-10 w-full mt-2 bg-white border border-gray-300 rounded-lg shadow-lg hidden">
                                  <div onclick="selectOption('AACCUP Certificate')" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">AACCUP Certificate</div>
                                  <div onclick="selectOption('AACCUP Summary of Findings')" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">AACCUP Summary of Findings</div>
                                  <div onclick="selectOption('AACCUP Technical Review')" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">AACCUP Technical Review</div>
                                  <div onclick="selectOption('Certificate of Compliance (COPC)')" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Certificate of Compliance (COPC)</div>
                                  <div onclick="selectOption('Certificate of Program Compliance (COPC)')" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Certificate of Program Compliance (COPC)</div>
                                  <div onclick="showOtherInput()" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Other</div>
                                </div>
                              
                                <!-- Hidden input to store final value -->
                                <input type="hidden" id="document_type" name="document_type">
                              
                                <!-- Other input option -->
                                <div id="otherInputContainer" class="mt-2 hidden">
                                  <input type="text" id="otherInput" name="other_files" placeholder="Please specify document type"
                                    class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg outline-red-800 hover:border-red-900"
                                    oninput="setOtherValue()">
                                </div>
                            </div>
                        
                            <!-- Timeframe Input -->
                            <div>
                                <label class="block text-red-800 font-semibold text-xl mb-1" for="timeframe">Timeframe</label>
                                <input type="text" id="timeframe" name="timeframe" placeholder="Example: April 1, 2025 / Anytime" 
                                    class="w-full px-3 py-4 border-2 border-gray-300 bg-gray-50 rounded-lg outline-red-800 hover:border-red-900">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-8 text-center">
                            <button type="submit" class="bg-red-800 text-white text-xl px-12 py-3 rounded-lg hover:bg-red-900 transition-all">Submit</button>
                        </div>
                        
                        <script>
                            function toggleDropdown() {
                              document.getElementById('dropdownOptions').classList.toggle('hidden');
                            }
                          
                            function selectOption(value) {
                              document.getElementById('selectedValue').textContent = value;
                              document.getElementById('document_type').value = value;
                              document.getElementById('dropdownOptions').classList.add('hidden');
                              document.getElementById('otherInputContainer').classList.add('hidden');
                            }
                          
                            function showOtherInput() {
                              document.getElementById('selectedValue').textContent = 'Other';
                              document.getElementById('dropdownOptions').classList.add('hidden');
                              document.getElementById('otherInputContainer').classList.remove('hidden');
                              document.getElementById('document_type').value = ''; // clear previous selection
                            }
                          
                            function setOtherValue() {
                              const otherValue = document.getElementById('otherInput').value;
                              document.getElementById('document_type').value = otherValue;
                            }
                          
                            // Close dropdown when clicking outside
                            document.addEventListener('click', function (event) {
                              const dropdown = document.getElementById('dropdownButton');
                              const options = document.getElementById('dropdownOptions');
                          
                              if (!dropdown.contains(event.target) && !options.contains(event.target)) {
                                options.classList.add('hidden');
                              }
                            });


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
                    </form>
                </div>
            </div>
        </div><br><br><br>
    </body>
</html>
