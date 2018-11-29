@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach($sectors->chunk(5) as $sectorChunk)
        <div class="row justify-content-center">
            @foreach($sectorChunk as $sector)
            <div class="col-md-2">
            <div class="thumbnail">
                <div class="caption">
                <h3>{{ $sector->name }}</h3> 
                <h3>{{ $sector->img }}</h3>
                <img src="/img/{{ $sector->img }}.png">
                
                </div>
            </div>
            </div>
            @endforeach
        </div>
    @endforeach
    
</div>
@endsection
