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
                <div class="uppercase font-semibold">{{ $weather[0]->description }}</div>
            </div>
            <div>
                <div class="space-x-2">
                    <span class="text-green-500"> {{ $main->temp_max }}°C</span>
                    <span class="text-red-500">{{ $main->temp_min }}°C</span>
                </div>
                <div class="">Humidity: {{ $main->humidity }} %</div>
                <div>Wind: {{ $wind->speed }} km/h</div>
            </div>
            <div class="flex justify-center items-center">
                <img class="" src="https://openweathermap.org/img/w/{{ $weather[0]->icon }}.png" />
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