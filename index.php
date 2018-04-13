<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<style type="text/css">
	body{
		font-family: Roboto;
		background-color: #ddd;
	}
		.container{
			width: 600px;
			margin: 7% auto;
			background-color: #000;
			min-height: 450px;
			color: #fff;
			padding: 40px;
			border-radius: 3px;
		}
		.container button{
			float: right;
			color: #fff;
			border: none;
			background-color: #000;
			cursor: pointer;
			font-size: 15px;
		}
		.container h2{
			text-align: center;
			padding-top: 20px;
		}
		.container form{
			width: 50%;
			margin: 2% auto 5% auto;
		}
		.container form table tr td {
			padding: 10px;
		}
		.container form table tr td label{
			font-size: 18px;
		}
		.container form table tr td input[type=submit]{
			background-color: #000;
			border:none;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}
		.container .time{
           text-align: center;
           margin-top: 10%;
           font-size: 20px;
		}
	</style>
</head>
<body>
<div class="container">
<button>Sign Up</button>
<h2>WELCOME TO HNG INTERNSHIP</h2>
<p class="time">
	<?php echo date("h:i:sa"); ?>
</p>
 <form>
 	<table>
 		<tr>
 			<td><label>Username</label></td>
 			<td><input type="text" name=""></td>
 		</tr>
 		<tr>
 			<td><label>Password</label></td>
 			<td><input type="password" name=""></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><input type="submit" name="" value="Login"></td>
 		</tr>
 	</table>
 </form>
	
</div>

</body>
</html>