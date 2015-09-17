<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	Modifiqued by @TavoRazo
-->
<html>
	<head>
		<title>HomeworkCode</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
				code{ margin-top: 40px }
		</style>

		<script LANGUAGE="JavaScript"> 
			var posicion1=0 
			var posicion2=0 
			var Retardo; 
			var Fin; 
			var Mensaje; 

			function TipeodeMaquina(NuevoRetardo) { 
			Retardo = NuevoRetardo; 
			if (posicion1 > Mensaje.length) { 
			document.MiFormulario.caja.value = ''; 
			posicion1 = 0; 
			posicion2 = 0; 
			} 
			else if (Mensaje.substring(posicion1-2,posicion1-1) == '.') { 
			document.MiFormulario.caja.value = ''; 
			posicion2 = posicion1-1; 
			posicion1++; 
			} 
			else { 
			document.MiFormulario.caja.value = Mensaje.substring(posicion1,posicion2)+ "_"; 
			posicion1++; 
			} 
			Fin = setTimeout("TipeodeMaquina(Retardo) ", NuevoRetardo); 
			} 
		</script> 
	</head>
	<body id="top" onLoad="Mensaje='        ¿No le entiendes a ese lenguaje?   .... ¿No tienes tiempo para desarrollarlo?     ....     O quizá ¿te vas de fiesta este fin?    '; 
TipeodeMaquina(150);" onUnload="clearTimeout(Fin)">
		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="#">HomeworkCode</a></h1>
					<FORM NAME="MiFormulario"> 
						<input name="caja" ></input> 
					</FORM>
					<p>No te preocupes, nosotros lo 
					<a href="http://html5up.net">hacemos</a> por tí</p>
					<ul class="actions">
						<li><a href="#escribenos" class="button special icon scrolly">Escribenos</a></li>
						<li><a href="#two" class="button icon fa-chevron-down scrolly">Saber más</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/screen.png" style=" -webkit-filter: blur(0px);" alt="" /></div></div>
			</header>

		<!-- One -->
			<!--section id="one" class="wrapper style2 special">
				<header class="major">
					<h2><span style="color:#4696e5">Son solo 4 sencillos pasos </span> </h2>
				</header>
				<ul class="icons major">
					<li><img src="https://cdn4.iconfinder.com/data/icons/desktop-computer/71/Computer_Screen_desktop_monitor-02-128.png" alt=""></li>
				</ul>
			</section-->

		<!-- Two -->
			<section id="two" class="wrapper">
				<div class="inner alt">
					<section class="special">
						<header class="major">
							<h2>Codeamos</h2>
						</header>
							<code>
							C,
							Java,
							JS,
							HTML,
							CSS,
							Ruby,
							Python,
							Go,
							PHP,
							Mysql,
							MongoDB,
							Oracle,
							Linux,
							Mac iOS,
							Android,
							Windows,
							.net
							</code> 
							<br><br>
					</section>

				</div>
			</section>



		<!-- Four -->
			<section id="four" class="wrapper">
				<div class="inner">

					<header class="major">
						<h2>Pasos a seguir</h2>
					</header>

					<section>
						<h4>1. Llena nuestro formulario.</h4>
						<p>Como primer paso tendrás que llenar nuestro <strong><a href="#">formulario</a></strong> para que tengamos hasta el más intimo detalle de lo que quieres hacer. No olvides escribir tus datos reales.</p>
						<h4>2. Deposita.</h4>
						<p>En el preciso momento que nos llegue tu solicitud, nuestro equipo generará una cotización apropiada para tu necesidad definiendo el día de entrega, número de cuenta a depositar y otros datos importantes. Estos datos serán <u>confidenciales</u> y se enviarán a la cuenta que pusiste en el formulario.</p>
						<h4>3. Nosotros lo hacemos.</h4>
						<p>Se le asignará tu proyecto a uno o más desarrolladores del equipo. Todo el tiempo existirá una comunicación estable entre tú y <strong>HomeworkCode</strong></p>.
						<h4>4. Revisión y entrega.</h4>
						</p>Se te enviara un comprimido con instrucciones que se proporcionaron en un principio, el paquete de códigos con comentarios explicando los bloques de código. Si existe alguna duda se dará un plazo para resolverla.  </p>
						<hr/>
					
						<h5>Ejemplo de código</h5>
						<pre><code>
					
/**
* Ejemplo HolaMundo
* Imprime el mensaje "Hola, Mundo!"
*/

