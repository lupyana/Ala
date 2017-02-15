@extends('layouts.main')

@section('title')
  Gita
@endsection

@section('content')

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Find the tracks your looking for</h1>

      <div class="row ">
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
   <form class=" col s6 offset-s3 ">
       <div class="input-field">
         <input id="search" type="search" required>
         <label class="label-icon" for="search"><i class="material-icons">search</i></label>
         <i class="material-icons sogea">close</i>
       </div>
     </form>
 </div>

      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">


      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <ul id="tabs-swipe-demo" class="tabs">
               <li class="tab col s4"><a href="#test-swipe-1">TAB 1</a></li>
               <li class="tab col s4"><a class="active" href="#test-swipe-2">TAB 2</a></li>
               <li class="tab col s4"><a href="#test-swipe-3">TAB 3</a></li>
             </ul>
             <div id="test-swipe-1" class="col s12 blue">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
             <div id="test-swipe-2" class="col s12 red">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
             <div id="test-swipe-3" class="col s12 green">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

              </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Heading</h5>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Resources</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>



@endsection
