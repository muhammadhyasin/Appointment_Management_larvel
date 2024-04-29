<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-96 mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold mb-4  text-white">Add Officer</div>
                    <form action="{{ route('officer.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-white">Officer Name</label>
                            <input type="text" name="name" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ old('name') }}">
                            <div class="text-red-500">{{ $errors->first('name') }}</div>
                        </div>
    
                        <div class="mb-4">
                            <label for="email" class="block text-white">Email</label>
                            <input type="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ old('email') }}">
                            <div class="text-red-500">{{ $errors->first('email') }}</div>
                        </div>
    
                        <div class="mb-4">
                            <label for="password" class="block text-white">Password</label>
                            <input type="password" name="password" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ old('password') }}">
                            <div class="text-red-500">{{ $errors->first('password') }}</div>
                        </div>
    
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-white">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="department_id" class="block text-white">Department</label>
                            <select name="department_id" id="department_id" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" required>
                                @foreach($department as $departments)
                                    <option value="{{ $departments->id }}">{{ $departments->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
    
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>