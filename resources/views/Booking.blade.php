
<h1>Effectuer une réservation</h1>

{{-- <form method="POST" action="{{ route('/reservations') }}"> --}}
<form method="POST">

    @csrf

    <label for="course_id">Choisir un cours :</label>
    <select name="course_id" id="course_id" required>
        @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }} ({{ $course->duration }} minutes)</option>
        @endforeach
    </select><br><br>

    <label for="reservation_date">Date de la réservation :</label>
    <input type="datetime-local" name="reservation_date" id="reservation_date" required><br><br>

    <button type="submit">Réserver</button>
</form> 
