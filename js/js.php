<html>
	<head>
	</head>
	<body>
		<form>
			<input id="uname" onkeyup="writeOp(this)" type="text" placeholder="Username"><br>
			<span id="op"></span><br>
			<input type="password" placeholder="Passwword"><br>
		</form>
		<button id="btn_g" onclick="viewGForm()">Login with Google</button>
		<form id="g_form" style="display:none;">
			<input type="text" placeholder="Gmail"><br>
			<input type="password" placeholder="Gmail Passwword"><br>
		</form>
		<button onclick="turnOn()">Turn On </button>
		<img id="bulb" src="pic_bulboff.png">
		<button onclick="turnOff()">Turn Off </button><br>
		<span onmouseover="showDetails()" onmouseout="hideDetails()">Aiub</span>
		<p id="info" style="display:none;">American International University-Bangladesh,commonly known </p>
		
		<script src="myjs.js"> </script>
	</body>
</html>