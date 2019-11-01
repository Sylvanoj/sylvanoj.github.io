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
        <div id="app">
            <form>
                <input type="text" v-model="newItem">
                <button @click="add()" type="button" name="button">Add</button>
            </form>
            <ul>
                <li v-for="(item, index) in items">
                    @{{item}}
                    <button type="button" @click="remove(index)">X</button>
                </li>
            </ul>
        </div>

        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    </body>
</html>
