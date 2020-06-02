<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="get" action="/save_new_todo/">
		  @csrf
		  <div class="form-group">
		    <label for="name">NEW ToDo:</label>
		    <input type="text" class="form-control" placeholder="Enter Your Todo Here" name="todo"  required>

		  </div>
		  <button type="submit" class="btn btn-primary">Create</button>
 </form> 
</body>
</html>