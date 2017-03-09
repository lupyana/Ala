@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h2>All Artists</h2>
        <table class="table table-striped">

              @foreach( $artists as $artist)
                <tr>
                  <td>
                    {{  $artist -> name }}
                  </td>
                </tr>

              @endforeach
            </table>

      </div>

    </div>
  </div>
@endsection
