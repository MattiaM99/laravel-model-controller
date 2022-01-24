@extends('layouts.main')

@section('content')

<div class="container">
  <h2>Films</h2>

  <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Title</th>
            <th scope="col">Original title</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($movies as $movie)
            <tr>
                <th scope="row">{{ $movie->id }}</th>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->date }}</td>
            </tr>
            @empty
                <h3>Nessun risultato trovato</h3>
            @endforelse





        </tbody>
      </table>
</div>

@endsection