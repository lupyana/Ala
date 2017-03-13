@extends('layouts.app')


@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <p class="lead"> Request a Lesson</p>
        <form class="" action="{{ route('lessonRequest')}}" method="post">
        <div class="panel panel-default">
              <div class="panel-heading"> <h3 class="panel-title">Required Information: </h3></div>
                  <div class="panel-body">

                    <div class="input-group input-space">
                        <span class="input-group-addon fix-size" id="input_song">Song Name &nbsp;</span>
                        <input type="text" class="form-control" placeholder="Song " name="song" aria-describedby="input_song" required>
                    </div>

                    <div class="input-group input-space">
                        <span class="input-group-addon fix-size" id="input_artist">Artist Name  &nbsp;</span>
                        <input type="text" class="form-control" placeholder="Atrist"  name="artist" aria-describedby="input_artist" required>
                    </div>

                    <div class="input-group input-space">
                        <span class="input-group-addon fix-size" id="input_artist">Other Artists&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Featured Artists (Optional)"  name="featuredartist" aria-describedby="input_artist">
                    </div>

                    <div class="input-group input-space">
                        <span class="input-group-addon fix-size" id="input_album">Album Name</span>
                        <input type="text" class="form-control" placeholder="Album Name (Optional)"  name="album" aria-describedby="input_album">
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  </div>
        </div>

        <div class="row">
          <div class="  col-lg-2 col-lg-offset-10 col-md-2  col-md-offset-10  col-sm-7  col-sm-offset-5  col-xs-7 col-xs-offset-5">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
  </div>
  </form>
</div>

</div>

@endsection
