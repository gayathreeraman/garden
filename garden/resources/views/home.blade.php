<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BetterGarden</title>
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > --}}
    <link href='css/style.css' rel="stylesheet" type="text/css" >
    <link href='https://fonts.googleapis.com/css?family=Nobile|Vidaloka' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
    <script src="js/dragdrop.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

</head>
<body>
     <div class="innerHero">
            
        <header>
            <p>Better Gardens <div ><img  class="logo" src='/images/site_image/Logo3.png'></div></p>
            @if(!Auth::User())
             <a href="/auth/login"><div id="login">login</div></a>
              @else
             <a href="/auth/logout"><div id="login">logout</div></a>
             @endif
             @if(!Auth::User())
            <a href="/auth/register"><div id="signup">Sign Up</div></a>
            @endif


        </header>

           

        <div class="article">
                
            <div class="palette">

                <div class="category">

                    <div class="group_tree" id="tree_button"><br>Tree</div>
                    <div class="group_bush" id="bush_button"><br>Bush</div>
                    <div class="group_flower"id="flower_button"><br>Flower</div>
                    <div class="group_grass" id="grass_button"><br>Grass</div>
                    <div class="group_paver" id="paver_button"><br>Paver</div>
                </div>

                <div class="infoitem">
                    <ul class="stencils groups"></ul>
                </div>


            </div>



            <div class="outertarget">

                <div class="title">
              
                Garden Title <input class="gardensubtitle" type="text" name="title" value="">
                    <ul>
                        <li class="navBar"><button id="clearbutton">Clear</button></li>
                        <li class="navBar"><button id="printbutton">Print</button></li>
                        @if(Auth::User())
                        <a href="/garden"><li class="navBar"><button id="openbutton">Open</button></li></a>
                        @endif
                        {{-- <li class="navBar"><button>Sample Layout</button></li> --}}
                       <li class="navBar"><div class="lb-btn"><button id="btnSave">Save</button></div></li>
                    </ul>

                        

                </div>
                </br>

                <div id="divLayout" class="target"></div>
                        
                    
            </div>

            <div class="trashLayout"><i class="fa fa-trash"></i></div>
                    
                
        </div>

                {{-- <div class="lightbox">
                <div>
                    <button class="btncloselb"><i class="fa fa-times"></i></button>
                    <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                    @if(count($errors) > 0)
                    <div>
                    <h2>Form Errors:</h2>
                    {{{print_r($errors->getBags()['default']->get('email'))}}}
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <div>
                    Email
                    <input type="email" name="email" value="{{ old('email') }}">
                    @if(count($errors) > 0)
                        @if(count($errors->getBags()['default']->get('email'))>0)
                        <span>
                            {{$errors->getBags()['default']->get('email')[0]}}

                        </span>
                        @endif
                    @endif
                    <div>


                    </div>

                    <div>
                        Password
                        <input type="password" name="password" id="password">
                    </div>

                    <div>
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>
                </div> --}}
        </div>

        <br>
        <br>



            
            
        </div>

            <footer>

                <p>Online garden planners help you pull together the perfect plot. It lets you customize the layout of your garden by adding shrubs, trees, grass, pavers and flowers for a completely custom look to your new backyard.
                Once you've finished planning, print out a list of all the plants you chose so you don't end up wandering the aisles at your local store.
                </p>
            </footer>

        <script id="template-imagelist" type="text/x-handlebars-template">
            <li class="stencil">
                <div '#drag-item' class="drag-item @{{category}}" draggable="true">
                    <img class="@{{img_css_class}}" src="@{{image_file_path}}" alt ="@{{display_image_name}}">
                </div>
            </li>      
        </script>

        

        

</body>
</html>