<html>
<head>
</head>
<body>
<h1> Post Tweet </h1>
<form method="post">
	{{ csrf_field() }}
	<lable> What's happening? </lable>
	<input type="text" name="tweet">
	<input type="submit" value="tweet"> </button>
</form>
</body>
</html>