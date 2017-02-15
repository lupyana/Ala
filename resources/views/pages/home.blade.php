@extends('layouts.main')

@section('title')
  Gita
@endsection

@section('content')

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Find the tracks your looking for</h1>


        <!-- <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a> -->
        <div class="row">
   <!-- <form class="col s12">
     <div class="row">
       <div class="input-field col s6 offset-s3">
         <input id="search-data" type="text" class="validate">
         <label for="search-data" data-error="wrong" data-success="right">Search for an Artist or Song</label>
       </div>
     </div>
   </form> -->
   <form class=" col  s12 m10 l8 offset-m1 offset-l2">
       <div class="input-field">
         <input id="search" type="search" required>
         <label class="label-icon" for="search"><i class="material-icons">search</i></label>
         <i class="material-icons sogea">close</i>
       </div>
     </form>
 </div>


      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">


      <div class="row">
        <div class="col l4 s12">
          <!-- <h5 class="">Company Bio</h5> -->

    <ul id="tabs-swipe-demo" class="tabs">
      <li class="tab col s4"><a href="#test-swipe-1">Tab 1</a></li>
      <li class="tab col s4"><a class="active" href="#test-swipe-2">Tab 2</a></li>
      <li class="tab col s4"><a href="#test-swipe-3">Tab 3</a></li>
    </ul>
    <div id="test-swipe-1" class="col s12 blue">Test 1</div>
    <div id="test-swipe-2" class="col s12 red">Test 2</div>
    <div id="test-swipe-3" class="col s12 green">Test 3</div>

        </div>

        <div class="col l4 s12">
          <h5 class="">Company Bio</h5>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

        </div>
        <div class="col l4 s12">
          <h5 class="">Resources</h5>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>

      </div>

    </div>

  </div>



@endsection
