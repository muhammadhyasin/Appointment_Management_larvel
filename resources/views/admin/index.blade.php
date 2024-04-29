<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<x-app-layout>
    
<div class="flex flex-col w-full min-h-screen bg-gray-800 text-gray-300">
    <main class="flex min-h-[calc(100vh - theme('spacing.16'))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
                <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                    <h3 class="whitespace-nowrap tracking-tight text-sm font-medium">Total Businesses</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                        <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                        <path d="M9 22v-4h6v4"></path>
                        <path d="M8 6h.01"></path>
                        <path d="M16 6h.01"></path>
                        <path d="M12 6h.01"></path>
                        <path d="M12 10h.01"></path>
                        <path d="M12 14h.01"></path>
                        <path d="M16 10h.01"></path>
                        <path d="M16 14h.01"></path>
                        <path d="M8 10h.01"></path>
                        <path d="M8 14h.01"></path>
                    </svg>
                </div>
                <div class="p-6">
                     <div class="text-2xl font-bold">{{ $totalBusinessUsers }}</div>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Businesses created</p>
                </div>
            </div>
            <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
                <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                    <h3 class="whitespace-nowrap tracking-tight text-sm font-medium">Create New Business</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <a href="{{ route('business.create') }}" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-gray-800 hover:bg-blue-600 dark:hover:bg-blue-700 hover:text-white dark:hover:text-gray-300 h-9 rounded-md px-3 w-full">
                        Add Business
                    </a>
                    
                </div>
            </div>
            <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
                <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                    <h3 class="whitespace-nowrap tracking-tight text-sm font-medium">Total Users Registered</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                        <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                        <path d="M9 22v-4h6v4"></path>
                        <path d="M8 6h.01"></path>
                        <path d="M16 6h.01"></path>
                        <path d="M12 6h.01"></path>
                        <path d="M12 10h.01"></path>
                        <path d="M12 14h.01"></path>
                        <path d="M16 10h.01"></path>
                        <path d="M16 14h.01"></path>
                        <path d="M8 10h.01"></path>
                        <path d="M8 14h.01"></path>
                    </svg>
                </div>
                <div class="p-6">
                     <div class="text-2xl font-bold">{{ $totalBusinessUsers }}</div>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Total Users</p>
                </div>
            </div>
        </div>
        <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
            <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                <h3 class="whitespace-nowrap tracking-tight text-sm font-medium">All Businesses</h3>
                <div class="flex items-center gap-2">
                   
                    
                </div>
            </div>
            <div class="p-6">
                <div class="relative w-full overflow-auto">
                    <table class="w-full caption-bottom text-sm">
                        <thead class="[&amp;_tr]:border-b">
                            <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-700">
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    ID
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    Business Name
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    Email Address
                                </th>
                                <th class="h-12 px-4 align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0 text-right">
                                    Actions
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody class="[&amp;_tr:last-child]:border-0">
                            @foreach($businessUsers as $user)

                                <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-700">
                                    <td class="p-4 align-middle font-medium text-white">{{ $user->id }}</td>
                                    <td class="p-4 align-middle font-medium text-white">{{ $user->name }}</td>
                                    <td class="p-4 align-middle text-white">{{ $user->email }}</td>
                                    <td class="p-4 align-middle text-right text-white">
                                        <a href="{{ route('admin.edit', $user->id) }}">    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-gray-800 hover:bg-blue-600 dark:hover:bg-blue-700 hover:text-white dark:hover:text-gray-300 h-10 w-10">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"></path>
                                            </svg> 
                                            
                                        </button>
                                    </a>
                                    <a href="{{ route('admin.destroy', $user->id) }}">

                                        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-gray-800 hover:bg-blue-600 dark:hover:bg-blue-700 hover:text-white dark:hover:text-gray-300 h-10 w-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                <path d="M3 6h18"></path>
                                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            </svg>
                                            <span class="sr-only">Delete</span>
                                        </button>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </main>
</div>
</x-app-layout>



