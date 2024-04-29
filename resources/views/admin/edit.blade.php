<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-96 mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold mb-4 text-white">Edit business user</div>
                    <form action="{{ route('admin.update', $businessUsers->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-white">Business Name</label>
                            <input type="text" name="name" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ $businessUsers->name }}">
                            <div class="text-red-500">{{ $errors->first('name') }}</div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-white">Email</label>
                            <input type="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2 mt-1 focus:outline-none focus:border-blue-500" value="{{ $businessUsers->email }}">
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

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
