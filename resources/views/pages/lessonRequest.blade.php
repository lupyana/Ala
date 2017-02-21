@extends('layouts.app')


@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <p class="lead"> Submit a Lesson</p>

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

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Song information</h3>
          </div>
          <div class="panel-body">
            Song content
          </div>
        </div>
  </div>

</div>

</div>

@endsection
