{{-- <form method="POST" action="{{ route('/reservations') }}"> --}}

<x-layout>
    <x-slot:heading>
        <h1>Réservez votre cours</h1>
    </x-slot:heading>

    <h2>{{ $course->name }}</h2>
    <p>{{ $course->description }}</p>
    <p>Durée : {{ $course->duration }} minutes</p>

    <form method="POST">
        @csrf

        <label for="course_id">Choisir un cours :</label>
        <input type="hidden" name="course_id" value="{{ $course->id }}">

        <label for="reservation_date">Date de la réservation :</label>
        <input type="datetime-local" name="reservation_date" id="reservation_date" required><br><br>

        <button type="submit"
            class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
            Réserver
        </button>
    </form>
</x-layout>
