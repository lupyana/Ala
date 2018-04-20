@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h3> You Searched for:  {{ $searchQry }}</h3>
      </div>
      <div class="col-lg-12">
        @if((count($artists) === 0) && (count($songs) === 0 ) )

        <div class="panel panel-default">
          <div class="panel-body">
          Your Search did not match our records!
          </div>
        </div>

        @endif
        <div class="panel-body no-padding">

          <div class="list-group ">


            @foreach( $songs as $song)
              <a href="viewSong/{{ $song ->name }}" class="list-group-item"><strong> {{ $song ->name }}  </strong> by {{ $song ->artist -> name}}</a>
              @endforeach
              @foreach( $artists as $artist)
                <a href="artists/{{  $artist -> name }}" class="list-group-item"><strong>   {{  $artist -> name }}</a>
                @endforeach
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection
