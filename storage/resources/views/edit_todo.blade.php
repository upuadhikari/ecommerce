<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="get" action="/update/{{$todo->id}}">
		  @csrf
		  <div class="form-group">
		    <label for="name">Edit ToDo:</label>
		    <input type="text" class="form-control" placeholder="Enter Your Todo Here" name="todo" value="{{$todo->todo}}" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
 </form> 
</body>
</html>
