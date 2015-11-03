<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BetterGarden</title>
    <link href='/css/style.css' rel="stylesheet" type="text/css" >
    <link href='https://fonts.googleapis.com/css?family=Nobile|Vidaloka' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    

</head>
<body class="loginbody">
    <div>
        <header>
            <p>Better Gardens <div ><img  class="logo" src='/images/site_image/Logo3.png'></div></p>
            <div class="headerlogin">
                @if(!Auth::User())
                 <a href="/auth/login"><div id="login">Login</div></a>
                  @else
                 <a href="/auth/logout"><div id="login">Logout</div></a>
                 @endif
                 @if(!Auth::User())
                <a href="/auth/register"><div id="signup">Sign Up</div></a>
                

                @endif
            </div>


        </header>
    

            <div class="logininfo">
                <div class="loginheader"></div>

                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                
        
            <div>
                <div class="logintable">
                <br>
                <br>
                    <div class="loginemail">Email</div>
                        <div>
                            <input class="inputemail" type="email" name="email" value="{{ old('email') }}" size="35" >
                            @if(count($errors) > 0)
                                @if(count($errors->getBags()['default']->get('email'))>0)
                                    <span>
                                        {{$errors->getBags()['default']->get('email')[0]}}
                                    </span>
                                @endif 
                             @endif
                        </div>


                        <div class="loginpw"> Password</div>
                        <div><input class="inputpw"type="password" name="password" id="password" size="35"></div>
                    
                        <div class="remember"><input type="checkbox" name="remember"> Remember Me</div>
                        <div class="loginbutton1"> <button  type="submit">Login</button></div>
                    </div>




                </div>
            </form>
        </div>
       
    </div>
                    
</body>
</html>