@extends('layouts.app')

@section('titolo', 'Prodotti')



@section('content')

<div class="pasta_container">
    @foreach ($pastaInfo as $pasta)
    <div class="content">
        <div class="layover">
            <p>{{$pasta['titolo']}}</p>
            <i class="fas fa-utensils"></i>
    
        </div>
        <img src="{{$pasta['src']}}" alt="">
    </div>
        
    @endforeach

</div>

    
@endsection