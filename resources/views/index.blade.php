@extends('layout.base')

@section('pageContent')
    <section>
        <div class="container d-flex">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <div class="img-card">
                        <img src="{{$fumetto["thumb"]}}" alt="{{$fumetto["series"]}}"> 
                    </div>
                    <span>{{$fumetto["series"]}}</span>
                </div>
            @endforeach
        </div>
    </section>
@endsection