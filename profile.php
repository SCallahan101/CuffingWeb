@extends('layouts.app')

@section('title')
Cuffing Army
@endsection

@section('content')
<div class="row">
    <div class="col-6 m-3 mr-5">
        <img src="{{ $guy->picture}}" class="pic mil-guy">
    <div class="p-6 ml-6 col">
            <h3 class="white">{{ $guy->name }}</h3>
            <span class="white fact">{{ $guy->age }}</span><br>
            <span class="white fact">{{ $guy->hobbies}}</span><br>
            <span class="white fact">{{ $guy->location}}</span><br>
            <span class="white fact">{{ $guy->likes}}</span><br>
            <span class="white fact">{{ $guy->dislikes}}</span><br>
            <span class="white fact">{{ $guy->rating}}</span><br>
        </div>
    </div>
    </div>

@endsection