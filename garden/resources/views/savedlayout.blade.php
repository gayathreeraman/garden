<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='css/style.css' rel="stylesheet" type="text/css" >
    </head>
    <body>

    <div>
    
    <div>
		<h1>My Garden</h1>

		<table>
		    <tr>
		        <th>Number</th>
		        <th>Garden Title</th>
		        <th>Date Created</th>
		        <th>Edit</th>
		        <th>Delete</th>
		    </tr>
		    @foreach($gardens as $garden)

			<tr>
		    	<td>{{$garden->garden_id}} </td>
		        {{-- <td><a href="gardens/{{$garden->garden_id}}">{{$garden->layout_name}}</a></td> --}}
		        
		        <td>{{$garden->layout_name}}</td>
		        <td>{{$garden->date_created}}</td>
		        <td><a href=" ">Edit</a></td> 
		        <td><a href=" ">Delete</a></td>

		    </tr>
		    @endforeach
		</table>
	</div>

    </div>
    
        

        

</body>
</html>