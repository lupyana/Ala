
@if (session()->has('info'))
  <div class="container">
    <div class="row center-block">
      <div class="alert alert-message alert-info alert-dismissible col-md-12 custom-position" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
        <strong class="text-capitalize text-info">Info!</strong> {!! session()->get('info') !!}
      </div>
    </div>
  </div>
@endif

@if (session()->has('success'))
  <div class="container">
    <div class="row center-block">
      <div class="alert alert-message alert-success alert-dismissible col-md-12 custom-position" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
        <strong class="text-capitalize text-success">Success!</strong> {!! session()->get('success') !!}
      </div>
    </div>
  </div>
@endif

@if (session()->has('error'))
  <div class="container">
    <div class="row center-block">
      <div class="alert alert-message alert-danger alert-dismissible col-md-12 custom-position" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
        <strong class="text-capitalize text-danger">Error!</strong> {!! session()->get('error') !!}
      </div>
    </div>
  </div>
@endif

@if (count($errors) > 0)
<div class="container">
  <div class="row center-block">
    <div class="alert alert-message alert-danger alert-dismissible col-md-12 custom-position" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
              <ul>
              @foreach ($errors->all() as $error)
                  <li>  <strong class="text-capitalize text-danger">Error!</strong>{{ $error }}</li>
              @endforeach
          </ul>
    </div>
  </div>
</div>

@endif
