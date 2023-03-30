<div class="row">
    <div class="col-6">
        <h4 class="text-light">{{ $comic['title'] }}</h4>  
        <div class="bg-success text-light d-flex justify-content-between">
            <p class="p-2">
                U.S. price: {{ $comic['price'] }}
            </p>
            <p class="p-2">AVAILABLE</p>
        </div> 
        <p><h6>Description: </h6>{{ $comic['description'] }}</p>
        <hr> 
        <p class="text-light">series: {{ $comic['series'] }}</p> 
        <p class="text-light">date: {{ $comic['sale_date'] }}</p>
    </div>
    <div class="col-6">
        <img class="w-100" src="{{ Vite::asset($comic['thumb']) }}" alt="">
    </div>
</div>