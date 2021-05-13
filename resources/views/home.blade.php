<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Study</title>

        <!--** Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    
        
    </head>
    
    <body class="b-home">
        
        <img class="logo" src="/img/ADD.png" alt="">

       <a href="{{ route('auth.login') }}"><button class="home-button" >LOG IN</button> </a> 
        
        
        <h1 class="h1-home">BIBLE STUDY</h1>

        <h4 class="avail">AVAILABLE VIA</h4>


        <div class="tb">
        <table class="table-home" >

            <tr class="row-1">

                <td > <img class="soc-i" src="/img/icons/youtube.png" alt=""> </td>
                <td class="first">  /ANGDATINGDAAN </td>
                <td > <img class="soc-i" src="/img/icons/facebook.png" alt=""> </td>
                <td class="second">/ANGDATINGDAANTV</td>
                

            </tr>


            <tr>

            <td> <img class="soc-i" src="/img/icons/instagram.png" alt=""> </td>
            <td class="first">/ANGDATINGDAANTV</td>
            <td> <img class="soc-i" src="/img/icons/twitter.png" alt=""> </td>
            <td class="second">/ANGDATINGDAANTV</td>
                
                
            </tr>

            

        </table>
        
        </div>

        <a href="{{ route('auth.register') }}"> <button type="button" class="btn-home">REGISTER NOW</button> </a>

       
         

    </body>
</html>
