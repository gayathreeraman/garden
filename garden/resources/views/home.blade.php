<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BetterGarden</title>
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > --}}
    <link href='/css/style.css' rel="stylesheet" type="text/css" >
    <link href='https://fonts.googleapis.com/css?family=Nobile|Vidaloka' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
    <script src="js/dragdrop.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
   
    <script>
    garden_id = false;
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
     <div class="innerHero">
            
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

           

        <div class="article">
                
            <div class="palette">

                <div class="category">
                    <div class="group_tree" id="tree_button">Tree</div>
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
              
                {{-- <form action="post">
                <input type = "hidden" name = "_token" value = "{{ csrf_token() }}"> --}}
                Garden Title <input class="gardensubtitle" type="text" name="title" value="">
                {{-- </form> --}}
                    <ul>
                        <li class="navBar"><div id="clearbutton">Clear</div></li>
                        <li class="navBar"><div id="printbutton">Print</div></li>
                        @if(Auth::User())
                        <a href="/garden"><li class="navBar"><div id="openbutton">Open</div></li></a>
                        @endif
                        {{-- <li class="navBar"><button>Sample Layout</button></li> --}}
                       <li class="navBar"><div class="lb-btn"><div id="btnSave">Save</div></li>
                    </ul>

                        

                </div>
                </br>

                <div id="divLayout" class="target"></div>
                        
                    
            </div>

            <div class="trashLayout"><i class="fa fa-trash"></i></div>
                    
                
        </div>

                
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
                    <img class="@{{img_css_class}}" src="@{{image_file_path}}" alt ="@{{display_image_name}}"itemid ="@{{item_id}}">
                </div>
            </li>      
        </script>

        

        

</body>
</html>