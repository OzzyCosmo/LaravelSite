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
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
    <div class="px-8">
        <h1 class="font-bold text-2xl">
            Legion-Manager
        </h1>
        <h2 class="font-bold text-1xl pt-2">
            Add a Legion to the Database
        </h2>
        <div class="pt-4">
            <form method="POST" action="/legion/new">
                @csrf

                <div>
                    <input type="text" name="name" placeholder="Legion Name" value="{{ old('name') }}" />
                    @error('name')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>

                <br>
                <div>
                    <input type="text" name="colour" placeholder="Legion Colour" value="{{ old('colour') }}" />
                    @error('colour')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>

                <br>
                <div>
                    <button>Submit</button>
                </div>

            </form>
        </div>
        <h2 class="font-bold text-1xl pt-7">
            Legion List
        </h2>
        <table class="border border-gray-300 my-2 font-bold">
            @foreach ($legions as $legion)
                <tr>
                    <td valign="center" class="p-4 border-b border-gray-300" style="color:{{ $legion->colour }};">{{ $legion->name }}</td>
                    <td valign="center" class="p-4 border-b border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </td>
                    <td valign="center" class="p-4 border-b border-gray-300">
                        <form action="/legion/{{ $legion->id }}" method="POST" class="m-0 p-0 flex">
                            @csrf

                            @method('DELETE')

                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
