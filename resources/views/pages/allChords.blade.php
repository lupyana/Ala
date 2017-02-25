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
              <example></example>
            </div>

</div>


@endsection
