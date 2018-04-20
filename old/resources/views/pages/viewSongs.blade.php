@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h2>All Songs</h2>
          <div class="panel-body no-padding">
            <div class="list-group ">
              @foreach( $songs as $song)
                <a href="viewSong/{{ $song ->name }}" class="list-group-item"><strong> {{ $song ->name }}  </strong> by {{ $song ->artist -> name}}</a>
                @endforeach
              </div>
          </div>
        <!-- <table class="table table-striped table-hover">

              @foreach( $songs as $song)
                <tr>
                  <td>
                  <strong> {{ $song ->name }}  </strong> by {{ $song ->artist -> name}}
                  </td>
                </tr>

              @endforeach
            </table> -->

      </div>

    </div>
  </div>
@endsection
