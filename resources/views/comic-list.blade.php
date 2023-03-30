@extends('layouts.app')

@section('page_name', 'homepage')

@section('main_content')
    <div class="container">
        <div class="row my-3 g-3">
            @forelse ($comics as $comic)
            <div class="col-6 col-lg-4 col-xxl-3 mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <img class="w-100" src="{{ Vite::asset($comic['thumb']) }}" alt="">
                    <div class="card-body">
                        <h4>{{ $comic['title'] }}</h4>   
                        <p>price: {{ $comic['price'] }}</p>
                        <p>series: {{ $comic['series'] }}</p> 
                        <p>date: {{ $comic['sale_date'] }}</p> 
                    </div>
                </div>
            </div>
            @empty
            <h3>Nessun Comic</h3>
            @endforelse
        </div>
        <div class="text-center mb-3">
            <button class="bg-primary text-light border-0 px-5" type="button">
                LOAD MORE
            </button>
        </div>
    </div>
    <div class="bg-primary jumbo-2 d-flex align-items-center">
        <div class="container text-light d-flex justify-content-between">
            <h5>DIGITAL COMICS</h5>
            <h5>DC MERCHANDISE</h5>
            <h5>SUBSCRIPTION</h5>
            <h5>COMIC SHOP LOCATOR</h5>
            <h5>DC POWER VISA</h5>
        </div>
    </div>
@endsection

  
    