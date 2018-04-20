@extends('layouts.chord')

@section('content')
<div class="container" data-spy="scroll" data-target="#myScrollspy" >
    <div class="row">
      <div class="col-lg-3 side-menu">
        <div class="panel panel-default" data-spy="affix" data-offset-top="50">
          <div class="panel-heading">
            <h3 class="panel-title">Type</h3>
          </div>
          <div class="panel-body chords-sidenav" >
            <nav  id="myScrollspy">
            <ul class="nav nav-pills nav-stacked " >
              @foreach( $chords as $chord )
                <li >
                  <a href="#{{ $chord->name }}"  >{{ $chord->name }} Chords</a>
                    <ul class="nav">
                      @foreach( $chord->chordtypes as $chod )
                     <li class=""> <a href="#{{ $chord->name}}_{{ $chod->name }}"> {{ $chord->name}} {{ $chod->name }}</a></li>
                       @endforeach
                    </ul>
                </li>
              @endforeach
            </ul>
          </nav>
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


                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Diagrams</h3 >
                  </div>
                  <div class="panel-body">
                    <div class="owl-carousel owl-theme">
                        <div id="{{ $chord->name}}{{ $chod->name }}1">
                        </div>
                        <div id="{{ $chord->name}}{{ $chod->name }}2">
                        </div>
                        <div id="{{ $chord->name}}{{ $chod->name }}3">
                        </div>
                        <div id="{{ $chord->name}}{{ $chod->name }}4">
                        </div>
                        <div id="{{ $chord->name}}{{ $chod->name }}5">
                        </div>
                      </div>
                    </div>
                </div>
          @endforeach
        </div>
       @endforeach


      </div>
    </div>
</div>

@endsection
