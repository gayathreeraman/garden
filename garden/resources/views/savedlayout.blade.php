<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='css/style.css' rel="stylesheet" type="text/css" >
    </head>
    <body>

    <div>
    
    <div>
		<h1>Best Games</h1>
		<table>
		    <tr>
		        <th>Garden Id</th>
		        <th>LayoutName</th>
		        <th>Edit</th>
		        <th>Delete</th>
		    </tr>
		    @foreach($gardens as $garden)
			<tr>
		    	<td>{{$garden->garden_id}} </td>
		        <td><a href="gardens/{{$garden->garden_id}}">{{$garden->layout_name}}</a></td>
		        <td>{{$garden->date_created}}</td>
		        <td><a href=" ">Edit</a></td> 
		        <td><a href=" ">Delete</a></td>
		        <br>
		    </tr>
		    @endforeach
		</table>
	</div>

    </div>
    
        

        

</body>
</html>