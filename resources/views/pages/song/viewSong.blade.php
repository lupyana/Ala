@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row separate">
    <div class="col-md-12 col-lg-12 col-sm-12">
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
    </div>
  </div>





@endsection
