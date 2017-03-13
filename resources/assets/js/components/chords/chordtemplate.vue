<template>
  <div>
    <div class="container">
      <div class="row separate">
        <div class="col-md-12 col-lg-12 col-sm-12">
          <ul class="nav nav-tabs nav-justified">
            <!-- @foreach( $chords as $chord )
              <li role="presentation">
                <a href="#"  v-on:click="swapKey('{{ $chord->name }}')">{{ $chord->name }}</a>
              </li>
            @endforeach -->
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
          <div class="panel panel-default">
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
          </div>
        </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {

          this.getChords()
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:2,
                    nav:true,
                    loop:false
                }
            }
          });

            console.log('Component mounted.')
            // Raphael.chord('div1', 'A maj', 1).element.setSize(300, 300)
            // Raphael.chord('div2', 'A maj', 3).element.setSize(300, 300)
            // Raphael.chord('div3', 'A maj', 7).element.setSize(300, 300)
            // Raphael.chord('div4', 'A maj', 5).element.setSize(300, 300)
            // Raphael.chord('div5', 'A maj', 2).element.setSize(300, 300)


        },
        data: {
            chordtypes: []
        },
        methods: {
          getChords: function(){
            this.$http.get('/chords').then(response => {

              this.chordtypes = response.body

              console.log(this.chordtypes);
            })
          }
        }


    }
</script>
