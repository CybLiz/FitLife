<x-layout>

    <x-slot:heading>
        <h1>Bienvenue sur FitLife!</h1>
    </x-slot:heading>


    <h1>Cours</h1>


    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="bg-white">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">


                @foreach ($course as $course)
                    <div class="group relative">

                        <a href="/booking/{{ $course['id'] }}">

                            <div class="mt-4 flex justify-between">
                                <div>
                                    <p class="mt-1 text-sm text-gray-500"> {{ $course['name'] }}</p>
                                    <p class="mt-1 text-sm text-gray-500"> {{ $course['description'] }}</p>
                                    <p class="mt-1 text-sm text-gray-500"> {{ $course['duration'] }}</p>
                                </div>


                            </div>
                        </a>

                    </div>
                @endforeach
            </div>

        </div>

    </div>



</x-layout>
