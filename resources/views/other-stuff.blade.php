<!DOCTYPE html>
<html>

<head>
    <title>My Site</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cyan-100 font-sans">
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

    </div>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
    <a href="{{ route('home') }}">
        <button
            class="ml-8 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
            Home
        </button>
    </a>
    <button
        class="ml-6 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
        Other Stuff
    </button>
    <a href="{{ route('todo') }}">
        <button
            class="mb-2 ml-6 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
            Todo
        </button>
    </a>
    <a href="{{ route('legion-manager') }}">
        <button
            class="ml-6 mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-0.5 px-4 border border-blue-500 hover:border-transparent rounded">
            Legion-Manager
        </button>
    </a>
    </div>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style class="rounded-">
            .rectangle {
                height: 29px;
                width: 120px;
                background-color: #4186ff;
            }
        </style>
    </head>

    <body>

        <div class="rectangle rounded-md flex flex-row ml-8 mt-2 w-full">
            <div class="ml-3 mt-1 text-white text-sm">BETA FEATURES</div>
        </div>

        <div class="mt-2 ml-8">Features that are in beta meaning that they are WIP and haven't been added to the site
            yet.</div>

        <div class="mt-2 ml-8">This (beta) feature accesses the site database, retrieving and displaying information on
            Warhammer 30k Legions. It specifically extracts and presents the legions along with their designated colors.
        </div>


        {{-- Legions --}}
        <ul class="list-disc ml-12 my-2 font-bold">
            @foreach ($legions as $legion)
                <li style="color:{{ $legion->colour }};">{{ $legion->name }}</li>
            @endforeach
        </ul>

    </body>

    <div class="ml-8">This (beta) feature accesses a Random Rhyme API from API-Ninjas and then displays it on the
        site.</div>

    <p class="ml-8 mt-2 text-blue-700">{{ $randomJoke }}</p>

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
</body>

</html>
