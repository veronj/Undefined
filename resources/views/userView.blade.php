@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach($user->nearSectors->chunk(3) as $sectorChunk)
        <div class="row justify-content-center">
            @foreach($sectorChunk as $sector)
            <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                
                @if($sector != null) 
                    <h3>{{ $sector->name }}</h3> 
                    <a href="{{ route('userMove', ['x_position' => $sector->x_position, 'y_position' => $sector->y_position]) }}"><img src="/img/{{ $sector->img }}.png"></a>
                @else
                    <h3></h3>    
                <a href="#"><img src="/img/void.png"></a>
                @endif
                
                
                </div>
            </div>
            </div>
            @endforeach
        </div>
        @endforeach
    
</div>
@endsection