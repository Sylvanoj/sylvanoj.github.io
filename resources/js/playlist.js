require('./bootstrap');

window.Vue=require('vue');

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
