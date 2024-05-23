 @extends('layouts.app')

 @section('Comics')

 @section('content')
 <div class="container">
     <h1>Comics</h1>
     @foreach ($comics as $comic)
     <div class="card">
         <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
         <h2>{{ $comic['title'] }}</h2>
         <p>Series: {{ $comic['series'] }}</p>
     </div>
     @endforeach
 </div>
 @endsection