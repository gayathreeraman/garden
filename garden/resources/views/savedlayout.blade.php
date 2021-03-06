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

   
              

        
</head>
<body class="savedlayout">
     
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
                @else
                <a href="/"><div id="home">Home</div></a>
                @endif
            </div>


        </header>
      



    <div>
    
    <div>
		<p class="savedgarden">My Garden<p>

		<table>
		    <tr>
		       
		        <th>Garden Title</th>
		        <th>Date Created</th>
		        <th>Edit</th>
		        <th>Delete</th>
		    </tr>
		    @foreach($gardens as $garden)

			<tr>
		    
		        <td><a href="/garden/{{$garden->garden_id}}">{{$garden->layout_name}}</a></td> 
		        
		        {{-- <td>{{$garden->layout_name}}</td> --}}
		        <td>{{$garden->date_created}}</td>
		        <td><a href="/garden/{{$garden->garden_id}}">Edit</a></td> 
		        <td><a href="garden/{{$garden->garden_id}}/delete">Delete</a></td>

		    </tr>
		    @endforeach
		</table>
	</div>

    </div>
    
        

        

</body>
</html>