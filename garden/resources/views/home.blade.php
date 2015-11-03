<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BetterGarden</title>
    <link href='/css/style.css' rel="stylesheet" type="text/css" >
    <link href='https://fonts.googleapis.com/css?family=Nobile|Vidaloka' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    



    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
    <script src="/js/dragdrop.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        
        $(function(){
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                }
            });
        });
    </script>            

        
</head>
    <body>

        <header>
            <p>Better Gardens 
                <div>
                    <img  class="logo" src='/images/site_image/Logo3.png'>
                </div>
            </p>

            <div>

                @if(!Auth::User())
                    <a href="/auth/login">
                        <div id="login"> Login</div>
                    </a>
                @else
                    <div class="userfnln">{{auth::user()->firstname}}  {{auth::user()->lastname}}</div>
                    <a href="/auth/logout">

                        <div id="login">Logout</div>
                    </a>
                @endif

                @if(!Auth::User())
                    <a href="/auth/register">
                        <div id="signup">Sign Up</div>
                    </a>
                @endif
                

            </div>

        </header>

        <div class="innerHero">  

            <div class="article">
                
                <div class="palette">

                    <div class="category">
                        <div class="group_tree" id="tree_button">Tree</i></div>
                        <div class="group_bush" id="bush_button">Bush</div>
                        <div class="group_flower"id="flower_button">Flower</i></div>
                        <div class="group_grass" id="grass_button">Grass</i></div>
                        <div class="group_paver" id="paver_button">Paver</i></div>
                    </div>

                    <div class="infoitem">
                        <ul class="stencils groups"></ul>
                    </div>

                </div>



                <div class="outertarget">

                    <div class="title">
                    {{--  //todo --}}


                        Garden Title <input class="gardensubtitle" type="text" name="title" value="{{$garden->layout_name}}" placeholder="Garden Title" required>
                        <span class="garden-title-error">Please give a name to your garden</span>
               
                            <ul>
                                <li class="navBar"><button id="clearbutton"><i class="fa fa-minus-square"></i></button></li>
                                <li class="navBar"><button id="printbutton"><i class="fa fa-print"></i></button></li>
                                @if(Auth::User())
                                <a href="/garden"><li class="navBar"><button id="openbutton"><i class="fa fa-folder-open"></i></button></li></a>
                                @endif
                                {{-- <li class="navBar"><button>Sample Layout</button></li> --}}
                                @if(Auth::User())
                               <li class="navBar"><div class="lb-btn"><button id="btnSave"><i class="fa fa-floppy-o"></i></button></li>
                                 @endif
                            </ul>

                    </div>
                    </br>

                    <div id="dvContainer">

                        <div id="divLayout" class="target">
                            
                            
                            @foreach ($items as $item)


                                <div '#drag-item'="" class="drag-item {{$item->category}}" draggable="true" style="position: absolute; top: {{$item->coordinate_y}}px; left: {{$item->coordinate_x}}px;">
                                    <img class="tree" src="{{$item->image_file_path}}" alt="Banana" itemid="2">
                                </div>

                            @endforeach
                            

                           {{--  <div '#drag-item'="" class="drag-item grass" draggable="true" style="position: absolute; top: 55px; left: 485px;">
                                <img class="grass" src="/images/site_image/grass4.png" alt="Winter grass" itemid="20">
                            </div>
                     
                            <div '#drag-item'="" class="drag-item bush" draggable="true" style="position: absolute; top: 282px; left: 447px;">
                                <img class="bush" src="/images/site_image/bush1.png" alt="Barberry" itemid="5">
                            </div> --}}

                        </div>
                       

                    </div>
                        
                    
                </div>

                <div class="trashLayout"><i class="fa fa-trash"></i></div>
                
            </div>
        </div>

        

            <footer>

                <p>Online garden planners help you pull together the perfect plot. It lets you customize the layout of your garden by adding shrubs, trees, grass, pavers and flowers for a completely custom look to your backyard.
                
                </p>
            </footer>




        <script id="template-imagelist" type="text/x-handlebars-template">
            <li class="stencil">
                <div '#drag-item' class="drag-item @{{category}}" draggable="true">
                    <img class="@{{img_css_class}}" src="@{{image_file_path}}" alt ="@{{display_image_name}}"itemid ="@{{item_id}}">
                </div>
            </li>      
        </script>

        

        

</body>
</html>