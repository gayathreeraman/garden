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
<body class="registerbody">
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
    
    <body>
      <div>

          <div class="logininfo">
           <div class="loginheader"></div>
              <div class="registerinfo">
              <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                      
                          <div class="logintable">
                            <div class="fn">First Name:</div>
                            <div class="fninput">
                              <input type="text" name="firstname" value="{{ old('firstname') }}" size="35">
                                  
                                     @if(count($errors) > 0)
                                        @if(count($errors->getBags()['default']->get('firstname'))>0)
                                            <span>{{$errors->getBags()['default']->get('firstname')[0]}}</span>
                                        @endif 
                                      @endif
                                  
                            </div>
                          </div>
                          
                      
                          <div>
                            <div class="ln">Last Name:</div>
                         
                            <div class="lninput"><input type="text" name="lastname" value="{{ old('lastname') }}" size="35">@if(count($errors) > 0)
                            @if(count($errors->getBags()['default']->get('lastname'))>0)
                                <span>
                                    {{$errors->getBags()['default']->get('lastname')[0]}}
                                </span>
                              @endif 
                              @endif</div>
                          </div>
                          
                          <div>
                            <div class="em">Email:</div>
                            <div class="eminput"><input type="email" name="email" value="{{ old('email') }}" size="35">@if(count($errors) > 0)
                            @if(count($errors->getBags()['default']->get('email'))>0)
                                <span>
                                    {{$errors->getBags()['default']->get('email')[0]}}
                                </span>
                              @endif 
                              @endif
                              </div>
                          </div>

                          <div>
                            <div class="pwd"> Password:</div>
                            <div class="pwdinput"><input type="password" name="password" size="35">@if(count($errors) > 0)
                            @if(count($errors->getBags()['default']->get('password'))>0)
                                <span>
                                    {{$errors->getBags()['default']->get('password')[0]}}
                                </span>
                              @endif 
                              @endif</div>
                          </div>
                      
                          <div>
                            <div class="cpwd"> Confirm Password:</div>
                            <div class="cpwdinput"><input type="password" name="password_confirmation" size="35"></div>
                          </div>
                      
                             <div class="registerbutton"><button type="submit">Register:</button></div>
                              </div>
                              </div>

                              </div>

              </form>
          </div>
         </div> 
    </body>
</html>



