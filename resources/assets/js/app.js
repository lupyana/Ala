
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
require('owl.carousel')
// require('./chord/raphael');
// require('./chord/raphael.chord');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//A majour Chords
Vue.component('Amaj', require('./components/chords/Amajour.vue'));
Vue.component('Amaj7', require('./components/chords/Amajour7.vue'));
Vue.component('Amaj9', require('./components/chords/Amajour9.vue'));

//A minor Chords
Vue.component('Amin', require('./components/chords/Aminor.vue'));
Vue.component('Amin7', require('./components/chords/Aminor7.vue'));
Vue.component('Amin9', require('./components/chords/Aminor9.vue'));

//B majour Chords
Vue.component('Bmaj', require('./components/chords/Bmajour.vue'));
Vue.component('Bmaj7', require('./components/chords/Bmajour7.vue'));
Vue.component('Bmaj9', require('./components/chords/Bmajour9.vue'));

//B minor Chords
Vue.component('Bmin', require('./components/chords/Bminor.vue'));
Vue.component('Bmin7', require('./components/chords/Bminor7.vue'));
Vue.component('Bmin9', require('./components/chords/Bminor9.vue'));

const app = new Vue({
    el: '#app',
    data: {
      key: 'A',
      currentComponent: 'Amaj',
      isActive: true,
      hasError: false
    },

    methods: {
             say: function (message) {
               alert(message)
             },
             swapComponent: function(component)
            {
              this.currentComponent = this.key + component;
            },
            swapKey: function(nkey)
           {
             this.key = nkey;
           }

 }
});
