@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row separate">
    <div class="col-md-12 col-lg-12 col-sm-12">
      <ul class="nav nav-tabs nav-justified">
        @foreach( $chordnames as $chordname )
          <li role="presentation"><a href="#">{{ $chordname}}</a></li>

          @endforeach
           </ul>
    </div>
  </div>


    <div class="row">

      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Type</h3>
          </div>
          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
              <li>   <p class='lead'>Major</p></li>
              <li>   <p class='lead'>Minor</p></li>
              <li>   <p class='lead'>Major 7</p></li>
              <li>   <p class='lead'>Major 9</p></li>
              <li>   <p class='lead'>Minor 7</p></li>
              <li>   <p class='lead'>Minor 9</p></li>

            </ul>
          </div>
        </div>


      </div>

            <div class="col-lg-9">
              <div class="panel panel-default">
                <div class="panel-heading darkhead">
                  <h3 class="panel-title ">Desctiption</h3 >
                </div>
                <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Diagrams</h3 >
                </div>
                <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>

</div>


@endsection
