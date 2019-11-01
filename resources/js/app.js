/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example', require('./components/Example.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



// new Vue({
//     el: '#app',
//     data: {
//         items: [
//             'milk',
//             'coffee',
//             'juice'
//         ],
//         newItem: ""
//     },
//     methods:{
//         add(){
//             this.items.push(this.newItem);
//         },
//         remove(index){
//             this.items.splice(index, 1);
//         }
//     }
// });

new Vue({
    el: '#playlist',
    data:{
        songs: "",
        artist: ""
    },
    methods:{
        addSong(){
            this.songs.push(this.songs);
        }
    }
});

// create input, v model binding to variable, add button, clear original input, click events,
