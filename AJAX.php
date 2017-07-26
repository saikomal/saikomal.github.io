<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<div id = "show"></div>
<script type = "text/javascript" src = "jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$('#show').load('process.php')
		},2000);
	});
	</script>
	
</body>
</html>