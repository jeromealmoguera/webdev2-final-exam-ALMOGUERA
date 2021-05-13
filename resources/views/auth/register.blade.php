<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Account</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

        
        
    </head>
    <body class="b-reg">
        
         <a href="{{ url('/') }}"> <img class="r-logo" src="/img/ADD.png" alt=""> </a>


        <div id="ourmanna-verse">
            <div id="mannaverse-container">
                <p id="mannaverse">
                    For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.
                </p>
                <p id="mannaverse-reference">
                    John 3:16
                    <small id="mannaverse-version"><i>(NIV)</i></small>
                </p>
            </div>
        </div>

<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>


        
        <h1 class="r-head">CREATE ACCOUNT</h1>


        <form action="{{ route('auth.save') }}" class="r-form" method="post">

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

            <div class="name">
                <label>Complete Name</label><br>

                <input type="text" id="fname" name="name" value="{{ old('name') }}" ><br>

                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>


            <div class="name">
                <label>Email Address</label><br>

                <input type="email" id="email" name="email" value="{{ old('email')}}"><br>

                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>


            <div class="name">
                <label>Password</label><br>

                <input type="password" id="pass" name="password" value=""><br>

                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>

        
            
            <br><br><br>


            <input type="submit" value="SIGN UP" class="r-sub">

        </form> 

        <div class="already">
            <a href="{{ route('auth.login') }}" class="">I already have an account, sign in</a>
        </div>
        

        
        
    </body>
</html>
