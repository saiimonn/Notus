<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nōtus</title>
    <link rel="stylesheet" href="css/tailwind.css" />
  </head>
  <body class="flex flex-row w-full min-h-screen bg-[#f8f9fa]"style="font-family: 'Inter', sans-serif">
    <!-- Sidebar (Put in diff file and include it here) note: change icons -->
    <aside class="border-r border-[#4e4b44] w-1/7 p-4">
      <div class="flex flex-col border rounded-md shadow-sm">
        <a href="" class="flex flex-row gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
            </svg>
            All Tasks
          </a>

        <a href="" class="flex flex-row gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
            </svg>
            Tasks Today
          </a>

        <a href="" class="flex flex-row gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
          </svg>
          Upcoming Tasks
        </a>

        <a href="" class="flex flex-row gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
          </svg>
          Overdue Tasks
        </a>

        <a href="" class="flex flex-row gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
          </svg>
          Completed Tasks
        </a>

        <a href="" class="flex flex-row gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
          </svg>
          Add Task
        </a>
      </div>
    </aside>

    <div class="flex flex-col w-full">
      <!-- Header (Put in diff file and include here) -->
      <header class="h-14 w-full px-20 py-2 flex justify-between items-center border-b border-[#4e4b44]">
        <h1 class="text-2xl font-bold">Nōtus</h1>

        <nav class="flex flex-row items-center gap-12">
          <div class="flex items-center gap-1 p-1 font-semibold">
            <span id="hours">2</span>
            <span>:</span>
            <span id="minutes">35</span>
            <span>:</span>
            <span id="seconds">40</span>
            <span id="session">AM</span>
          </div>

          <button class="border rounded-md border-[#4e4b44] p-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
            </svg>
          </button>
        </nav>
      </header>

      <!-- Dashboard (put in diff file and include here) -->
      <div class="flex flex-col px-24 py-12 gap-8 w-full">
        <div class="flex flex-col gap-4 justify-center text-center items-center">
          <h1 class="text-3xl font-bold">Your Task Overview</h1>
          <p class="text-xl font-extralight">Stay organized</p>
        </div>

        <hr />

        <div class="flex flex-row justify-between py-4 items-center">
          <div class="flex flex-col gap-2">
            <h3 class="text-xl font-bold">Today is April 25, 2025</h3>
            <p class="text-lg font-light">You have 3 tasks pending and 2 completed</p>
          </div>

          <button class="flex items-center gap-2 border rounded-xl border-blue-950 px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
            Add Task
         </button>
        </div>

        <!-- To do list section (Put in diff file and include here) -->
        <div class="flex gap-6 p-6 bg-gray-100 min-h-screen">
          <!-- "To Do" Column -->
          <div class="w-1/3 bg-white rounded-xl p-4 shadow">
            <h2 class="text-center text-lg font-semibold mb-4">To Do</h2>

            <!-- Task Card -->
            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Design the homepage layout</p>
              <p class="text-sm text-gray-500">March 10, 2025</p>
              <span class="inline-block mt-1 text-xs text-red-600 font-semibold">● High Priority</span>
            </div>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Write product descriptions</p>
              <p class="text-sm text-gray-500">March 26, 2025</p>
              <span class="inline-block mt-1 text-xs text-yellow-500 font-semibold">● Medium Priority</span>
            </div>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Schedule team meeting</p>
              <p class="text-sm text-gray-500">March 31, 2025</p>
              <span class="inline-block mt-1 text-xs text-green-600 font-semibold">● Low Priority</span>
            </div>

            <button class="text-sm text-blue-600 mt-2 flex items-center gap-1 hover:underline">Add +</button>
          </div>

          <!-- "In Progress" Column -->
          <div class="w-1/3 bg-white rounded-xl p-4 shadow">
            <h2 class="text-center text-lg font-semibold mb-4">In Progress</h2>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Develop user authentication</p>
              <p class="text-sm text-gray-500">March 10, 2025</p>
              <span class="inline-block mt-1 text-xs text-red-600 font-semibold">● High Priority</span>
            </div>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Fix responsive design issues</p>
              <p class="text-sm text-gray-500">March 22, 2025</p>
              <span class="inline-block mt-1 text-xs text-yellow-500 font-semibold">● Medium Priority</span>
            </div>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Review client feedback</p>
              <p class="text-sm text-gray-500">March 31, 2025</p>
              <span class="inline-block mt-1 text-xs text-red-600 font-semibold">● Low Priority</span>
            </div>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Optimize website performance</p>
              <p class="text-sm text-gray-500">March 31, 2025</p>
              <span class="inline-block mt-1 text-xs text-green-600 font-semibold">● Low Priority</span>
            </div>

            <button class="text-sm text-blue-600 mt-2 flex items-center gap-1 hover:underline">Add +</button>
          </div>

          <!-- "Completed" Column -->
          <div class="w-1/3 bg-white rounded-xl p-4 shadow">
            <h2 class="text-center text-lg font-semibold mb-4">Completed</h2>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Create project wireframe</p>
              <p class="text-sm text-gray-500">Completed on March 5, 2025</p>
              <span
                class="inline-block mt-1 text-xs text-green-600 font-semibold">✔ Done</span>
            </div>

            <div class="bg-gray-50 rounded p-3 mb-3 shadow-sm">
              <p class="font-medium text-blue-600">Set up database structure</p>
              <p class="text-sm text-gray-500">Completed on March 18, 2025</p>
              <span class="inline-block mt-1 text-xs text-green-600 font-semibold">✔ Done</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
