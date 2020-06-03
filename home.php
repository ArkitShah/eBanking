<html>
	<head>
	<title>E-Banking</title>
	<style>
	 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}


h3{
	color:pink;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width:380px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #a30003;
	text-align: center;
	color:white;
}



body{
	background-color: PaleTurquoise;
}
    </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
  		$("button").mouseleave(function(){
  			$(this).css('background-color','#a30003');
    	
  			});
  		$("button").mouseenter(function(){
  			$(this).css('background-color','#ff474a');
  		});
		});
		</script>

	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h2 >The Home Page</h2>
		<h3> Welcome to E-Banking <?php Print "$user" ?></h3>
		<a href="logout.php" >Click Here to Logout.</a><br/>
		<br/><br/>
		<button type = "button" onclick="location.href='deposit.php'" >Deposit Money.</button>
		
		
		<button type = "button" onclick="location.href='withdraw.php'" >Withdraw Money.</button>
	
	
		<button type = "button" onclick="location.href='balance.php'" >Check Balance.</button>

	</div>
	</body>
	
</html>
