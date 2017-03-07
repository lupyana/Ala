@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">



    <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="lead"> Request a Lesson</p>

          <div class="panel panel-default">
                <div class="panel-heading">Required Information:</div>
                    <div class="panel-body">

                      <div class="input-group input-space">
                          <span class="input-group-addon fix-size" id="input_artist">Artist Name  &nbsp;</span>
                          <input type="text" class="form-control" placeholder="Name" aria-describedby="input_artist">
                      </div>

                      <div class="input-group input-space">
                          <span class="input-group-addon fix-size" id="input_album">Album Name</span>
                          <input type="text" class="form-control" placeholder="Album Name (Optional)" aria-describedby="input_album">
                      </div>

                      <div class="input-group input-space">
                          <span class="input-group-addon fix-size" id="input_song">Song Name &nbsp;</span>
                          <input type="text" class="form-control" placeholder="Song " aria-describedby="input_song">
                      </div>



                    </div>
          </div>
          <p class="lead">For notification purposes </p>
          <div class="panel panel-default">
                <div class="panel-heading">Contact Information:</div>
                    <div class="panel-body">

                      <div class="input-group input-space">
                          <span class="input-group-addon fix-size" id="input_fname">First Name  &nbsp;</span>
                          <input type="text" class="form-control" placeholder="First Name" aria-describedby="input_fname">
                      </div>

                      <div class="input-group input-space">
                          <span class="input-group-addon fix-size" id="input_Lname">Last Name</span>
                          <input type="text" class="form-control" placeholder="Last Name" aria-describedby="input_Lname">
                      </div>

                      <div class="input-group input-space">
                          <span class="input-group-addon fix-size" id="input_email">Email &nbsp;</span>
                          <input type="text" class="form-control" placeholder="Email " aria-describedby="input_email">
                      </div>

            

                    </div>
          </div>



    </div>

  </div>
  <div class="row">
    <div class="  col-lg-2 col-lg-offset-10 col-md-2  col-md-offset-10  col-sm-7  col-sm-offset-5  col-xs-7 col-xs-offset-5">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>


</div>
@endsection('content')
