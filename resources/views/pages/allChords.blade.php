@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row separate">
    <div class="col-md-12 col-lg-12 col-sm-12">
      <ul class="nav nav-tabs nav-justified">
        @foreach( $chords as $chord )
          <li role="presentation"><a href="#"  v-on:click="swapKey('{{ $chord->name }}')">{{ $chord->name }}</a></li>

          @endforeach
           </ul>
    </div>
  </div>


    <div class="row">

      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Type</h3>
          </div>
          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
              <a  href="#" v-on:click="swapComponent('maj')">  <li>   <p class='lead'>Major</p></li></a>
              <a  href="#" v-on:click="swapComponent('min')">  <li>   <p class='lead'>Minor</p></li></a>
              <a  href="#" v-on:click="swapComponent('maj7')">  <li>   <p class='lead'>Major 7</p></li></a>
              <a  href="#" v-on:click="swapComponent('maj9')">  <li>   <p class='lead'>Major 9</p></li></a>
              <a  href="#" v-on:click="swapComponent('min7')">  <li>   <p class='lead'>Minor 7</p></li></a>
            <a  href="#" v-on:click="swapComponent('min9')">    <li>   <p class='lead'>Minor 9</p></li></a>

            </ul>
          </div>
        </div>


      </div>

            <div class="col-lg-9">
              <div class="panel panel-default">
                         <div class="panel-heading darkhead">
                           <h3 class="panel-title ">Description</h3 >
                         </div>
                         <div class="panel-body">
                           <ul>

                             <!-- <li>  Notes :   {{ $chords[0]->chordtypes[0]->notes }}</li>
                             <li>  Intervals:   {{ $chords[0]->chordtypes[0]->intervals }}</li>
                             <li>  Other Names:   {{ $chords[0]->chordtypes[0]->othernames }}</li> -->
                           </ul>

                         </div>
                       </div>
              <!-- <chordtemplate></chordtemplate> -->
              <div :is="currentComponent"></div>

            </div>

</div>


@endsection
