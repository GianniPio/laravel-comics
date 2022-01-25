@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="container">
            @foreach ($comics as $comic)
             <section class="copertina">
                <a href="link">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                </a>
                
            </section>
            <p>{{$comic -> series}}</p>
            <span>{{$comic -> price}}</span>   
            @endforeach
            
        </div>
    </div>
@endsection