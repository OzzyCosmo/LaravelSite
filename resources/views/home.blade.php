<!DOCTYPE html>
<html>

<head>
    <title>My Site</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        <!--
          Background backdrop, show/hide based on modal state.
      
          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        {{-- <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"> --}}
        <!--
              Modal panel, show/hide based on modal state.
      
              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
        {{-- <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                  <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed from our servers forever. This action cannot be undone.</p>
                  </div>
                </div>
              </div>
              <div class="mt-5 sm:ml-10 sm:mt-4 sm:flex sm:pl-4">
                <button type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:w-auto">Deactivate</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:ml-3 sm:mt-0 sm:w-auto">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

        {{-- 
    <div class="w-full bg-cyan-300 h-96 flex flex-col lg:flex-row justify-between items-center gap-2">
        <div class="bg-cyan-400 h-full w-full lg:w-auto flex-1">Box 1</div>
        <div class="bg-cyan-400 h-full w-full lg:w-auto flex-1">Box 2</div>
        <div class="bg-cyan-400 h-full w-full lg:w-auto flex-1">Box 3</div> --}}
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
    <h1 class="mx-8 font-bold text-2xl">
        Description
    </h1>
    <p class="text-wrap text-base mx-8 mr-20">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac dui varius, consectetur nulla vel, lacinia orci.
        Nam ante quam, posuere ut felis id, eleifend placerat ligula. Aliquam iaculis vestibulum dolor, quis tincidunt
        urna pharetra sit amet. Aenean maximus mollis turpis, venenatis mattis lectus pretium quis. Nullam aliquam purus
        tortor, ut volutpat nisi tempus ut. Curabitur laoreet nisi at lacus viverra, ut blandit tortor consequat. Aenean
        condimentum nisi sem, vel feugiat ligula porttitor a. Fusce luctus, mauris vitae egestas ultrices, augue turpis
        faucibus erat, nec volutpat nisl elit rhoncus eros.
        <br>
        Sed ut ligula eu lacus malesuada congue. Quisque ornare, lorem sed vulputate lacinia, elit sem tincidunt tellus,
        non ultrices mi massa non elit. Maecenas scelerisque, ligula at blandit vehicula, urna enim tincidunt justo, sit
        amet laoreet nibh purus tincidunt diam. Integer ultricies, augue at venenatis gravida, elit leo fermentum dui,
        volutpat pharetra nulla mi nec velit. Donec placerat augue eu urna rhoncus, rhoncus gravida tortor iaculis.
        Donec porttitor massa non sapien tincidunt ornare. Sed interdum massa purus, eu venenatis elit gravida nec. Duis
        malesuada magna quis ligula ultrices rutrum. Etiam a velit egestas, volutpat purus a, mattis nisi. Maecenas
        porttitor, justo a rhoncus suscipit, mi ex facilisis libero, mattis porttitor ex lectus ac lorem.
        <br>
        Nulla maximus accumsan eros, sed malesuada ante accumsan quis. Class aptent taciti sociosqu ad litora torquent
        per conubia nostra, per inceptos himenaeos. Proin ultricies ut lectus at bibendum. Nulla blandit velit turpis,
        sed dictum urna iaculis non. Pellentesque neque quam, scelerisque sed pretium ut, pellentesque a tellus. Donec
        rhoncus nunc at velit pulvinar, a varius diam posuere. Fusce eu blandit ipsum. Aenean auctor sollicitudin elit
        at dapibus. Praesent tristique et ligula ac volutpat. Duis porttitor porta condimentum. Etiam efficitur libero
        lectus, nec accumsan eros laoreet eu. Vestibulum sed semper orci. Nulla quis faucibus magna. Cras lobortis
        blandit purus, ac ultrices metus tempor eu.
        <br>
    </p>


</body>

</html>
