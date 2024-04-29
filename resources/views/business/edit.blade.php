<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-96 mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold mb-4  text-white">Add New Department</div>
                    <form action="{{ route('dept.update',$Department->id) }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-white">Department Name</label>
                            <input type="text" name="name" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ $Department->name }}">
                            <div class="text-red-500">{{ $errors->first('name') }}</div>
                        </div>
    
                        <div class="mb-4">
                            <label for="email" class="block text-white">Description</label>
                            <input type="description" name="description" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ $Department->description }}">
                           
                        </div>
    
                        
    
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>