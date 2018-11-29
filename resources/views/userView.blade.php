@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach($user->nearSectors->chunk(3) as $sectorChunk)
        <div class="row justify-content-center">
            @foreach($sectorChunk as $sector)
            <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                <h3>{{ $sector->name }}</h3> 
                <h3>{{ $sector->img }}</h3>
                <a href="{{ route('move') }}"><img src="/img/{{ $sector->img }}.png"></a>
                
                </div>
            </div>
            </div>
            @endforeach
        </div>
        @endforeach
    
</div>
@endsection