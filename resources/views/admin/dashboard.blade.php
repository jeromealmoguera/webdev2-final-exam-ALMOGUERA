<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

        
        
    </head>
    <body class="b-reg">
        
        

        <div class="dash-heading">
            <h4 class="dash-head">Request a</h4>
            
            <h1 class="dash-head2">BIBLE STUDY</h1>
        </div>


           <a href="{{ route('auth.login') }}"> <button class="dash-button">LOG OUT</button> </a>


        <img class="dash-logo" src="/img/ADD.png" alt="">
        
        
        <h1 class="h1-dash">BIBLE STUDY</h1>

        <h4 class="dash-avail">AVAILABLE VIA</h4>


        <div class="tb">
        <table class="table-dash" >

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






        <form action="{{ route('auth.save') }}" class="dash-form" method="post">

        @if(Session::get('success'))
        <div class="alert-success">
            {{ Session::get('success') }}
        </div>
        @endif


        @if(Session::get('fail'))
        <div class="alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif

        @csrf


            <div class="dash-name">
                <label>Complete Name</label><br>

                <input type="text" id="fname" name="name" value="{{ old('name') }}" ><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>



            <div class="dash-name">
                <label>Email Address</label><br>

                <input type="email" id="email" name="email" value="{{ old('email')}}"><br>

                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>



            <div class="dash-name">
                <label>Contact Number</label><br>

                <input type="tel" id="tel" name="tel" value="" class="num-in"><br>

                <span class="text-danger"> @error('password'){{ $message }} @enderror </span>
            </div>



            <div class="dash-birth">
                <label>Birhtdate</label><br>

                <input type="date" id="date" name="date" value="" class="birth-in"><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>



            <div class="dash-name">
                <label>Religious Affiliation</label><br>

                <input type="text" id="relig" name="relig" value="" ><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>



            <div class="dash-name">
                <label>Bible Study Date</label><br>

                <input type="date" id="date" name="date" value="" class="date-in"><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>



            <div class="dash-time">
                <label>Bible Study Time</label><br>

                <input type="time" id="time" name="time" value="" class="time-in"><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>



            <div class="dash-name">
                <label>Bible Study Location / Address</label><br>

                <input type="text" id="add" name="add" value="" ><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>

        
            
            <br>


            <input type="submit" value="REQUEST" class="r-sub">

        </form> 

      
        

        
        
    </body>
</html>
