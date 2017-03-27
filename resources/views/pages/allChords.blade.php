@extends('layouts.app')

@section('content')
<div class="container">
<!--   <div class="row separate">
    <div class="col-md-12 col-lg-12 col-sm-12">
      <div class="container-fluid">
      <ul class="nav nav-tabs nav-justified "  data-spy="affix" data-offset-top="70">
        @foreach( $chords as $chord )
          <li role="presentation">
            <a href="#{{ $chord->name }}"  >{{ $chord->name }}</a>
          </li>
        @endforeach
      </ul>
        </div>
    </div>
  </div> -->
  <div class="">

  </div>


  <div class="row">
    <div class="col-lg-3">
      <div class="panel panel-default" data-spy="affix" data-offset-top="70">
        <div class="panel-heading">
          <h3 class="panel-title">Type</h3>
        </div>
        <div class="panel-body chords-sidenav">
          <ul class="nav nav-pills nav-stacked " >
            @foreach( $chords as $chord )
              <li role="presentation">
                <a href="#{{ $chord->name }}"  >{{ $chord->name }} Chords</a>
                  <ul class="nav">
                    @foreach( $chord->chordtypes as $chod )
                   <li class=""> <a href="#{{ $chord->name}}_{{ $chod->name }}"> {{ $chord->name}} {{ $chod->name }}</a></li>
                     @endforeach
                  </ul>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <div class="col-lg-9">

     @foreach( $chords as $chord )

      <div class="" >
        <h1 id="{{ $chord->name}}">{{ $chord->name}}</h1>
        <hr>
        @foreach( $chord->chordtypes as $chod )


               <div class="panel panel-default" id="{{ $chord->name}}_{{ $chod->name }}">
                <div class="panel-heading darkhead">
                  <h3 class="panel-title "> {{ $chord->name}} {{ $chod->name }}  </h3 >
                </div>
                <div class="panel-body">
                  <ul>
                    <li>  Notes :   {{ $chod->notes }}</li>
                    <li>  Intervals:   {{ $chod->intervals }}</li>
                    <li>  Other Names:   {{ $chod->othernames }}</li>
                  </ul>

                </div>
              </div>
                <!-- <Amaj></Amaj> -->

              <!-- <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Diagrams</h3 >
                </div>
                <div class="panel-body">
                  <div class="owl-carousel owl-theme">
                      <div id="div1">
                      </div>
                      <div id="div2">
                      </div>
                      <div id="div3">
                      </div>
                      <div id="div4">
                      </div>
                      <div id="div5">
                      </div>
                    </div>
                  </div>
              </div> -->
        @endforeach
      </div>
     @endforeach


    </div>
</div>


@endsection
