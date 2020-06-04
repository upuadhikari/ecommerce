<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Todos</th>
			<th>Created at: </th>
		<tr>
		@foreach($todos as $todo)
		<tr>
		      <td><pre>{{ $todo->todo }}  <pre></td>
		      <td>{{ $todo->created_at }}</td>
		      <td><a href="edit_todo/{{ $todo->id }}"><input type="button" name="edit" value="edit"></a></td>
		      <td><a href="delete_todo/{{ $todo->id }}"><input type="button" name="delete" value="delete"></a></td>
		</tr>
		@endforeach
	</table>
	<br><br><br>
	<pre>		 <a href="/add_todo"><input type="button" name="add_todo" value="Add Todo"></a></pre>
</body>
</html>