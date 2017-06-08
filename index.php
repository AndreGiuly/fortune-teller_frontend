<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Fortune Teller TRIAL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/animate.css">
	<link rel="stylesheet" href="styles/styles.css">

      <script type = "text/javascript"
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		

	<script src="scritps/myscript.js"></script>
</head>
<body>
<!-- Background Big -->
<img src="images/1200x700.jpg" id="bg" alt="Background">
<!-- Background Small -->
<img src="images/320x600.jpg" id="bg-sm" alt="Background">

<div class="deck">
<!-- Card1 -->
	<div class="card-content card1">
		<div class="card-container">
			<h1>Por favor introduce tu <b>número <br> de celular</b> abajo:</h1>	

			<form class="card-form" action="" method="post">
				<div class="form">

					<div class="form-group">

						<input name="tlm"
						onkeypress="return isNumeric(event)"
						oninput="maxLengthCheck(this)"
						type = "number"
						class="inline" 
						id="tlm" 
						min = "1"
						max = "9999999999" />

						<select class="operator" name="operadora" id="operator">
							<option value="0" selected></option>
							<option value="1">Operator 1</option>
							<option value="2">Operator 2</option>
						</select>
					</div>
				</div>

				<div class="checkbox">
					<label class="termos">
						<input class="sq" id="termos" name="termos" type="checkbox"> Leí y acepto los <a href="">términos y condiciones</a>
					</label>
				</div>

				<button type="submit" class="botao">Seguiente</button>
			</form>
			<p class="error error-desktop mobile">*Debes ingresar un número de celular válido</p>
			<p class="error error-desktop operadora">*Por favor, elige tu operadora</p>
			<p class="error error-desktop termos">*Tienes que aceptar los términos y condiciones</p>
			
		</div>
	</div>
<!-- End Card1 -->

<!-- Card2 -->
	<div class="card-content card2">
		<div class="card-container">
			<h1>Ahora, por favor introduce el <b>PIN <br></b> que has recibido en tu celular:</h1>	
			<form class="card-form" action="" method="post">
				<div class="form">
					<div class="form-group">
						<input name="tlm"
						type = "number"
						class="mobile-disabled" 
						id="tlm" 
						value="8889990000"
						disabled />

						<input name="code"
						onkeypress="return isNumeric(event)"
						oninput="maxLengthCheck(this)"
						type = "number"
						class="inline code" 
						placeholder="****"
						min = "1"
						max = "9999" />
					</div>
				</div>

				<p>¿Has confundido tu número? Hace clic <span id="volver">aqui</span> para volver</p>

				<button type="submit" class="botao seguiente">Resultado</button>
			</form>
			<p class="error error-desktop codigo">*Introduzca el PIN</p>
			
		</div>
	</div>
<!-- End Card2 -->		
</div>

<!-- Success Board -->
<div class="success">

	<!-- Zoltar Img -->
	<img src="images/zoltar.png" alt="Zoltar" class="img img-responsive zoltar">
	<!-- End Zoltar -->


	<div class="container success-board">
		<div class="row text-center suertes">
			<div class="col-xs-4 animated fadeInDown img1">
				<img src="images/green.png"" class="img img-circle" alt="">
				<p class="ts">Tu número <br> de la suerte:<br>
				<span class="num_suerte">24</span></p>
			</div>
			<div class="col-xs-4 animated fadeInDown img2">
				<img src="images/calendar.png" class="img img-circle" alt="">
				<p class="ts">Tu día de <br>la semana:<br>
				<span class="dia_suerte">martes</span></p>
			</div>
			<div class="col-xs-4 animated fadeInDown img3">
				<img src="images/painter-roll.png" class="img img-circle" alt="">
				<p class="ts">Tu color de<br> la suerte:<br>
				<span class="color_suerte">rojo</span></p>
			</div>
		</div>
		<div class="row ">
			<div class="col-xs-12 text-scroll">
				<h1>Trabajo</h1>
				<p>Tu carrera se dirige ahora hacia la mejor dirección, para que puedas ver las recompensas que salen de tus últimos esfuerzos. tu brillante actuación en el trabajo no sólo guía a tomar la carrera en la parte superior, pero también te traerá elogios y aprecio de jefe y superiores. Si has estado en busca de una buena oportunidad de trabajo, este mes, es posible que tengas éxito.</p>
				<h1>Dinero</h1>
				<p>El trabajo y las finanzas van a florecer. Podrás disfrutar de buen dinero con todos los gastos realizados sin problemas. Estás haciendo bien, pero no hay nada malo en mantener en vista más horizontes para tu crescimiento. Evita cualquier tipo de gran inversión financiera.</p>
				<h1>Romance</h1>
				<p>Cooperación y compromiso, si, tu tienes que hacerlo para mantener vivo el amor. Es necesario para mantener el interés de su pareja en desarollo y para mantener el deseo y el amor ardiente fuerte. La discusión abierta es clave para el corazón de tu amor, a fin de mantener la conversación aceza, incluso si tienen conflictos en vuestra relación.</p>
				<h1>Salud</h1>
				<p>Dolores de cabeza leves pueden prevalecer si se toma la tensión sobre tu mente. Los hábitos alimenticios irregulares son las principales causas de su enfermedad de vez en cuando. No salte el desayuno o será difícil para que usted pueda realizar bien las responsabilidades del trabajo.</p>
			</div>

		</div>
	</div>
</div>
<!-- End Success Board -->

</body>
</html>