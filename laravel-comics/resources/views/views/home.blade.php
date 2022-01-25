@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="container">
            @foreach ($comics as $comic)
             <section class="copertina">
                <a href="link">
                    <img src={{$comic['thumb']}} alt="">
                </a>
                
            </section>
            <p>{{$comic['series']}}</p>
            <span>{{$comic['price']}}</span>   
            @endforeach
            
        </div>
    </div>
@endsection