public class HolaMundo {
	public static void main(String[] args) {
		// Imprime el mensaje "Hola, Mundo!"
		System.out.println("Hola, Mundo!");
	}
}

						</code></pre>
					<li><a href="#" class="button special small fit">Quiero que desarrollen algo por mi.</a></li>
						

					</section>

				</div>
			</section>
		<!-- Three -->
			<section id="three" class="wrapper style2 special">
				<header class="major">
					<h2>¿ Quieres colaborar en este proyecto?</h2>
					<p>Si quieres ser colaborador de este proyecto, manda tus datos a <strong><a href="http://gmail.com">HomeworkCode@gmail.com</a></strong> 	.</p>
				</header>
				<ul class="actions">
					<li><a href="#" class="button">Contactar</a></li>
				</ul>
			</section>
			
			<section id="four" class="wrapper">
				<div class="inner">
					<section>
						<br><br><br>
						
						<div class="row">
							<div class="6u 12u$(medium)">
								<h3>Detalles por los que no lo haces.</h3>
								<ul class="alt">
									<li><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Checked-24.png" alt="" style="padding-right:10px">No le entendí al tema.</li>
									<li><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Checked-24.png" alt="" style="padding-right:10px">No tengo tiempo.</li>
									<li><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Checked-24.png" alt="" style="padding-right:10px">No quiero hacerlo.</li>
								</ul>
								<h3>Contactanos</h3>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								</ul>
							</div>
							<div class="6u$ 12u$(medium)">
								<h3>Alternativas</h3>
								<ul class="alt">
									<li><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Remove-20.png" alt="" style="padding-right:10px">No entregarlo.</li>
									<li><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Remove-20.png" alt="" style="padding-right:10px">Finjir y dar un pretexto.</li>
									<li style="color:#4696e5"><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/OK-20.png" alt="" style="padding-right:10px">Acercarte con <strong>HomeworkCode</strong>.</li>
								</ul>
								<h3>Forma de trabajo</h3>
								<ol>
									<li>Escribenos tu problema.</li>
									<li>Relajate.</li>
									<li>Te entregamos tu código.</li>
									<li>Tienes un 100 en la escuela o un cliente féliz.</li>
									<li>Vuelves a pedirnos ayuda.</li>
								</ol>
							</div>
						</div>
						<h3>Nuestro lema</h3>
						<blockquote style="border-color:#4696e5">Muchos estudiantes pasan sus años de estudios estresados, con ansiedad y sufriendo mucho antes, durante e incluso después de los exámenes. Creen que es lo más importante de la vida y se les olvidan que hay cosas mucho más importantes. <strong style="text-aling:left">Anónimo</strong></blockquote>

					</section>

					<section>
					<br><br><br>
					<header class="major">
						<h2>Tarifas</h2>
					</header>

						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Categoria</th>
										<th>Horas</th>
										<th>Precio</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Básico</td>
										<td>1 hora</td>
										<td>5 dlls</td>
									</tr>
									<tr>
										<td>Principiante</td>
										<td>1 hora</td>
										<td>6 dlls</td>
									</tr>
									<tr>
										<td>Intermedio</td>
										<td>1 hora</td>
										<td>6.5 dlls</td>
									</tr>
									<tr>
										<td>Master</td>
										<td>1 hora</td>
										<td>8 dlls</td>
									</tr>
								
								</tbody>
							</table>
						</div>
						<br><br><br><br>
					</section>

					<section id="escribenos">
						<header class="major">
							<h2>¿ Qué quieres hacer ?</h2>
						</header>

						<form method="post" action="send.php">
							<div class="row uniform">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="name" id="demo-name" value="" placeholder="Nombre completo" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="email" id="demo-email" value="" placeholder="Email" />
								</div>
								<div class="12u$">
									<div class="select-wrapper">
										<select name="lang" id="demo-category">
											<option value="">- Lenguaje -</option>
											<option value="1">C</option>
											<option value="2">Java</option>
											<option value="3">Go</option>
											<option value="4">Ruby</option>
											<option value="4">Python</option>
											<option value="4">PHP</option>
											<option value="4">Java Script</option>
											<option value="4">AngularJS</option>
											<option value="4">NodeJS</option>
											<option value="4">Shell</option>
											<option value="4">MySQL</option>
											<option value="4">ORACLE</option>
											<option value="4">MongoDB</option>
											<option value="4">.Net</option>
											<option value="4">Otro</option>
										</select>
									</div>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-low" name="level" checked>
									<label for="demo-priority-low">Básico/Principiante</label>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-normal" name="level">
									<label for="demo-priority-normal">Intermedio</label>
								</div>
								<div class="4u$ 12u$(small)">
									<input type="radio" id="demo-priority-high" name="level">
									<label for="demo-priority-high">Master</label>
								</div>

								<!--div class="6u 12u$(small)">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy</label>
								</div-->
								<div class="6u$ 12u$(small)">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="12u$">
									<textarea name="msj" id="demo-message" placeholder="Describe tu programa" rows="6"></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<p class="copyright">&copy; HomeworkCode 2015-2016<a href="http://html5up.net">.</a></p>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>