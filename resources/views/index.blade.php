@extends('layout.base')

@section('pageContent')
    <section>
        <div class="container d-flex">
            <div class="current-series">
                <h2>CURRENT SERIES</h2>
            </div>

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