<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    <title>login</title>

</head>

<body class="b-login">

        <a href="{{ url('/') }}"> <img class="log-logo" src="/img/ADD.png" alt=""> </a>

        <h1 class="h1-log">BIBLE STUDY</h1>

        <h4 class="h4-log">LOG IN</h4>


        <form action="{{ route('auth.check') }}" class="log-form" method="post">

        @if(Session::get('fail'))
        <div class="alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif

        @csrf

            <div class="name">
                <label>Email Address</label><br>
                <input type="text" id="email" name="email" value="{{ old('email') }}"><br>
            </div>

            <span class="text-danger">  @error ('email') {{ $message }} @enderror  </span>   
            
         


            <div class="password">
                <label>Password</label><br>
                <input type="password" id="pass" name="password" value="{{ old('password') }}"><br>
            </div>

            <span class="text-danger">  @error ('password') {{ $message }} @enderror  </span>   
            
            
            <br><br>


            <input type="submit" value="LOG IN" class="log-sub">

        </form> 

        <div class="log-already">
            <a href="{{ route('auth.register') }}" class="">I already have an account, sign in</a>
        </div>

    
</body>

</html>