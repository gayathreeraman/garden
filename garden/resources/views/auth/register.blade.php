   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BetterGarden</title>
    <link href='/css/style.css' rel="stylesheet" type="text/css" >
    <link href='https://fonts.googleapis.com/css?family=Nobile|Vidaloka' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    

</head>
<body>
<header>
            <p>Better Gardens</p>
          <@if(!Auth::User())
             <a href="/auth/login"><div id="login">login</div></a>
              @else
             <a href="/auth/logout"><div id="login">logout</div></a>
             @endif
            

        </header>
        
    
    <body>

        <div class="logininfo">
            <div class="registerinfo">
            <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

            
                    
                        <div class="fn">First Name
                        <input type="text" name="firstname" value="{{ old('firstname') }}"></div>
                        
                    
                        <div>Last Name
                       
                            <input type="text" name="lastname" value="{{ old('lastname') }}"></div>
                        
                        <div>Email
                        
                            <input type="email" name="email" value="{{ old('email') }}">@if(count($errors) > 0)
                        @if(count($errors->getBags()['default']->get('email'))>0)
                            <span>
                                {{$errors->getBags()['default']->get('email')[0]}}
                            </span>
                        @endif 
                     @endif
                        </div>
                    
                        <div> Password
                        <input type="password" name="password"></div>
                    
                   <div> Confirm Password
                       <input type="password" name="password_confirmation"></div>
                    
                           <button type="submit">Register</button>
                            </div>
                            </div>

                            </div>

            </form>
        </div>
          
    </body>
</html>



