@extends('layouts.app')

@section('titolo', 'Prodotti')



@section('content')

<div class="pasta_container">
    @foreach ($pastaInfo as $pasta)
        <div class="content">
            <img src="{{$pasta['src']}}" alt="">

        </div>
        
    @endforeach

</div>

    
@endsection