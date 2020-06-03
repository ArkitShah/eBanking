<html>
	<head>
	<title>E-Banking</title>
<style>
.container{
	width: 450px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
	background-color: PaleTurquoise;
}

form{
	align-content: center;
	padding:10px;
	margin-top: 15px;
}
input
{
	margin :5px;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	text-align: center;
	background-color: #a30003;
	position:relative;
	right:-100px;
	color:white;
}



body{
	background-image: url('lg5.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
    </style>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
  		$(".button").mouseleave(function(){
  			$(this).css('background-color','#a30003');
    	
  			});
  		$(".button").mouseenter(function(){
  			$(this).css('background-color','#ff474a');
  		});
		});
		</script>
	<body>

	<div class="container">
		<h2 >The Login Page</h2>
		<a href="index.php" >Click Here to Go Back.</a><br/>
		<form action="checklogin.php" method="POST">
			Enter Username : <input type="text" name="username" required="required"/><br/>
			Enter Password : <input type="password" name="password" required="required"/><br/>
			<input type="submit" value="Login" class="button"/>
			</form>	
	</div>
	</body>
	
</html>
