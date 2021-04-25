<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>		

	<title>exchange</title>
</head>
<body">
<button>REFRESH</button>
<div id="div1"><h2></h2></div>

<script>

$(document).ready(function(){
	$("#div1").load('cat.php');
  $("button").click(function(){
    $("#div1").load('cat.php');
  });
});



</script>
</body>
</html>
