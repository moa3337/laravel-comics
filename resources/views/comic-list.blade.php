@extends('layouts.app')

@section('page_name', 'homepage')

@section('main_content')
    <div class="container">
        <div class="row mt-3 g-3">
            @forelse ($comics as $comic)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="w-50" src="{{ Vite::asset($comic['thumb']) }}" alt="">
                    <div class="card-body">
                        <h4>{{ $comic['title'] }}</h4>   
                        <p>{{ $comic['price'] }}</p>
                        <p>{{ $comic['series'] }}</p> 
                        <p>{{ $comic['sale_date'] }}</p> 
                    </div>
                </div>
            </div>
            @empty
                <h3>Nessun Comic</h3>
            @endforelse
        </div>
    </div>
@endsection

  
    