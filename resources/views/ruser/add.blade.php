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
<section class="w-full py-12 md:py-24 lg:py-32 bg-gray-950 text-white">
    <div class="container mx-auto max-w-3xl px-4 md:px-6">
      <div class="space-y-6">
        <div class="space-y-2 text-center">
          <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Schedule an Appointment  <div></div></h1>
          <p class="text-gray-400 md:text-xl">Meet with one of our officers to discuss your needs.</p>
        </div>
        
        <form action="{{ route('appointment.store') }}" method="post" class="space-y-4">
            @csrf
          <div class="grid grid-cols-2 gap-4">
            
            
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-2">
              <label for="phone" class="block text-sm font-medium leading-none text-gray-400">Phone</label>
              <input id="phone" type="tel" required placeholder="Enter your phone number"
                class="h-10 w-full px-3 py-2 text-sm rounded-md border border-input bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 focus:outline-none"
              />
            </div>
            
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-2">
              <label for="officer" class="block text-sm font-medium leading-none text-gray-400">Officer</label>
              <select id="officer"  name="officer"
                class="h-10 w-full px-3 py-2 text-sm rounded-md border border-input bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 focus:outline-none"
              >
                <option value="" disabled selected>Select an officer</option>
                <option value="{{ $officers }}">{{ $officers }}</option>
              </select>
            </div>
            <div class="space-y-2">
                <label for="date-time" class="block text-sm font-medium leading-none text-gray-400">Date and Time</label>
                <input id="date-time" name="date-time" type="datetime-local" required placeholder="Select a date and time"
                    class="h-10 w-full px-3 py-2 text-sm rounded-md border border-input bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 focus:outline-none"
                />
            </div>
          </div>
          <div class="space-y-2">
            <label for="purpose" class="block text-sm font-medium leading-none text-gray-400">Purpose</label>
            <textarea id="purpose" name="purpose" required placeholder="Briefly describe the purpose of your appointment"
              class="min-h-[80px] w-full px-3 py-2 text-sm rounded-md border border-input bg-gray-800 text-white placeholder-gray-500 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 focus:outline-none"
            ></textarea>
          </div>
          <button type="submit"
            class="h-10 w-full px-4 py-2 text-sm font-medium rounded-md bg-gray-500 hover:bg-gray-400 text-white focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:outline-none"
          >
            Request Appointment
          </button>
        </form>
      </div>
    </div>
  </section>
  