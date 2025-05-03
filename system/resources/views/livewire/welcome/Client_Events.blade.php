
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
       <aside class="h-screen w-64  bg-white text-black p-5 fixed h-full shadow-[4px_0_6px_-1px_rgba(0,0,0,0.1)] z-10 pt-[127px] fixed top-0 left-0 h-screen z-10 overflow-y-auto">
        <nav class="mt-5 ml-[5px]">
            <ul>
                <ul>
                    <!-- Dashboard -->
                    <ul>
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
                                <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.3" stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                    <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                                    <span class="text-red-800 text-[21px] font-bold transition-all">Events</span>
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
            </ul>
        </nav>
        <form method="POST" action="{{ route('logout') }}" class="absolute inset-x-2 bottom-[50px] ml-2 flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                @csrf
                <a href="{{ route('login1') }}" class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" 
                        stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                    </svg>
                    <span class="text-red-800 text-[19px] group-hover:text-red-800 group-hover:text-[20px] group-hover:font-bold transition-all duration-200">Log Out</span>
                </a>
              </form>                  
    </aside>

        <div>
        <!-- Main Content -->
        <main class="flex flex-col items-center w-[full] mt-4 p-4 pt-[160px] pl-60">
            <!-- Event Container -->
            <div class="bg-white shadow-md w-full h-[750px] rounded-t-2xl rounded-b-2xl ml-[15px]" style="max-width: 1500px;">
                <div class="bg-white p-6 padding-top: 700px mt-[10px] rounded-t-5xl w-full max-w-6xl min-h-[80px] max-w-[1080px] ml-[35px]">
                    <div class="-ml-[20px] text-left">
                        <h2 class="text-[35px] font-[700] text-gray-900">Events</h2>
                    </div>  
                </div>
                <!-- Legend -->
                    <div class="flex">
                        <div class="px-4 pr-[187px] ml-[30px] py-2 text-2xl font-bold text-black rounded-xl">Legend</div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-4 h-4 bg-yellow-500 rounded-full inline-block ml-[50px]"></span>
                        <div class="px-4 pr-[165px] py-2 text-lg text-black rounded-xl">Vacant Day</div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-4 h-4 bg-red-900 rounded-full inline-block ml-[50px]"></span>
                        <div class="px-4 pr-[165px] py-2 text-lg text-black rounded-xl">Scheduled Event</div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-4 h-4 bg-blue-700 rounded-full inline-block ml-[50px]"></span>
                        <div class="px-4 pr-[165px] py-2 text-lg text-black rounded-xl">Holiday</div>
                    </div>
                
                <div  class="drop-shadow-md -mt-[240px] ml-[230px]">
                    <div  class="drop-shadow-md">
                        <div  class="drop-shadow-md">

                          <div class="max-w-5xl mx-auto bg-yellow-500 text-black rounded-t-2xl shadow p-[12px] -mb-[10px] tracking-wider md:drop-shadow-lg">
                            <!-- Navigation -->
                            <div class="flex justify-between pb-[7px]">
                              <button onclick="prevMonth()" class=" text-black text-xl font-bold px-5 py-1 hover:text-white hover: transition-all"><span class="text-4xl -mt-3 mr-2">&lsaquo;</span></button>
                              <h2 id="monthYear" class="text-[30px] font-bold text-black pt-[7px] pl-[7px]"></h2>
                              <button onclick="nextMonth()" class=" text-black text-xl font-bold px-5 py-1 hover:text-white hover: transition-all"><span class="text-4xl -mt-3 ml-2">&rsaquo;</span></button>
                            </div>
                          </div>

                            <div class="max-w-5xl mx-auto bg-gray-50 text-red-900 rounded-b-2xl shadow p-6">
                              <!-- Calendar Grid -->
                              <div class="grid grid-cols-7 gap-2 rounded-xl pt-2 pb-2 text-center text-[17px] font-bold tracking-wide">
                                <div>Sunday</div><div>Monday</div><div>Tuesday</div><div>Wednesday</div><div>Thursday</div><div>Friday</div><div>Saturday</div>
                              </div>
                              <div id="calendarDays" class="grid grid-cols-7 gap-1 drop-shadow-lg mt-2"></div>
                            </div>
                          
                            <!-- View Modal -->
                            <div id="viewModal" class="fixed inset-0 ml-[123px] mr-[123px] rounded-2xl bg-black bg-opacity-40 flex items-center justify-center hidden z-50">
                              <div class="bg-white p-12 rounded-xl shadow-lg text-center w-80 relative"> 
                                <!-- X Close Button -->
                                <button onclick="closeModal()" 
                                        class="absolute top-1 right-3 text-gray-500 hover:text-red-700 text-2xl font-bold focus:outline-none">
                                  &times;
                                </button>
                                <p id="eventText" class="text-[20px] font-bold text-red-900 tracking-wider">No Event</p>
                              </div>
                            </div>

                            <!-- JavaScript -->
                            <!-- Inside <script> tag -->
                            <script>
                              let currentDate = new Date();
                              let selectedDate = '';
                              const events = {};

                              const holidays = {
                                  "2025-01-01": "New Year's Day",
                                  "2025-01-23": "First Philippine Republic Day",
                                  "2025-01-27": "Lailatul Isra Wal Mi Raj",
                                  "2025-01-29": "Lunar New Year's Day",
                                  "2025-02-25": "EDSA People Power Anniversary",
                                  "2025-03-02": "Ramadan Start",
                                  "2025-03-20": "March Equinox",
                                  "2025-03-31": "Eidul-Fitar",
                                  "2025-04-01": "Eidul-Fitar Holiday",
                                  "2025-04-09": "Araw ng Kagitingan",
                                  "2025-04-17": "Maundy Thursday",
                                  "2025-04-18": "Good Friday",
                                  "2025-04-19": "Black Saturday",
                                  "2025-04-20": "Easter Sunday",
                                  "2025-05-01": "Labor Day",
                                  "2025-06-07": "Eid al-Adha",
                                  "2025-06-12": "Independence Day",
                                  "2025-06-21": "June Solstice",
                                  "2025-06-27": "Amun Jadid",
                                  "2025-08-21": "Ninoy Aquino Day",
                                  "2025-08-25": "National Heroes Day",
                                  "2025-09-03": "Yamashita Surrender Day",
                                  "2025-09-05": "Maulid un-Nabi",
                                  "2025-09-08": "Feast of the Nativity of Mary",
                                  "2025-09-23": "September Equinox",
                                  "2025-10-31": "Special non-working Day",
                                  "2025-11-01": "All Saints' Day",
                                  "2025-11-02": "All Souls' Day",
                                  "2025-11-30": "Bonifacio Day",
                                  "2025-12-08": "Feast of the Immaculate Conception",
                                  "2025-12-21": "December Solstice",
                                  "2025-12-25": "Christmas Day",
                                  "2025-12-30": "Rizal Day",
                                  "2025-12-31": "New Year's Eve"
                              };

                              function renderCalendar() {
                                const year = currentDate.getFullYear();
                                const month = currentDate.getMonth();
                                const firstDay = new Date(year, month, 1).getDay();
                                const lastDate = new Date(year, month + 1, 0).getDate();
                            
                                document.getElementById('monthYear').innerText =
                                    `${currentDate.toLocaleString('default', { month: 'long' })} ${year}`;
                            
                                const calendar = document.getElementById('calendarDays');
                                calendar.innerHTML = '';
                            
                                const totalCells = 42; // 6 rows x 7 columns = 42 cells
                                const daysArray = [];
                            
                                // Step 1: Add leading blank cells
                                for (let i = 0; i < firstDay; i++) {
                                    daysArray.push('');
                                }
                            
                                // Step 2: Add actual days
                                for (let day = 1; day <= lastDate; day++) {
                                    daysArray.push(day);
                                }
                            
                                // Step 3: Add trailing blank cells if needed
                                while (daysArray.length < totalCells) {
                                    daysArray.push('');
                                }
                            
                                // Step 4: Render all 42 cells
                                for (let i = 0; i < totalCells; i++) {
                                    const day = daysArray[i];
                                    let content = `<div class="h-20 border rounded-xl bg-white"></div>`;
                            
                                    if (day !== '') {
                                        const dateKey = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                                        const hasEvent = events[dateKey];
                                        const isHoliday = holidays[dateKey];
                                        let dot = '';
                            
                                        if (hasEvent) {
                                            dot = `<div class="absolute bottom-1 left-1 w-4 h-4 bg-red-700 rounded-full"></div>`;
                                        } else if (isHoliday) {
                                            dot = `<div class="absolute bottom-1 left-1 w-4 h-4 bg-blue-600 rounded-full"></div>`;
                                        } else {
                                            dot = `<div class="absolute bottom-1 left-1 w-4 h-4 bg-yellow-400 rounded-full"></div>`;
                                        }
                            
                                        content = `
                                            <div onclick="showEvent('${dateKey}')" class="h-20 border rounded-xl bg-white hover:bg-gray-200 cursor-pointer relative">
                                                <div class="absolute top-1 right-1 font-bold text-lg">${day}</div>
                                                ${dot}
                                            </div>
                                        `;
                                    }
                            
                                    calendar.innerHTML += content;
                                }
                            }                            

                              function prevMonth() {
                                  currentDate.setMonth(currentDate.getMonth() - 1);
                                  renderCalendar();
                              }

                              function nextMonth() {
                                  currentDate.setMonth(currentDate.getMonth() + 1);
                                  renderCalendar();
                              }

                              function showEvent(dateKey) {
                                  selectedDate = dateKey;
                                  const eventText = events[dateKey] || holidays[dateKey] || 'No Event';
                                  document.getElementById('eventText').innerText = eventText;
                                  document.getElementById('viewModal').classList.remove('hidden');
                              }

                              function closeModal() {
                                  document.getElementById('viewModal').classList.add('hidden');
                              }

                              function showAddModal() {
                                  document.getElementById('viewModal').classList.add('hidden');
                                  document.getElementById('eventInput').value = events[selectedDate] || '';
                                  document.getElementById('addModal').classList.remove('hidden');
                              }

                              function closeAddModal() {
                                  document.getElementById('addModal').classList.add('hidden');
                              }

                              function saveEvent() {
                                  const value = document.getElementById('eventInput').value.trim();
                                  if (value) {
                                      events[selectedDate] = value;
                                  }
                                  closeAddModal();
                                  renderCalendar();
                              }

                              renderCalendar();


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
                            </script>
                        </div>
                </div>
            </div>
        </main>
        </div>
    </div>
    </body>
</html>
