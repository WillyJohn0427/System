
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="QAC_Logo.png">

    <!-- Google Font: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Images/QAC.jpeg">
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
          <img src="Images/QAC.jpeg" alt="QAC Logo" class="h-[80px] w[80px] object-contain" />
  
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
          <button class="bg-white text-red-900 rounded-full h-14 w-14 hover:bg-gray-100 transition">
          <i class="fas fa-cog text-2xl"></i>
          </button>
      
          <!-- User Info -->
          <div class="flex items-center gap-2">
          <div class="flex flex-col leading-tight text-white text-right">
              <span class="font-medium">Nabila A.</span>
              <span class="text-sm text-gray-200 text-center">Client</span>
          </div>
          <img src="Images/Profile.jpeg" class="rounded-full h-14 w-14 object-cover" alt="User Avatar">
          </div>
      </div>
  </header> 

  <!-- Sidebar -->
  <aside class="h-screen w-64  bg-white text-black p-5 fixed h-full bg-black shadow-[4px_0_6px_-1px_rgba(0,0,0,0.1)] z-10 pt-[157px] fixed top-0 left-0 h-screen z-10 overflow-y-auto">
    <nav class="-mt-[28px] ml-[4px]">
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
                      <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                          <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.83a2 2 0 0 0-.59-1.42l-4.83-4.83A2 2 0 0 0 13.17 1H6zm7 0v5h5L13 2zM8 10h8v2H8v-2zm0 4h8v2H8v-2z"/></svg>
                          <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Form</span>
                      </a></li>
                  <!-- Tracking -->
                  <li class="mb-4">
                      <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1 0 4.5 4.5a7.5 7.5 0 0 0 12.15 12.15z" /> </svg>
                        <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Tracking</span>
                      </a></li>
                  <!-- Events -->
                  <li class="mb-4">
                      <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.3" stroke="currentColor" class="w-7 h-7 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                          <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                          <span class="text-red-800 text-[20px] group-hover:text-red-800 group-hover:text-[21px] group-hover:font-bold transition-all duration-200">Events</span>
                      </a></li>
                  <!-- History -->
                  <li class="mb-4">
                      <a href="#" class="flex items-center space-x-4 p-2 border-l-4 border-red-800 group transition duration-200">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="0.4" stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800" viewBox="0 0 24 24">
                          <path d="M13 3a9 9 0 1 0 9 9h-2a7 7 0 1 1-7-7V3zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/></svg>
                          <span class="text-red-800 text-[21px] font-bold transition-all">History</span>
                      </a></li>
                  </ul>
              </ul>
          </nav>
          <button class="absolute inset-x-6 bottom-[50px] ml-2 flex items-center space-x-4 p-2 border-l-4 border-transparent group transition duration-200">
              <svg xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 24 24" stroke-width="2" 
                  stroke="currentColor" class="w-8 h-8 text-red-800 group-hover:text-red-800">
              <path stroke-linecap="round" stroke-linejoin="round" 
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
              </svg>
              <span class="text-red-800 text-[19px] group-hover:text-red-800 group-hover:text-[20px] group-hover:font-bold transition-all duration-200">Log Out</span>
          </button>                  
      </aside>

      <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-[253px] bg-white border-r border-gray-300">
          <!-- Your sidebar contents here -->
        </aside>
      
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
              <!-- Single Row -->
              <div class="flex items-center justify-between border-b pb-4 pt-[10px] border-gray-500 hover:bg-gray-200 rounded-lg">
                <p class="text-[20px] text-black pl-[8px]">Certificate of Program Compliance (COPC Evaluation) BSBA-FM</p>
                <div class="flex space-x-4 text-gray-600">
                  <!-- View Icon -->
                  <button title="View File" class="hover:text-red-600">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 12C1 12 5 5 12 5C19 5 23 12 23 12C23 12 19 19 12 19C5 19 1 12 1 12Z" stroke="#555" stroke-width="2" fill="none"/>
                      <circle cx="12" cy="12" r="3" stroke="#555" stroke-width="2" fill="none"/>
                    </svg>
                  </button>
                  <!-- Download Icon -->
                  <button title="Download File" class="pr-[8px] hover:text-red-600">
                    <svg class="w-[30px] h-[30px] text-gray-700 mb-[1px]" 
                      fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 3V15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 11L12 17L18 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 21H18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
              </div>
              
              <!-- Single Row -->
              <div class="flex items-center justify-between border-b pb-4 pt-[10px] border-gray-500 hover:bg-gray-200 rounded-lg">
                <p class="text-[20px] text-black pl-[8px]">Certificate of Program Compliance (COPC Evaluation) BSBA-FM</p>
                <div class="flex space-x-4 text-gray-600">
                  <!-- View Icon -->
                  <button title="View File" class="hover:text-red-600">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 12C1 12 5 5 12 5C19 5 23 12 23 12C23 12 19 19 12 19C5 19 1 12 1 12Z" stroke="#555" stroke-width="2" fill="none"/>
                      <circle cx="12" cy="12" r="3" stroke="#555" stroke-width="2" fill="none"/>
                    </svg>
                  </button>
                  <!-- Download Icon -->
                  <button title="Download File" class="pr-[8px] hover:text-red-600">
                    <svg class="w-[30px] h-[30px] text-gray-700 mb-[1px]" 
                      fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 3V15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 11L12 17L18 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M6 21H18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Single Row -->
              <div class="flex items-center justify-between border-b pb-4 pt-[10px] border-gray-500 hover:bg-gray-200 rounded-lg">
                <p class="text-[20px] text-black pl-[8px]">Certificate of Program Compliance (COPC Evaluation) BSBA-FM</p>
                <div class="flex space-x-4 text-gray-600">
                  <!-- View Icon -->
                  <button title="View File" class="hover:text-red-600">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 12C1 12 5 5 12 5C19 5 23 12 23 12C23 12 19 19 12 19C5 19 1 12 1 12Z" stroke="#555" stroke-width="2" fill="none"/>
                      <circle cx="12" cy="12" r="3" stroke="#555" stroke-width="2" fill="none"/>
                    </svg>
                  </button>
                  <!-- Download Icon -->
                  <button title="Download File" class="pr-[8px] hover:text-red-600">
                    <svg class="w-[30px] h-[30px] text-gray-700 mb-[1px]" 
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
        </main>
      </div>      
    </body>
</html>
