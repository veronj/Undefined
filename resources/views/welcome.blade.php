@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach($sectors->chunk(3) as $sectorChunk)
        <div class="row justify-content-center">
            @foreach($sectorChunk as $sector)
            <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                <h3>{{ $sector->name }}</h3>
                
                </div>
            </div>
            </div>
            @endforeach
        </div>
    @endforeach
    
</div>
@endsection
