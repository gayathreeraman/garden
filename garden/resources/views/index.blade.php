<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BetterGarden</title>
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > --}}
    <link href='css/style.css' rel="stylesheet" type="text/css" >

    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
     {{-- <script type="text/javascript" src="{{ asset('js/dragdrop.js') }}"></script> --}}
     <script src="js/dragdrop.js"></script>

</head>
<body>

        <div class="innerHero">
            
            <header>
                <p>Better Gardens</p>
                <!-- <div class="gardenTitle">
                    <img src="garden.png">
                </div> -->

              {{-- <a href="/auth/login" target="_new" > <button id="login">login</button></a>
               <a href="/auth/register" target="_new" > <button id="signup">Sign Up</button> --}}

            </header>

            <div class="menuBar">
                <ul >
                   
                    <li class="navBar"><button id="clearbutton">Clear</button></li>
                    <li class="navBar"><button id="printable">Print</button></li>
                    <a href="/index/savedlayout"><li class="navBar"><button>Open</button></li></a>
                    {{-- <li class="navBar"><button>Sample Layout</button></li> --}}
                   <li class="navBar"><button id="btnSave">Save</button></li>

                </ul>
            </div>
            

            <div class="article">

            
                
                    <div class="palette">

                        <div class="category">
                            <div class="group_tree" id="tree_button">Tree</div>
                            <div class="group_bush" id="bush_button">Bush</div>
                            <div class="group_flower"id="flower_button">Flower</div>
                            <div class="group_grass" id="grass_button">Grass</div>
                            <div class="group_paver" id="paver_button">Pavers</div>
                        </div>

                        <div class="infoitem">

                            <ul class="stencils trees">
                                {{-- <li class="stencil"><div class="drag-item tree" id="dragTree1" draggable="true"><span id="results"></span></div></li>
                                <li class="stencil"><div class="drag-item tree" id="dragTree2" draggable="true"><span id="results"></span></div></li>
                                <li class="stencil"><div class="drag-item tree" id="dragTree3" draggable="true"><span id="results"></span></div></li> --}}
                                {{-- <li class="stencil"><div class="drag-item tree" id="dragTree" draggable="true"><span id="results"></span></div></li>
                                <li class="stencil"><div class="drag-item tree" id="dragBush" draggable="true"><span id="results"></span></div></li>
                                <li class="stencil"><div class="drag-item tree" id="dragGrass" draggable="true"><span id="results"></span></div></li>
                                <li class="stencil"><div class="drag-item tree" id="dragFlowers" draggable="true"><span id="results"></span></div></li>
                                <li class="stencil"><div class="drag-item tree" id="dragpavers" draggable="true"><span id="results"></span></div></li>--}}
                            </ul>


                        </div>

                    </div>



                    <div class="outertarget">

                     <div class="title">  Garden title <input class="gardensubtitle" type="text" name="title>"></div>

                    <div id="divLayout" class="target">
                        
                    </div>
                    </div>

                    <div class="trashLayout">
                    </div>
                
            </div>
            <br>
            <br>

            <footer>

                <p>Online garden planners help you pull together the perfect plot. It lets you customize the layout of your garden by adding shrubs, trees, grass, pavers and flowers for a completely custom look to your new backyard.
                Once you've finished planning, print out a list of all the plants you chose so you don't end up wandering the aisles at your local store.
                </p>
            </footer>
            
            
        </div>

        <script id="template-imagelist" type="text/x-handlebars-template">
            <li class="stencil">
                <div class="drag-item @{{category}}" draggable="true">
                    <img class="@{{img_css_class}}" src="@{{image_file_path}}" alt ="@{{display_image_name}}">
                </div>
            </li>      
        </script>

        

        

</body>
</html>