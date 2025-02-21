<h1>Liste des réservations</h1>

<ul>
    @foreach ($reservations as $reservation)
        <li>
            <strong>{{ $reservation->course->name }}</strong><br>
            Date de réservation : {{ $reservation->reservation_date }}<br>
        </li>
    @endforeach
</ul>
