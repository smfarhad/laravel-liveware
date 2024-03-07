<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Titleee' }}</title>
        <link rel="stylesheet" href="/app.css">
        <style>
            nav > li a{
             text-decoration: none;
            }
            nav > li{
                list-style: none;,
                display:inline-block;
            }
            form{
                padding: 10px
            }
            .createPost input {
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <nav>
             <a href="/todos" @class(['current'=>request()->is('todos')])>Todos</a> 
             <a href="/counter"  @class(['current'=>request()->is('counter')])>Counter</a> 
             <a href="/basic-table"  @class(['current'=>request()->is('basic-table')])>Post Table Table</a> 
             <a href="/craete-post"  @class(['current'=>request()->is('basic-table')])>Craete Post</a> 
        </nav>
        {{ $slot }}
    </body>
</html>
