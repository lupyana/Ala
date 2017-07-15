@extends('layouts.app')

@section('content')
<div class="container">
  <section class="sogea">


  <div class="row">
      <div class="col-md-12 inline" style="text-align: center;">
        <ul>
          <!-- <li>
          Browse</li>
          <li> -->
            <a href="{{ route('getArtists')}}">Arstists</a>
          </li>

          <li>
            <a href="{{ route('getSongs')}}">Songs</a>
          </li>

          <!-- <li>
            <a href="#">Genres</a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <form class="" action="{{ route('search') }}" method="post">
                <div class="input-group ">
             <input type="text" class="form-control" name="strquery" placeholder="Search for by Song or Artist" required>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <span class="input-group-btn">
               <button id="main-search" class="btn btn-default" type="submit">Search</button>
             </span>
           </div><!-- /input-group -->
         </form>
        </div>
    </div>
    </section>
    <section class="space">


    <div class="row">
      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Recently Added</h3>
          </div>
          <div class="panel-body no-padding">
            <div class="list-group ">
              @foreach( $songs as $song)
                <a href="viewSong/{{ $song ->name }}" class="list-group-item"><strong> {{ $song ->name }}  </strong> by {{ $song ->artist -> name}}</a>
                @endforeach
              </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Top Views</h3>
          </div>
          <div class="panel-body no-padding">
            <div classss="list-group ">
              @foreach( $views as $view)
                <a href="viewSong/{{ $view ->name }}" class="list-group-item"><strong> {{ $view ->name }}  </strong> by {{ $view ->artist -> name}}</a>
                @endforeach
              </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Resources</h3>
          </div>
          <div class="panel-body no-padding ">
            <div class="list-group ">
                <!-- <a href="#" class="list-group-item">Artists</a>
                <a href="#" class="list-group-item">Songs</a>
                <a href="#" class="list-group-item">Genres</a> -->
                <a href="{{ route('viewChords') }}" class="list-group-item">Chord Diagrams</a>
                <a href="#" class="list-group-item">Musical Scales</a>
                <a href="#" class="list-group-item">Tips</a>
                <a href="#" class="list-group-item">Music Theory</a>
                 <a href="#" class="list-group-item">Find a teacher</a>
              </div>

          </div>
        </div>

      </div>
    </div>
      </section>

      <section class="space">
        <div class="row">
          <div class="col-lg-8">
              Library for African music literature. Created with lots of passion ,coffee and code by Lo0pe
          </div>
          <div class="col-lg-4">
            <ul>
              <a href="{{ route('lessonRequest') }}"><li>Request a Lesson or Tabs</li></a>
            <!-- <a href="#">  <li>Submit a Tab</li></a> -->
             <!-- <a href="{{ route('submitLesson') }}"><li>Submit a Lesson</li></a> -->
            </ul>
          </div>
        </div>
      </section>

</div>
@endsection
