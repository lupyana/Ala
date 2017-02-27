@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form class="" action="{{ route('search') }}" method="post">
                <div class="input-group sogea">
             <input type="text" class="form-control" name="strquery" placeholder="Search for by Song or Artist" required>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <span class="input-group-btn">
               <button id="main-search" class="btn btn-default" type="submit">Search</button>
             </span>
           </div><!-- /input-group -->
         </form>
        </div>
    </div>

    <section class="space">


    <div class="row">
      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Recently Added</h3>
          </div>
          <div class="panel-body no-padding">
            <div class="list-group ">
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
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
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
                <a href="#" class="list-group-item">    Some Song- Some guy</a>
              </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Learn to play</h3>
          </div>
          <div class="panel-body no-padding ">
            <div class="list-group ">
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
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <div class="col-lg-4">
            <ul>
              <a href="{{ route('requestLesson') }}"><li>Request a Lesson or Tabs</li></a>
            <!-- <a href="#">  <li>Submit a Tab</li></a> -->
              <a href="{{ route('submitLesson') }}"><li>Submit a Lesson</li></a>
            </ul>
          </div>
        </div>
      </section>

</div>
@endsection
