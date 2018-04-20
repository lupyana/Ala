@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h2>All Artists</h2>
          <div class="panel-body no-padding">
            <div class="list-group ">
              @foreach( $artists as $artist)
                <a href="artists/{{  $artist -> name }}" class="list-group-item"><strong>   {{  $artist -> name }}</a>
                @endforeach
              </div>
          </div>
        <!-- <table class="table table-striped">

              @foreach( $artists as $artist)
                <tr>
                  <td>
                    {{  $artist -> name }}
                  </td>
                </tr>

              @endforeach
            </table> -->

      </div>

    </div>
  </div>
@endsection
