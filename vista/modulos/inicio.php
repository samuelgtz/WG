<?php
	$url = Ruta::ctrRuta();

	$mostrarPais = ControladorCovid::ctrInformacionPaises();

?>

<!--<input type="" OnKeyUp="ShowSelected()" id="pais" class="pais" name="pais">-->

<div id="js-map-canvas" class="map-canvas">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16721/map-canvas-fallback.png">
</div>

<div class="covid">
	<h1>
		COVID-19
	</h1>

	<h3>
		WOLVES GROUP CORPORATION
	</h3>
</div>

<div id="respuesta">

	<div id="pre" class="pre"></div>

	<div class="divmundo">

		<img class="impaismundo" src="vista/img/default/paises/mundo.png" style="margin: 10px;" width="60%;" class="logo">

		<div class="backinfmap">

			<?php 

				if ($mostrarPais[0]["PAIS_NOMBRE"] == 'MUNDO') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[0]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[0]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[0]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>

	</div>

	<div class="divafgan">

		<h1 class="paisname">Afganistán</h1>

		<img class="impais" src="vista/img/default/paises/Afganistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[1]["PAIS_NOMBRE"] == 'Afganistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[1]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[1]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[1]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divalba">

		<h1 class="paisname">Albania</h1>

		<img class="impais" src="vista/img/default/paises/albania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[2]["PAIS_NOMBRE"] == 'Albania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[2]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[2]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[2]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divalem">

		<h1 class="paisname">Alemania</h1>

		<img class="impais" src="vista/img/default/paises/alemania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[3]["PAIS_NOMBRE"] == 'Alemania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[3]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[3]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[3]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divandorr">

		<h1 class="paisname">Andorra</h1>

		<img class="impais" src="vista/img/default/paises/andorra.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[4]["PAIS_NOMBRE"] == 'Andorra') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[4]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[4]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[4]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divango">

		<h1 class="paisname">Angola</h1>

		<img class="impais" src="vista/img/default/paises/angola.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[5]["PAIS_NOMBRE"] == 'Angola') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[5]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[5]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[5]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divanbarbu">

		<h1 class="paisname">Antigua y Barbuda</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/antiguaBarbuda.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[6]["PAIS_NOMBRE"] == 'Antigua') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[6]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[6]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[6]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divarabsaud">

		<h1 class="paisname">Arabia Saudita</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/arabiasaudita.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[7]["PAIS_NOMBRE"] == 'Arabia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[7]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[7]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[7]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divargel">

		<h1 class="paisname">Argelia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/argelia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[8]["PAIS_NOMBRE"] == 'Argelia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[8]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[8]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[8]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divargent">

		<h1 class="paisname">Argentina</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/argentina.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[9]["PAIS_NOMBRE"] == 'Argentina') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[9]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[9]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[9]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divarmeni">

		<h1 class="paisname">Armenia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/armenia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[10]["PAIS_NOMBRE"] == 'Armenia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[10]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[10]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[10]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divaustral">

		<h1 class="paisname">Australia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/australia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[11]["PAIS_NOMBRE"] == 'Australia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[11]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[11]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[11]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divaustri">

		<h1 class="paisname">Austria</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/austria.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[12]["PAIS_NOMBRE"] == 'Austria') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[12]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[12]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[12]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divazembay">

		<h1 class="paisname">Azerbaiyán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/azerbaiyan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[13]["PAIS_NOMBRE"] == 'Azerbaiyan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[13]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[13]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[13]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbaham">

		<h1 class="paisname">Bahamas</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Bahamas.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[14]["PAIS_NOMBRE"] == 'Bahamas') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[14]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[14]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[14]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbanglade">

		<h1 class="paisname">Bangladés</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/banglades.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[15]["PAIS_NOMBRE"] == 'Banglades') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[15]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[15]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[15]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbarbad">

		<h1 class="paisname">Barbados</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/barbados.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[16]["PAIS_NOMBRE"] == 'Barbados') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[16]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[16]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[16]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divberei">

		<h1 class="paisname">Baréin</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/barein.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[17]["PAIS_NOMBRE"] == 'Barein') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[17]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[17]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[17]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbelgic">

		<h1 class="paisname">Bélgica</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Belgica.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[18]["PAIS_NOMBRE"] == 'Belgica') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[18]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[18]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[18]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbelic">

		<h1 class="paisname">Belice</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/belice.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[19]["PAIS_NOMBRE"] == 'Belice') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[19]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[19]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[19]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbenin">

		<h1 class="paisname">Benín</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/benin.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[20]["PAIS_NOMBRE"] == 'Benin') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[20]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[20]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[20]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbielorrus">

		<h1 class="paisname">Bielorrusia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Bielorrusia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[21]["PAIS_NOMBRE"] == 'Bielorrusia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[21]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[21]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[21]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbiramanmyanma">

		<h1 class="paisname">Birmania / Myanmar</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Birmania-Myanmar.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[22]["PAIS_NOMBRE"] == 'Birmania Myanmar') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[22]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[22]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[22]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divboliv">

		<h1 class="paisname">Bolivia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Bolivia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[23]["PAIS_NOMBRE"] == 'Bolivia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[23]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[23]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[23]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbosniherzeg">

		<h1 class="paisname">Bosnia y Herzegovina</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/BosniaHerzegovina.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[24]["PAIS_NOMBRE"] == 'Bosnia y Herzegovina') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[24]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[24]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[24]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbotsuna">

		<h1 class="paisname">Botsuana</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Botsuana.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[25]["PAIS_NOMBRE"] == 'Botsuana') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[25]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[25]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[25]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbrasi">

		<h1 class="paisname">Brasil</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Brasil.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[26]["PAIS_NOMBRE"] == 'Brasil') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[26]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[26]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[26]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbure">

		<h1 class="paisname">Brunéi</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Brunei.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[27]["PAIS_NOMBRE"] == 'Brunei') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[27]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[27]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[27]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbulgari">

		<h1 class="paisname">Bulgaria</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Bulgaria.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[28]["PAIS_NOMBRE"] == 'Bulgaria') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[28]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[28]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[28]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divburund">

		<h1 class="paisname">Burundi</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Burundi.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[29]["PAIS_NOMBRE"] == 'Burundi') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[29]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[29]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[29]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divbuta">

		<h1 class="paisname">Bután</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Butan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[30]["PAIS_NOMBRE"] == 'Butan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[30]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[30]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[30]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcabver">

		<h1 class="paisname">Cabo Verde</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/CaboVerde.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[31]["PAIS_NOMBRE"] == 'Cabo Verde') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[31]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[31]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[31]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcanboy">

		<h1 class="paisname">Camboya</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Camboya.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[32]["PAIS_NOMBRE"] == 'Camboya') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[32]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[32]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[32]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>


		</div>
	</div>

	<div class="divcameru">

		<h1 class="paisname">Camerún</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/camerun.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[33]["PAIS_NOMBRE"] == 'Camerun') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[33]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[33]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[33]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcanad">

		<h1 class="paisname">Canadá</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Canada.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[34]["PAIS_NOMBRE"] == 'Canada') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[34]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[34]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[34]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcata">

		<h1 class="paisname">Catar</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Catar.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[35]["PAIS_NOMBRE"] == 'Catar') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[35]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[35]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[35]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcha">

		<h1 class="paisname">Chad</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Chad.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[36]["PAIS_NOMBRE"] == 'Chad') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[36]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[36]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[36]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divchil">

		<h1 class="paisname">Chile</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Chile.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<p>Confirmados</p><p>Recuperadas</p><p>Muertos</p><br><br>
			<h1>1531</h1>&nbsp&nbsp&nbsp&nbsp<h1>207</h1>&nbsp&nbsp<h1>50</h1>

		</div>
	</div>

	<div class="divchin">

		<h1 class="paisname">China</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/China.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[37]["PAIS_NOMBRE"] == 'China') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[37]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[37]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[37]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divchip">

		<h1 class="paisname">Chipre</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Chipre.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[38]["PAIS_NOMBRE"] == 'Chipre') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[38]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[38]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[38]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divciudadvatic">

		<h1 class="paisname">Ciudad del Vaticano</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/CiudadVaticano.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[39]["PAIS_NOMBRE"] == 'Ciudad del vaticano') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[39]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[39]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[39]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcolomb">

		<h1 class="paisname">Colombia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Colombia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[40]["PAIS_NOMBRE"] == 'Colombia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[40]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[40]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[40]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcomora">

		<h1 class="paisname">Comoras</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Comoras.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[41]["PAIS_NOMBRE"] == 'Comoras') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[41]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[41]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[41]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcornor">

		<h1 class="paisname">Corea del Norte</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/CoreaNorte.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[42]["PAIS_NOMBRE"] == 'Corea del Norte') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[42]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[42]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[42]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcorsu">

		<h1 class="paisname">Corea del Sur</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/coreaSur.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[43]["PAIS_NOMBRE"] == 'Corea del Sur') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[43]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[43]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[43]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcostmarf">

		<h1 class="paisname">Costa de Marfil</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/CostaMarfil.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[44]["PAIS_NOMBRE"] == 'Costa de Marfil') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[44]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[44]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[44]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcostric">

		<h1 class="paisname">Costa Rica</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/costarica.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[45]["PAIS_NOMBRE"] == 'Costa Rica') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[45]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[45]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[45]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcroa">

		<h1 class="paisname">Croacia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/croacia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[46]["PAIS_NOMBRE"] == 'Croacia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[46]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[46]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[46]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divcub">

		<h1 class="paisname">Cuba</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/cuba.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[47]["PAIS_NOMBRE"] == 'Cuba') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[47]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[47]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[47]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divdinam">

		<h1 class="paisname">Dinamarca</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Dinamarca.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[48]["PAIS_NOMBRE"] == 'Dinamarca') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[48]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[48]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[48]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divdomin">

		<h1 class="paisname">Dominica</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Dominica.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[49]["PAIS_NOMBRE"] == 'Dominica') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[49]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[49]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[49]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divecuad">

		<h1 class="paisname">Ecuador</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Ecuador.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[50]["PAIS_NOMBRE"] == 'Ecuador') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[50]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[50]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[50]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divegip">

		<h1 class="paisname">Egipto</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Ejipto.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[51]["PAIS_NOMBRE"] == 'Egipto') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[51]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[51]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[51]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divelsalvad">

		<h1 class="paisname">El Salvador</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/elsalvador.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[52]["PAIS_NOMBRE"] == 'El Salvador') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[52]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[52]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[52]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divemiraarabeuni">

		<h1 class="paisname">Emiratos Árabes Unidos</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/emiratosarabesunidos.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[53]["PAIS_NOMBRE"] == 'Emiratos Arabes Unidos') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[53]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[53]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[53]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="diveret">

		<h1 class="paisname">Eritrea</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Eritrea.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[54]["PAIS_NOMBRE"] == 'Eritrea') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[54]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[54]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[54]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="diveslov">

		<h1 class="paisname">Eslovaquia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Eslovaquia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[55]["PAIS_NOMBRE"] == 'Eslovaquia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[55]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[55]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[55]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divesloven">

		<h1 class="paisname">Eslovenia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Eslovenia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[56]["PAIS_NOMBRE"] == 'Eslovenia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[56]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[56]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[56]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divespain">

		<h1 class="paisname">España</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/España.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[57]["PAIS_NOMBRE"] == 'España') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[57]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[57]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[57]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divestadunid">

		<h1 class="paisname">Estados Unidos</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/EstadosUnidos.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[58]["PAIS_NOMBRE"] == 'Estados Unidos') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[58]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[58]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[58]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="diveston">

		<h1 class="paisname">Estonia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Estonia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[59]["PAIS_NOMBRE"] == 'Estonia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[59]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[59]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[59]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divetiop">

		<h1 class="paisname">Etiopía</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Etiopia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[60]["PAIS_NOMBRE"] == 'Etiopia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[60]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[60]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[60]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divfilip">

		<h1 class="paisname">Filipinas</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/filipinas.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[61]["PAIS_NOMBRE"] == 'Filipinas') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[61]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[61]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[61]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divfinland">

		<h1 class="paisname">Finlandia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Filandia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[62]["PAIS_NOMBRE"] == 'Finlandia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[62]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[62]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[62]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divfiy">

		<h1 class="paisname">Fiyi</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/fiyi.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[63]["PAIS_NOMBRE"] == 'Fiyi') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[63]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[63]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[63]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divfranc">

		<h1 class="paisname">Francia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/francia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[64]["PAIS_NOMBRE"] == 'Francia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[64]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[64]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[64]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divgabo">

		<h1 class="paisname">Gabón</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Gabon.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[65]["PAIS_NOMBRE"] == 'Gabon') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[65]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[65]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[65]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divgamb">

		<h1 class="paisname">Gambia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Gambia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[66]["PAIS_NOMBRE"] == 'Gambia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[66]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[66]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[66]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divgeorg">

		<h1 class="paisname">Georgia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Georgia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[67]["PAIS_NOMBRE"] == 'Georgia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[67]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[67]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[67]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divghan">

		<h1 class="paisname">Ghana</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Ghana.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[68]["PAIS_NOMBRE"] == 'Ghana') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[68]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[68]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[68]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divgrana">

		<h1 class="paisname">Granada</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Granada.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[69]["PAIS_NOMBRE"] == 'Granada') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[69]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[69]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[69]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divgreci">

		<h1 class="paisname">Grecia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Grecia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[70]["PAIS_NOMBRE"] == 'Grecia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[70]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[70]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[70]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divguatem">

		<h1 class="paisname">Guatemala</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Guatemala.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[71]["PAIS_NOMBRE"] == 'Guatemala') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[71]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[71]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[71]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divguinecuato">

		<h1 class="paisname">Guinea Ecuatorial</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Guineaecuatorial.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[72]["PAIS_NOMBRE"] == 'Guinea Ecuatorial') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[72]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[72]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[72]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divguine">

		<h1 class="paisname">Guinea</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Guinea.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[73]["PAIS_NOMBRE"] == 'Guinea') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[73]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[73]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[73]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divguinbisa">

		<h1 class="paisname">Guinea-Bisáu</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/GuineaBisau.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[74]["PAIS_NOMBRE"] == 'Guinea Bisau') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[74]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[74]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[74]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divguyan">

		<h1 class="paisname">Guyana</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Guyana.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[75]["PAIS_NOMBRE"] == 'Guyana') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[75]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[75]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[75]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divhait">

		<h1 class="paisname">Haití</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Haiti.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[76]["PAIS_NOMBRE"] == 'Haiti') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[76]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[76]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[76]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divhondu">

		<h1 class="paisname">Honduras</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Honduras.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[77]["PAIS_NOMBRE"] == 'Honduras') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[77]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[77]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[77]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divhungri">

		<h1 class="paisname">Hungría</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Hungria.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[78]["PAIS_NOMBRE"] == 'Hungria') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[78]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[78]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[78]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divindi">

		<h1 class="paisname">India</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/India.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[79]["PAIS_NOMBRE"] == 'India') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[79]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[79]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[79]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divindones">

		<h1 class="paisname">Indonesia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Indonesia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[80]["PAIS_NOMBRE"] == 'Indonesinia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[80]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[80]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[80]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divirak">

		<h1 class="paisname">Irak</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Irak.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[81]["PAIS_NOMBRE"] == 'Irak') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[81]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[81]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[81]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="diviran">

		<h1 class="paisname">Irán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Iran.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[82]["PAIS_NOMBRE"] == 'Iran') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[82]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[82]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[82]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divirlan">

		<h1 class="paisname">Irlanda</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Irlanda.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[83]["PAIS_NOMBRE"] == 'Irlanda') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[83]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[83]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[83]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divisland">

		<h1 class="paisname">Islandia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Islandia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[84]["PAIS_NOMBRE"] == 'Islandia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[84]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[84]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[84]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divislmarsh">

		<h1 class="paisname">Islas Marshall</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/islasmarchall.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[85]["PAIS_NOMBRE"] == 'Islas Marshall') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[85]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[85]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[85]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divislsalom">

		<h1 class="paisname">Islas Salomón</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/islassalomon.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[86]["PAIS_NOMBRE"] == 'Islas Salomon') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[86]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[86]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[86]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divisra">

		<h1 class="paisname">Israel</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Israel.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[87]["PAIS_NOMBRE"] == 'Israel') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[87]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[87]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[87]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divitali">

		<h1 class="paisname">Italia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Italia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[88]["PAIS_NOMBRE"] == 'Italia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[88]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[88]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[88]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divjamaic">

		<h1 class="paisname">Jamaica</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Jamaica.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[89]["PAIS_NOMBRE"] == 'Jamaica') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[89]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[89]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[89]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divjapo">

		<h1 class="paisname">Japón</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/japon.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[90]["PAIS_NOMBRE"] == 'Japon') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[90]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[90]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[90]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divjordan">

		<h1 class="paisname">Jordania</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Jordiana.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[91]["PAIS_NOMBRE"] == 'Jordania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[91]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[91]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[91]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divkazajista">

		<h1 class="paisname">Kazajistán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Kazajistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[92]["PAIS_NOMBRE"] == 'Kazajistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[92]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[92]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[92]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divken">

		<h1 class="paisname">Kenia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Kenia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[93]["PAIS_NOMBRE"] == 'Kenia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[93]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[93]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[93]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divkirgursta">

		<h1 class="paisname">Kirguistán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Kirguistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[94]["PAIS_NOMBRE"] == 'Kirguistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[94]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[94]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[94]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divkiribat">

		<h1 class="paisname">Kiribati</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Kiribati.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[95]["PAIS_NOMBRE"] == 'Kiribati') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[95]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[95]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[95]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divkuwai">

		<h1 class="paisname">Kuwait</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Kuwait.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[96]["PAIS_NOMBRE"] == 'Kuwait') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[96]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[96]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[96]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divlao">

		<h1 class="paisname">Laos</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Laos.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[97]["PAIS_NOMBRE"] == 'Laos') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[97]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[97]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[97]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divleso">

		<h1 class="paisname">Lesoto</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Lesoto.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[98]["PAIS_NOMBRE"] == 'Lesoto') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[98]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[98]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[98]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divleton">

		<h1 class="paisname">Letonia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Letonia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[99]["PAIS_NOMBRE"] == 'Letonia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[99]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[99]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[99]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divliban">

		<h1 class="paisname">Líbano</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Libano.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[100]["PAIS_NOMBRE"] == 'Libano') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[100]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[100]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[100]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divliber">

		<h1 class="paisname">Liberia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Liberia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[101]["PAIS_NOMBRE"] == 'Liberia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[101]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[101]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[101]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divlib">

		<h1 class="paisname">Libia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/libia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[102]["PAIS_NOMBRE"] == 'Libia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[102]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[102]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[102]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divLiechtenstei">

		<h1 class="paisname">Liechtenstein</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Liechtenstein.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[103]["PAIS_NOMBRE"] == 'Liechtenstein') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[103]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[103]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[103]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divLituani">

		<h1 class="paisname">Lituania</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Lituania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[104]["PAIS_NOMBRE"] == 'Lituania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[104]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[104]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[104]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divLuxemburg">

		<h1 class="paisname">Luxemburgo</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Luxemburgo.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[105]["PAIS_NOMBRE"] == 'Luxemburgo') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[105]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[105]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[105]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmacedonnort">

		<h1 class="paisname">Macedonia del Norte</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/MacedoniadelNorte.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[106]["PAIS_NOMBRE"] == 'Macedonia del Norte') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[106]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[106]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[106]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmadagasc">

		<h1 class="paisname">Madagascar</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Madagascar.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[107]["PAIS_NOMBRE"] == 'Madagascar') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[107]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[107]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[107]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmalasi">

		<h1 class="paisname">Malasia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Malasia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[108]["PAIS_NOMBRE"] == 'Malasia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[108]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[108]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[108]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmalau">

		<h1 class="paisname">Malaui</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Malaui.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[109]["PAIS_NOMBRE"] == 'Malaui') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[109]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[109]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[109]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmaldi">

		<h1 class="paisname">Maldivas</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Maldivas.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[110]["PAIS_NOMBRE"] == 'Maldivas') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[110]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[110]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[110]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmal">

		<h1 class="paisname">Malí o Mali</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Mali.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[111]["PAIS_NOMBRE"] == 'Mali') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[111]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[111]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[111]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmalt">

		<h1 class="paisname">Malta</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Malta.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[112]["PAIS_NOMBRE"] == 'Malta') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[112]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[112]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[112]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmarrueco">

		<h1 class="paisname">Marruecos</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Marruecos.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[113]["PAIS_NOMBRE"] == 'Marruecos') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[113]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[113]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[113]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmauric">

		<h1 class="paisname">Mauricio</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Mauricio.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[114]["PAIS_NOMBRE"] == 'Mauricio') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[114]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[114]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[114]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmaurita">

		<h1 class="paisname">Mauritania</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Mauritania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[115]["PAIS_NOMBRE"] == 'Mauritania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[115]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[115]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[115]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmexic">

		<h1 class="paisname">México</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Mexico.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[116]["PAIS_NOMBRE"] == 'Mexico') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[116]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[116]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[116]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmicronesi">

		<h1 class="paisname">Micronesia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Micronesia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[117]["PAIS_NOMBRE"] == 'Micronesia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[117]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[117]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[117]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmoldavi">

		<h1 class="paisname">Moldavia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Moldavia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[118]["PAIS_NOMBRE"] == 'Moldavia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[118]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[118]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[118]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmonac">

		<h1 class="paisname">Mónaco</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Monaco.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[119]["PAIS_NOMBRE"] == 'Monaco') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[119]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[119]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[119]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divmongloi">

		<h1 class="paisname">Mongolia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Mongolia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[120]["PAIS_NOMBRE"] == 'Mongolia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[120]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[120]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[120]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divMontenegr">

		<h1 class="paisname">Montenegro</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Montenegro.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[121]["PAIS_NOMBRE"] == 'Montenegro') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[121]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[121]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[121]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divMozambiqu">

		<h1 class="paisname">Mozambique</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Mozambique.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[122]["PAIS_NOMBRE"] == 'Mozambique') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[122]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[122]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[122]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNamibi">

		<h1 class="paisname">Namibia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Namibia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[123]["PAIS_NOMBRE"] == 'Namibia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[123]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[123]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[123]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNaur">

		<h1 class="paisname">Nauru</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Nauru.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[124]["PAIS_NOMBRE"] == 'Nauru') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[124]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[124]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[124]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNepa">

		<h1 class="paisname">Nepal</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Nepal.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[125]["PAIS_NOMBRE"] == 'Nepal') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[125]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[125]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[125]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNicaragu">

		<h1 class="paisname">Nicaragua</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Nicaragua.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[126]["PAIS_NOMBRE"] == 'Nicaragua') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[126]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[126]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[126]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNige">

		<h1 class="paisname">Níger</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Niger.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[127]["PAIS_NOMBRE"] == 'Niger') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[127]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[127]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[127]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNigeri">

		<h1 class="paisname">Nigeria</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Nigeria.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[128]["PAIS_NOMBRE"] == 'Nigeria') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[128]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[128]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[128]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNorueg">

		<h1 class="paisname">Noruega</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Noruega.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[129]["PAIS_NOMBRE"] == 'Noruega') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[129]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[129]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[129]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divNuevZeland">

		<h1 class="paisname">Nueva Zelanda</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/NuevaZelanda.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[130]["PAIS_NOMBRE"] == 'Nueva Zelanda') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[130]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[130]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[130]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divOma">

		<h1 class="paisname">Omán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Oman.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[131]["PAIS_NOMBRE"] == 'Oman') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[131]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[131]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[131]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPaiseBajo">

		<h1 class="paisname">Países Bajos</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/PaisesBajos.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[132]["PAIS_NOMBRE"] == 'Paises Bajos') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[132]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[132]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[132]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPakista">

		<h1 class="paisname">Pakistán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Pakistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[133]["PAIS_NOMBRE"] == 'Pakistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[133]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[133]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[133]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPalao">

		<h1 class="paisname">Palaos</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Palaos.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[134]["PAIS_NOMBRE"] == 'Palaos') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[134]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[134]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[134]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPanam">

		<h1 class="paisname">Panamá</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Panama.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[135]["PAIS_NOMBRE"] == 'Panama') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[135]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[135]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[135]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPapuNuevGuine">

		<h1 class="paisname">Papúa Nueva Guinea</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/PapuaNuevaGuinea.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[136]["PAIS_NOMBRE"] == 'Papua Nueva Guinea') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[136]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[136]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[136]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divParagua">

		<h1 class="paisname">Paraguay</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Paraguay.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[137]["PAIS_NOMBRE"] == 'Paraguay') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[137]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[137]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[137]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPeru">

		<h1 class="paisname">Perú</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Peru.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[138]["PAIS_NOMBRE"] == 'Peru') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[138]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[138]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[138]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPoloni">

		<h1 class="paisname">Polonia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Polonia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[139]["PAIS_NOMBRE"] == 'Polonia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[139]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[139]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[139]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divPortuga">

		<h1 class="paisname">Portugal</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Portugal.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[140]["PAIS_NOMBRE"] == 'Portugal') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[140]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[140]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[140]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divReinUnid">

		<h1 class="paisname">Reino Unido</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/ReinoUnido.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[141]["PAIS_NOMBRE"] == 'Reino Unido') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[141]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[141]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[141]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRepublicCentroafrican">

		<h1 class="paisname">República Centroafricana</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/RepublicaCentroafricana.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[142]["PAIS_NOMBRE"] == 'Republica Centroafricana') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[142]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[142]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[142]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRepublicChec">

		<h1 class="paisname">República Checa</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/RepublicaCheca.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[143]["PAIS_NOMBRE"] == 'Republica Checa') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[143]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[143]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[143]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRepublicCong">

		<h1 class="paisname">República del Congo</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/RepublicadelCongo.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[144]["PAIS_NOMBRE"] == 'Republica del Congo') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[144]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[144]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[144]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRepublicDemocraticCong">

		<h1 class="paisname">República Democrática del Congo</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/RepublicaDemocraticadelCongo.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[145]["PAIS_NOMBRE"] == 'Republica Democratica del Congo') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[145]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[145]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[145]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRepublicDominican">

		<h1 class="paisname">República Dominicana</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/RepublicaDominicana.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[146]["PAIS_NOMBRE"] == 'Republica Dominicana') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[146]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[146]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[146]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRuand">

		<h1 class="paisname">Ruanda</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Ruanda.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[147]["PAIS_NOMBRE"] == 'Ruanda') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[147]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[147]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[147]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRumani">

		<h1 class="paisname">Rumanía</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Rumania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[148]["PAIS_NOMBRE"] == 'Rumania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[148]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[148]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[148]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divRusi">

		<h1 class="paisname">Rusia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Rusia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[149]["PAIS_NOMBRE"] == 'Rusia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[149]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[149]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[149]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSamo">

		<h1 class="paisname">Samoa</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Samoa.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[150]["PAIS_NOMBRE"] == 'Samoa') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[150]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[150]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[150]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSaCristobaNieve">

		<h1 class="paisname">San Cristóbal y Nieves</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SanCristobalyNieves.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[151]["PAIS_NOMBRE"] == 'San Cristobal y Nieves') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[151]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[151]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[151]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSanMarin">

		<h1 class="paisname">San Marino</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SanMarino.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[152]["PAIS_NOMBRE"] == 'San Marino') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[152]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[152]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[152]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSaVicentGranadina">

		<h1 class="paisname">San Vicente y las Granadinas</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SanVicenteylasGranadinas.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[153]["PAIS_NOMBRE"] == 'San Vicente y las Granadinas') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[153]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[153]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[153]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSantLuci">

		<h1 class="paisname">Santa Lucía</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SantaLucia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[154]["PAIS_NOMBRE"] == 'Santa Lucia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[154]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[154]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[154]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSantTomePrincip">

		<h1 class="paisname">Santo Tomé y Príncipe</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SantoTomeyPrincipe.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[155]["PAIS_NOMBRE"] == 'Santo Tome y Principe') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[155]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[155]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[155]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSenega">

		<h1 class="paisname">Senegal</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Senegal.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[156]["PAIS_NOMBRE"] == 'Senegal') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[156]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[156]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[156]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSerbi">

		<h1 class="paisname">Serbia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Serbia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[157]["PAIS_NOMBRE"] == 'Serbia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[157]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[157]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[157]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSeychelle">

		<h1 class="paisname">Seychelles</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Seychelles.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[158]["PAIS_NOMBRE"] == 'Seychelles') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[158]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[158]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[158]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSierrLeon">

		<h1 class="paisname">Sierra Leona</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SierraLeona.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[159]["PAIS_NOMBRE"] == 'Sierra Leona') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[159]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[159]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[159]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSingapu">

		<h1 class="paisname">Singapur</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Singapore.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[160]["PAIS_NOMBRE"] == 'Singapur') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[160]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[160]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[160]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSiri">

		<h1 class="paisname">Siria</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Siria.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[161]["PAIS_NOMBRE"] == 'Siria') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[161]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[161]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[161]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSomali">

		<h1 class="paisname">Somalia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Somalia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[162]["PAIS_NOMBRE"] == 'Somalia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[162]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[162]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[162]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSrLank">

		<h1 class="paisname">Sri Lanka</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SriLanka.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[163]["PAIS_NOMBRE"] == 'Sri Lanka') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[163]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[163]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[163]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSuazilandi">

		<h1 class="paisname">Suazilandia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Suazilandia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[164]["PAIS_NOMBRE"] == 'Suazilandia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[164]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[164]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[164]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSudafric">

		<h1 class="paisname">Sudáfrica</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Sudafrica.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[165]["PAIS_NOMBRE"] == 'Sudafrica') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[165]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[165]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[165]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSudaSu">

		<h1 class="paisname">Sudán del Sur</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/SudandelSur.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[166]["PAIS_NOMBRE"] == 'Sudan del Sur') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[166]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[166]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[166]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSuda">

		<h1 class="paisname">Sudán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Sudan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[167]["PAIS_NOMBRE"] == 'Sudan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[167]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[167]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[167]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSueci">

		<h1 class="paisname">Suecia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Suecia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[168]["PAIS_NOMBRE"] == 'Suecia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[168]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[168]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[168]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSuiz">

		<h1 class="paisname">Suiza</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Suiza.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[169]["PAIS_NOMBRE"] == 'Suiza') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[169]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[169]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[169]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divSurina">

		<h1 class="paisname">Surinam</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Surinam.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[170]["PAIS_NOMBRE"] == 'Surinam') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[170]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[170]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[170]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divTailandi">

		<h1 class="paisname">Tailandia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Tailandia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[171]["PAIS_NOMBRE"] == 'Tailandia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[171]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[171]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[171]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>

		</div>
	</div>

	<div class="divTanzani">

		<h1 class="paisname">Tanzania</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Tanzania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[172]["PAIS_NOMBRE"] == 'Tanzania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[172]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[172]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[172]["MUERTOS"].'</h1>
						</div>

					';

				}

			 ?>


		</div>
	</div>

	<div class="divTayikista">

		<h1 class="paisname">Tayikistán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Tayikistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[173]["PAIS_NOMBRE"] == 'Tayikistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[173]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[173]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[173]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTimoOrienta">

		<h1 class="paisname">Timor Oriental</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/TimorOriental.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[174]["PAIS_NOMBRE"] == 'Timor Oriental') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[174]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[174]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[174]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTog">

		<h1 class="paisname">Togo</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Togo.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[175]["PAIS_NOMBRE"] == 'Togo') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[175]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[175]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[175]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTong">

		<h1 class="paisname">Tonga</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Tonga.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[176]["PAIS_NOMBRE"] == 'Tonga') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[176]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[176]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[176]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTrinidaTobag">

		<h1 class="paisname">Trinidad y Tobago</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/TrinidadyTobago.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[177]["PAIS_NOMBRE"] == 'Trinidad y Tobago') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[177]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[177]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[177]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTune">

		<h1 class="paisname">Túnez</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Tunez.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[178]["PAIS_NOMBRE"] == 'Tunez') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[178]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[178]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[178]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTurkmenista">

		<h1 class="paisname">Turkmenistán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Turkmenistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[179]["PAIS_NOMBRE"] == 'Turkmenistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[179]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[179]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[179]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTurqui">

		<h1 class="paisname">Turquía</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Turquia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[180]["PAIS_NOMBRE"] == 'Turquia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[180]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[180]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[180]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divTuval">

		<h1 class="paisname">Tuvalu</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Tuvalu.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[181]["PAIS_NOMBRE"] == 'Tuvalu') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[181]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[181]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[181]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divUcrani">

		<h1 class="paisname">Ucrania</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Ucrania.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[182]["PAIS_NOMBRE"] == 'Ucrania') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[182]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[182]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[182]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divUgand">

		<h1 class="paisname">Uganda</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Uganda.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[183]["PAIS_NOMBRE"] == 'Uganda') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[183]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[183]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[183]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divUrugua">

		<h1 class="paisname">Uruguay</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Uruguay.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[184]["PAIS_NOMBRE"] == 'Uruguay') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[184]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[184]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[184]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>


		</div>
	</div>

	<div class="divUzbekista">

		<h1 class="paisname">Uzbekistán</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Uzbekistan.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[185]["PAIS_NOMBRE"] == 'Uzbekistan') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[185]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[185]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[185]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divVanuat">

		<h1 class="paisname">Vanuatu</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Vanuatu.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[186]["PAIS_NOMBRE"] == 'Vanuatu') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[186]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[186]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[186]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divVenezuel">

		<h1 class="paisname">Venezuela</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Venezuela.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[187]["PAIS_NOMBRE"] == 'Venezuela') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[187]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[187]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[187]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divVietna">

		<h1 class="paisname">Vietnam</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Vietnam.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[188]["PAIS_NOMBRE"] == 'Vietnam') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[188]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[188]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[188]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divYeme">

		<h1 class="paisname">Yemen</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Yemen.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[189]["PAIS_NOMBRE"] == 'Yemen') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[189]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[189]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[189]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divYibut">

		<h1 class="paisname">Yibuti</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Yibuti.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[190]["PAIS_NOMBRE"] == 'Yibuti') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[190]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[190]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[190]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divZambi">

		<h1 class="paisname">Zambia</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Zambia.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[191]["PAIS_NOMBRE"] == 'Zambia') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[191]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[191]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[191]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>

	<div class="divZimbabu">

		<h1 class="paisname">Zimbabue</h1>

		<img id="impais" class="impais" src="vista/img/default/paises/Zimbabwe.png" style="margin: 10px;" width="30%;" class="logo">

		<div class="backinf">

			<?php 

				if ($mostrarPais[192]["PAIS_NOMBRE"] == 'Zimbabue') {

					echo '

						<div class="conf">
							<p>Confirmados</p><br><br><h1>'.$mostrarPais[192]["CONFIRMADOS"].'</h1>
						</div>
						<div class="recu">
							<p>Recuperadas</p><br><br><h1>'.$mostrarPais[192]["RECUPERADOS"].'</h1>
						</div>
						<div class="muer">
							<p>Muertos</p><br><br><h1>'.$mostrarPais[192]["MUERTOS"].'</h1>
						</div>

					';

				}

			?>

		</div>
	</div>
</div>