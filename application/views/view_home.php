<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home page</title>

	<style>
	body, html { margin: 0; padding: 0; }
	body {
		background-color: #eee;
	}
	h1,h2,h3,h4,h5,h6,p,a,li,ul{
		font-family: Arial, sans-serif;
		color: black;
		text-decoration: none;
	}
	#nav {
		margin: 50px auto 0;
		width: 1000px;
		background-color: #888;
		height: 15px;
		padding: 20px;
	}
	#nav a:hover{
		color: green;
	}
	#nav ul {
		list-style: none;
		float: left;
		margin: 0 50px;
	}
	#nav ul li{
		display: inline;
	}
	#content{
		width: 1000px;
		min-height: 100%;
		margin: 0 auto;
		padding: 20px;
	}
	#footer {
		width: 400px;
		height: 15px;
		margin: 0 auto;
		padding: 20px;
	}
	#footer p{
		color: #777;
	}

	</style>
</head>
<body>

<div id="container">
	<div id="nav">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="content">
		<h1>Home page</h1>
		<p>Welcome to my aweseome site</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2013 Davis</p>
	</div>
</div>

</body>
</html>