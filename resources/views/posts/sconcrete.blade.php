<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    </head>
    <body class="antialiased">
        <h1>特殊骨材を用いるコンクリート調合設計</h1>
        
        
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
                <input type="text" name="sa" placeholder="53" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>置換率</h3>
                <input type="text" name="replace" placeholder="30" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>細骨材密度</h3>
                <input type="text" name="density" placeholder="2.94" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>細骨材吸水率</h3>
                <input type="text" name="absorption" placeholder="1.21" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                
                
                <div class="title">
                <h3>減水剤</h3>
                <input type="text" name="aes" placeholder="0.2" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>AE剤</h3>
                <input type="text" name="aem" placeholder="0.005" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div class="title">
                <h3>必要量</h3>
                <input type="text" name="need" placeholder="20" style="height: 30px; width: 120px;margin-right: 20px" >
                </div>
                
                <div>
                <button type="submit" style="height: 30px; width: 150px;margin-top: 66px">コンクリート計算</button>
                </div>
        
    </form>
            </div>

   
        

   <br/>
     <p>水合計は：{{ number_format($needwater, 2) }}&nbsp;g</p>
     <p>砂加水は：{{ number_format($addwsand, 2) }}&nbsp;g</p>
     <p>特殊骨材加水は：{{ number_format($addwspecial, 2) }}&nbsp;g</p>
     <p>石加水は：{{ number_format($addwgravel, 2) }}&nbsp;g</p>
     <p>セメントは：{{ number_format($needcement, 2) }}&nbsp;g</p>
     <p>絶乾砂は：{{ number_format($needsand, 2) }}&nbsp;g</p>
     <p>絶乾特殊骨材は：{{ number_format($needspecial, 2) }}&nbsp;g</p>
     <p>絶乾石は：{{ number_format($needgravel, 2) }}&nbsp;g</p>
     <p>減水剤は{{ number_format($needaes, 2) }}&nbsp;g</p>
     <p>AE剤は{{ number_format($needaem, 2) }}&nbsp;g</p>
     
     <br/>
     <br/>
     <div class='footer'>
            <a href="/">戻る</a>
     </div>

             
            
    </body>
     
</html>