<!DOCTYPE html>
<html>

<head>
    <title>My Site</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cyan-200 font-sans ">
    <div class="flex justify-between px-8 py-8">
        <div>
            <h1 class="text-3xl font-bold font">Hello World!</h1>
            <h2 class="">Welcome to my Site.</h2>
        </div>

        <div class="flex flex-col">

            <div class="flex gap-4 mr-14">
                <div>
                    <div>{{ $date->format('l g:i a') }}</div>
                    <div>{{ $date->format('jS F, Y') }}</div>
                    <div class="uppercase font-semibold">{{ $data->weather[0]->description }}</div>
                </div>
                <div>
                    <div class="space-x-2">
                        <span class="text-green-500"> {{ $data->main->temp_max }}°C</span>
                        <span class="text-red-500">{{ $data->main->temp_min }}°C</span>
                    </div>
                    <div class="">Humidity: {{ $data->main->humidity }} %</div>
                    <div>Wind: {{ $data->wind->speed }} km/h</div>
                </div>
                <div class="flex justify-center items-center">
                    <img class="" src="https://openweathermap.org/img/w/{{ $data->weather[0]->icon }}.png" />
                </div>
            </div>
        </div>

    </div>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
    <button
        class="mb-2 ml-8 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
        Home
    </button>
    <a href="{{ route('other-stuff') }}">
        <button
            class="ml-6 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
            Other Stuff
        </button>
    </a>
    <a href="{{ route('todo') }}">
        <button
            class="ml-6 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
            Todo
        </button>
    </a>
    <a href="{{ route('legion-manager') }}">
        <button
            class="ml-6 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
            Legion Manager
        </button>
    </a>

    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    </div>
    <div class="container flex flex-col ...">
        <div class="fixed bottom-0 left-0 right-0">
            <div class="border-l-4 border-yellow-400 bg-yellow-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-700">
                            This site is still in development.
                            {{-- <a href="#" class="font-medium text-yellow-700 underline hover:text-yellow-600">Upgrade your account to add more credits.</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Content --}}

    <body>
        <div class="h-screen relative z-0 bg-gradient-to-b from-sky-900 to-indigo-950">
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700 z-20">
            <h1 class="pt-6 pl-2 mx-8 font-bold text-2xl absolute z-20 text-white">
                GPT 3.5 Turbo
            </h1>
            <img class="pl-5 pt-3 absolute z-10" src="{{ asset('images/Group 1.png') }}" alt="" width="725">
            <input>
        </div>
    </body>

</body>

</html>

{{-- Todo --}}

{{-- - Get input working
- Get ChatGPT API working
- Make the page look better
- Add navigation button for this page
- In future add a system to switch AI Models, as well as adding Gemini Pro, Gemini Nano and possibly Gemini Ultra.
- Subscription required? Admin password to get in without a subscription? --}}