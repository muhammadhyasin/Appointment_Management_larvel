<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<x-app-layout>
    
<div class="flex flex-col w-full min-h-screen bg-gray-800 text-gray-300">
    <main class="flex min-h-[calc(100vh - theme('spacing.16'))] flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10">
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">


            
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



