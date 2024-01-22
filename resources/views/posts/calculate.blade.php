<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
           
            <button type="submit">円に換算</button>
            <input type="text" name="usdoller" placeholder="$0" style="height: 30px; width: 120px;">
            </div>
        </form>
            <p>日本円で{{ number_format($jpyen)}}円です</p>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
</x-app-layout>