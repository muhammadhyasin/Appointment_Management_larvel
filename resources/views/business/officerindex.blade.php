<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<x-app-layout>
    
<<div class="p-6">
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
                        Email Address
                    </th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0">
                        Department
                    </th>
                    <th class="h-12 px-4 align-middle font-medium text-gray-400 [&amp;:has([role=checkbox])]:pr-0 text-right">
                        Actions
                    </th>
                    
                </tr>
            </thead>
            <tbody class="[&amp;_tr:last-child]:border-0">
                @foreach($officer as $user)

                    <tr class="border-b transition-colors hover:bg-gray-700 data-[state=selected]:bg-gray-700">
                        <td class="p-4 align-middle font-medium text-white">{{ $user->id }}</td>
                        <td class="p-4 align-middle font-medium text-white">{{ $user->name }}</td>
                        <td class="p-4 align-middle text-white">{{ $user->email }}</td>
                        <td class="p-4 align-middle text-white">{{ $user->department }}</td>

                        <td class="p-4 align-middle text-right text-white">
                            <a href="{{ route('officer.edit', $user->id) }}">    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-gray-800 hover:bg-blue-600 dark:hover:bg-blue-700 hover:text-white dark:hover:text-gray-300 h-10 w-10">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"></path>
                                </svg> 
                                
                            </button>
                        </a>
                        <a href="{{ route('officer.destroy', $user->id) }}">

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



