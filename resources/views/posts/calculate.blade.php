<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
       <div class="content">
                <div class="title m-b-md">
                    Larave3
                </div>
            <form>
            <input type="text" name="usdoller" placeholder="$0" style="height: 30px; width: 120px;">
            <button type="submit">円に換算</button>
            </form>
             <p>日本円で{{ number_format(($jpyen))}}円です</p>
    </body>
</html>