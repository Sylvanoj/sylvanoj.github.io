<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <div id="playlist">
            <form>
                <input type="text" v-model="songs">
                <button @click="addSong()" type="button" name="button">Add</button>
            </form>
            <ul>
                <li v-for="(song, index) in songs">
                    @{{song}}
                    <button type="button" @click="remove(index)">X</button>
                </li>
            </ul>
        </div>

        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    </body>
</html>
