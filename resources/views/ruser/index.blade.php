<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="flex flex-col min-h-[100vh] bg-gray-950 text-gray-50">
    <header class="flex h-16 items-center justify-between px-6">
        <a class="flex items-center gap-2" href="#">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-6 w-6"
            >
                <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                <line x1="16" x2="16" y1="2" y2="6"></line>
                <line x1="8" x2="8" y1="2" y2="6"></line>
                <line x1="3" x2="21" y1="10" y2="10"></line>
                <path d="M8 14h.01"></path>
                <path d="M12 14h.01"></path>
                <path d="M16 14h.01"></path>
                <path d="M8 18h.01"></path>
                <path d="M12 18h.01"></path>
                <path d="M16 18h.01"></path>
            </svg>
            <span class="text-lg font-semibold">Appointment Booking</span>
        </a>
        <div class="flex items-center gap-4">
            
                        
                        <nav class="-mx-3 flex flex-1 justify-end">
                            
                                
                               
                                <a
                class="rounded-md bg-gray-800 px-4 py-2 text-sm font-medium text-gray-50 transition-colors hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-950"
                href="{{ route('appointment') }}"
            >
                View Appointments
            </a>
                          
            
        </nav>
        
        </div>
    </header>
    <main class="flex-1 flex items-center justify-center px-6 py-12">
        <div class="max-w-xl space-y-6 text-center">
            <h1 class="text-4xl font-bold tracking-tight">Appointment Booking System</h1>
            <p class="text-lg text-gray-400">Select the required Department</p>
            <div class="mb-4">
                
                    <select name="department_id" id="department_id" class="inline-block min-w-[10rem] px-4 py-2 bg-gray-800 rounded-md border border-gray-600 focus:outline-none focus:border-blue-500 text-white" required>
                        @foreach($department as $departments)
                        <option value="{{ $departments->name }}">{{ $departments->name }}</option>
                        @endforeach
                    </select>

            </div>
            
            
            <a
    id="book-appointment-button"
    class="inline-flex items-center justify-center rounded-md bg-gray-800 px-6 py-3 text-sm font-medium text-gray-50 transition-colors hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-950"
    href="{{ route('ruser.create', $departments->name) }}"
    
>
    Book an Appointment
</a>


        </div>
    </main>
    <footer class="flex h-16 items-center justify-center border-t border-gray-800 text-sm text-gray-500">
       Appointment Booking System
    </footer>
</div>

