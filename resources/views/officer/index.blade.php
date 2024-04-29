<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<x-app-layout>
    
<div class="flex flex-col w-full min-h-screen bg-gray-800 text-gray-300">
    <main class="flex min-h-[calc(100vh - theme('spacing.16'))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">


            <!---start -->
           <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
                <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                    <h3 class="whitespace-nowrap tracking-tight text-sm font-medium"> Assigned Department</h3>
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
                    <div class="text-2xl font-bold">{{ $departmentName }}</div>
                 
                </div>   
                
            </div>
            
         <!---start -->
            
            <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
                <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                    <h3 class="whitespace-nowrap tracking-tight text-sm font-medium">Total Appointments</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>
                </div>
                
                <div class="p-6">
                    <div class="text-2xl font-bold">1</div>                 
                </div>   
                <div class="p-6">
                    
                </div>
            </div>
            <!---End -->



             
            <!---End -->



            
        </div>
        <div class="rounded-lg border bg-gray-900 text-gray-300 shadow-sm" data-v0-t="card">
            <div class="p-6 flex flex-row items-center justify-between pb-2 space-y-0">
                <h3 class="whitespace-nowrap tracking-tight text-sm font-medium">All Appointments</h3>
                <div class="flex items-center gap-2">
                 </div>
            </div>
            <!---End -->


            <!---Start -->
            <div class="p-6">
                <div class="relative w-full overflow-auto">
                    <table class="w-full caption-bottom text-sm">
                        <thead class="[&amp;_tr]:border-b">
                            <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-700">
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    ID
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    Officer
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    Date and Time
                                </th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                                    Purpose
                                 </th>
                               
                               
                                
                            </tr>
                        </thead>
                        <tbody class="[&amp;_tr:last-child]:border-0">
                           @foreach($appointment as $dep)

                                <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-700">
                                    <td class="p-4 align-middle font-medium text-white">{{ $dep->id }}</td>
                                    <td class="p-4 align-middle font-medium text-white">{{ $dep->officer }}</td>
                                    <td class="p-4 align-middle text-white">{{ $dep->date_time }}</td>
                                    <td class="p-4 align-middle text-white">{{ $dep->purpose }}</td>
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



