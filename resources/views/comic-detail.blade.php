@extends('layouts.app')

@section('page_name')

@section('main_content')
    <div class="container">
        <div class="row my-3 g-3">
            <div class="col-12">
                @include('partials._comic_card')
            </div>
        </div>
        <div class="text-center mb-3">
            <button class="bg-primary text-light border-0 px-5" type="button">
                LOAD MORE
            </button>
        </div>
    </div>
@endsection