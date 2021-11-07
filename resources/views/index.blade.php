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

        <div class="load-more">
            <button><strong>LOAD MORE</strong></button>
        </div>
    </section>
    <section class="logo-dc">
        <div class="container d-flex">
            <div>
                <div class="img">
                    <img src="img/buy-comics-digital-comics.png" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
            </div>
            <div>
                <div class="img">
                    <img src="img/buy-comics-merchandise.png" alt="">
                    <span>DC MERCHANDISE</span>
                </div>
            </div>
            <div>
                <div class="img">
                    <img src="img/buy-comics-subscriptions.png" alt="">
                    <span>SUBSCRIPTION</span>
                </div>
            </div>
            <div>
                <div class="img">
                    <img src="img/buy-comics-shop-locator.png" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
            </div>
            <div>
                <div class="img last">
                    <img src="img/buy-dc-power-visa.svg" alt="">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
        
    </section>
@endsection