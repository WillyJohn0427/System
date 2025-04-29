
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="QAC_Logo.png">

    <!-- Google Font: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Images/QAC.png">
    <!-- Tab/Window Title -->
    <title>PUPQAC - Document Archiving and Control System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleTracking(id) {
            const element = document.getElementById(id);
            element.classList.toggle("hidden");}
    </script>
</head>

<body class="bg-gray-100 flex h-screen overflow-hidden">
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
                <button class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition relative">
                <i class="fas fa-bell text-2xl"></i>
                </button>
            
                <!-- Settings Icon -->
                <a href="{{ route('profile1') }}" class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition flex items-center justify-center">
                    <i class="fas fa-cog text-2xl"></i>
                </a>
            
                <!-- User Info -->
              <div class="flex items-center gap-2">
              <div class="flex flex-col leading-tight text-white text-right">
                  <span class="font-medium">Luna C.</span>
                  <span class="text-sm text-gray-200 text-center">Special/Chief Admin</span>
              </div>
              <img src="{{asset('images/Chief_images/AdminProfile.png')}}" class="rounded-full h-14 w-14 object-cover" alt="User Avatar">
              </div>
            </div>
        </header> 

        <!-- Sidebar -->
        <aside class="h-screen w-64  bg-white text-black p-5 fixed h-full bg-black shadow-[4px_0_6px_-1px_rgba(0,0,0,0.1)] z-10 pt-[157px] fixed top-0 left-0 h-screen z-10 overflow-y-auto"">
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
                                <a href="{{ route('documents') }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                        <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 1H6zm7 0v5h5L13 2zM8 10h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Documents</span>
                                </a></li>

                            <!-- Request --> 
                            <li class="mb-4">
                                <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                    <span class="text-red-800 text-[21px] font-bold transition-all duration-200">Request</span> 
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

                            <!-- History -->
                            <li class="mb-4">
                                <a href="{{ route('history') }}" class="flex items-center space-x-4 p-2 hover:border-red-800 group transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.4" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                                    <path d="M13 3a9 9 0 1 0 9 9h-2a7 7 0 1 1-7-7V3zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/></svg>
                                    <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">History</span>
                                </a></li>
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
                <form method="POST" action="{{ route('logout') }}" class="absolute inset-x-6 bottom-[50px] ml-2 flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
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

            <main class="ml-[253px] flex-1 p-8 overflow-y-auto mt-[108px]">  
                <div class="bg-white shadow-md rounded-t-2xl rounded-b-2xl p-6 max-w-[1514px] mx-auto mt-10 px-8 ">
                  <h2 class="text-[35px] font-[700] text-gray-900">Request</h2>
              
                  <div class="overflow-x-auto mt-[25px] border border-gray-300 rounded-lg">
                    <table class="min-w-full text-left">
                      <thead class="bg-gray-100 text-gray-700 uppercase text-sm text-center">
                        <tr>
                          <th class="px-6 py-5 text-[17px] font-semibold">Type of Document</th>
                          <th class="px-6 py-5 text-[17px] font-semibold">Request by</th>
                          <th class="px-6 py-5 text-[17px] font-semibold">Status</th>
                          <th class="px-6 py-5 text-[17px] font-semibold">Date</th>
                          <th class="px-6 py-5 text-[17px] font-semibold">Action</th>
                        </tr>
                      </thead>
                      <tbody class="text-[19px] text-black max-w-[50%] truncate">
                        <!-- Row Template -->
                        <tr class="border-b text-center center cursor-pointer">
                          <td class="px-6 py-5">COPC Status for Main Campus</td>
                          <td class="px-6 py-5">Hanna Patricia Sauro</td>
                          <td class="px-6 py-5 text-red-600 font-medium">Important</td>
                          <td class="px-6 py-5">04/26/2025</td>
                          <td class="px-6 py-5 space-x-[2px]">
                            <button onclick="handleReceive()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Receive</button>
                            <button onclick="handleUpload()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Upload</button>
                            <button onclick="handleSend()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Send</button>
                          </td>
                        </tr>

                        <!-- Row Template -->
                        <tr class="border-b text-center cursor-pointer">
                            <td class="px-6 py-5">COPC Status for Main Campus</td>
                            <td class="px-6 py-5">Hanna Patricia Sauro</td>
                            <td class="px-6 py-5 text-red-600 font-medium">Important</td>
                            <td class="px-6 py-5">04/26/2025</td>
                            <td class="px-6 py-5 space-x-[2px]">
                              <button onclick="handleReceive()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Receive</button>
                              <button onclick="handleUpload()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Upload</button>
                              <button onclick="handleSend()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Send</button>
                            </td>
                          </tr>

                          <!-- Row Template -->
                        <tr class="border-b text-center center cursor-pointer">
                            <td class="px-6 py-5">COPC Status for Main Campus</td>
                            <td class="px-6 py-5">Hanna Patricia Sauro</td>
                            <td class="px-6 py-5 text-red-600 font-medium">Important</td>
                            <td class="px-6 py-5">04/26/2025</td>
                            <td class="px-6 py-5 space-x-[2px]">
                              <button onclick="handleReceive()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Receive</button>
                              <button onclick="handleUpload()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Upload</button>
                              <button onclick="handleSend()" class="bg-white border border-gray-400 px-3 py-1 rounded text-[15px] tracking-wider font-bold text-black hover:bg-red-800 hover:text-white transition">Send</button>
                            </td>
                          </tr>
                        <!-- You can repeat the rows as needed -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <script>
                function handleReceive() {
                  alert("Receive button clicked!");
                }
              
                function handleUpload() {
                  alert("Upload button clicked!");
                }
              
                function handleSend() {
                  alert("Send button clicked!");
                }
              </script>                           
    </body>
</html>
