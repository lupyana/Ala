<template>
  <div>
    <div class="panel panel-default">
      <div class="panel-heading darkhead">
        <h3 class="panel-title ">Desctiption</h3 >
      </div>
      <div class="panel-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
</template>

<script>
    export default {
        mounted() {
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
                    items:3,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
          });
            console.log('Component mounted.')
            Raphael.chord('div1', 'A maj', 1).element.setSize(300, 300)
            Raphael.chord('div2', 'A maj', 2).element.setSize(300, 300)
            Raphael.chord('div3', 'A maj', 3).element.setSize(300, 300)
            Raphael.chord('div4', 'A maj', 4).element.setSize(300, 300)
            Raphael.chord('div5', 'A maj', 4).element.setSize(300, 300)


        }
    }
</script>
