<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    </head>
    <body class="antialiased">
        <h1>調合設計</h1>
        
        
    <form>
            @csrf
        <div style="display:inline-flex">
                <div class="title">
                <h3>単位水量</h3>
                <input type="text" name="w" placeholder="180" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>水セメント比</h3>
                <input type="text" name="wc" placeholder="55" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>細骨材率</h3>
                <input type="text" name=sa placeholder="53" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>単位水量</h3>
                <input type="text" name=wer placeholder="180" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>単位水量</h3>
                <input type="text" name=erqw placeholder="180" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div>
                <button type="submit" style="height: 30px; width: 150px;margin-top: 66px">コンクリート計算</button>
                </div>
    </form>
       </div>
     
                
            　　<form>
            　　<input type="text" name="we" placeholder="$0" style="height: 30px; width: 120px;">
            　　
            　　</form>
        
     <br/>
     <div style="display:inline-flex">
     <p>日本円で{{ $Vcement }}円です</p>
    
     </div>
             
            
    </body>
     
</html>