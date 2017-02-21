@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="input-group sogea">
       <input type="text" class="form-control" placeholder="Search for by Song or Artist">
       <span class="input-group-btn">
        <a href="{{ route('search') }}"> <button class="btn btn-default" type="button">Search</button></a>
       </span>
     </div><!-- /input-group -->
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
            <table class="table table-striped table-hover">
              <tr>
                <td >
                  Some Song- Some guy
                </td>
              </tr>
              <tr>
                  <td >
                    Some Song- Some guy
                  </td>
              </tr>
              <tr>
                <td >
                Some Song- Some guy
                </td>
              </tr>
              <tr>
                <td >
                Some Song- Some guy
                </td>
              </tr>
              <tr>
                <td >
                Some Song- Some guy
                </td>
              </tr>
            </table>
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Top Views</h3>
          </div>
          <div class="panel-body no-padding">
            <table class="table table-striped table-hover">
              <tr>
                <td >
                  Some Song- Some guy
                </td>
              </tr>
              <tr>
                  <td >
                    Some Song- Some guy
                  </td>
              </tr>
              <tr>
                <td >
                Some Song- Some guy
                </td>
              </tr>
              <tr>
                <td >
                Some Song- Some guy
                </td>
              </tr>
              <tr>
                <td >
                Some Song- Some guy
                </td>
              </tr>
            </table>
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Learn to play</h3>
          </div>
          <div class="panel-body no-padding">
            <table class="table table-hover">
              <tr>
                <td >
                  Chord Diagrams
                </td>
              </tr>
              <tr>
                  <td >
                Musical Scales
                  </td>
              </tr>
              <tr>
                <td >
                  Tips
                </td>
              </tr>
              <tr>
                <td >
                  Music Theory
                </td>
              </tr>
              <tr>
                <td >
                Find a teacher
                </td>
              </tr>
            </table>
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
              <a href="#"><li>Submit a Lesson</li></a>
            </ul>
          </div>
        </div>
      </section>

</div>
@endsection
