@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
              <img src="{{ asset('images/construction.png')}}" style="width:40%;" alt="">
                <div class="title m-b-md">
                    Ooops! This section is under contstruction.
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                </div>
            </div>
        </div>

@endsection
