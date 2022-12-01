<?php
$enviar=$_POST['e'];
$singlab=$_POST['singlab'];
$singlab_web=$_POST['singlab_web'];

$orden=$_POST['orden1']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
	<style>
		
*{font-family: 'Merriweather', serif;
	box-sizing: border-box;
margin: 0;
}
.e_correo{     color: rgb(24, 31, 95);
	font-size:14px;
}
.red{color: red;}
.yellow{background-color: yellow;}
.siglab{
    margin: 1.5rem;
}
form{
    margin-top: 1rem;

}
.correo,.s_sexo,.web,.sede,.s_boton{
    margin: 1rem 0;
    display: flex;
}

.s_orden,.s_apellido,.s_login,.s_nombre{
    flex: 1;
    display: flex;
}

.l_orden,.i_orden{
    flex: .3;
}
.l_orden{
    flex: .1;
}
.dni_1{
    margin: 1.5rem;
}
.s_w{
    margin: 1.5rem;
}

.s_d{
    margin: 1.5rem;
}
.l_s{
    margin-right: 1rem;
}
.s_sede{
    margin-right: 1rem;
}

input[type="reset"],.circulo{
    margin-left: 1rem;
}

.uno,.dos,.cero{
    margin: 1rem 0;
    display: flex;
}
.a{margin:1rem 0;}

.d_cliente,.d_email,.uno_nombre,.uno_apellido,.uno_grupo,.uno_sexo{
    flex: 1;
    display: flex;
}
.ss{margin-right: 1rem;}
	</style>
</head>

<body>
	<div class="dni_1">
<h2>Busquedad por DNI</h2>
<form method="post">
<label for="dni">DNI:</label>
	<input type="text" class="dni" id="dni" maxlength="8" name="dni">
    <input type="submit" value="enviar" name="e">
	<input type="reset">
</form>

<?php

if($enviar==="enviar"){
$a=$_POST['dni'];



$dni="https://dniruc.apisperu.com/api/v1/dni/$a?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImVkaHVzYjRAZ21haWwuY29tIn0.YWELe9XnzswcO3UFG4MqKDGO0Bx88O3a51psvWjJFsE";

$resultado=file_get_contents($dni);
$item=explode(",",$resultado);
echo substr($item[0],1);
echo "<br>";
echo $item[1];
echo "<br>";
echo $item[2];
echo "<br>";
echo $item[3];
}
?>


</div>

<hr>

<div class="siglab">
<h2>Creacion de ususario SIGLAB</h2>

<p class="a">NOTA: <strong>Max Salud Chiclayo</strong>=MEDLAB MAXSALUD CENTRAL,
<strong>Clínica Max Salud</strong>  =MEDLAB MAXSALUD CENTRAL,
<strong>Medlab-arequipa</strong>=MEDLAB C.E.E.N (arequipa)(021)
</p>
<form method="post">
	<div class="s_sexo">
		
<label class="l_s" for="">Sexo:</label>

<input checked type="radio" id="male" name="sexo" value="male">

  <label for="male">Masculino</label>
   <input  class="circulo" type="radio" id="female" name="sexo" value="female">
   <label for="female">Femenino</label>
 
  </div>
<div class="correo">
	<div class="s_orden">
<label class="l_orden" for="num_orden">#Orden:</label>
<input class="i_orden" type="text" name="num_orden" id="num_orden">
</div>
<div class="s_login">
<label class="l_orden" for="login">#Login</label>
<input class="i_orden" type="text" maxlength="7" name="login" id="login">

</div>
</div>

<!-- web	 -->

<div class="web">
<div class="s_nombre">
<label class="l_orden" for="nombre">Nombre:</label>
	<input class="i_orden" type="text" class="dni" id="nombre" name="nombre_1">
	</div>
	<div class="s_apellido">

<label class="l_orden" for="apellido">Apellido:</label>
	<input class="i_orden" type="text" class="dni" id="apellido" name="apellido">

	</div>
</div>


<div class="sede">
<div class="s_sede">
	<label  class="l_orden" for="n_sede">#Sede:</label>
	<select class="i_orden" id="n_sede" name="n_sede">
	  <option value='001 "MEDLAB PRINCIPAL"'>001</option>
	  <option value='045 "MEDLAB DOMICILIOS"'>045</option>
	  <option value='005 "ESPECIALIDADES MEDICAS"'>005</option>
	  <option value='047 "CLINICA MONTEFIORI"'>047</option>
	  <option value='021 "MEDLAB C.E.E.N.(AREQUIPA)"'>021</option>

	  <option value='123 "PRIMAVERA-TRUJILLO"'>123</option>
	  <option value='078 "REFERENCIA CHICLAYO"'>078</option>
	  <option value='125 "SALUD PRIMAVERA SEDE CHIMBOTE"'>125</option>
	  <option value='096 "GREGORIO ESCOBEDO"'>096</option>
	  <option value='073 "HOSPITAL DEL NIÑO"'>073</option>

	  <option value='128 "CLINICA PROVIDENCIA"'>128</option>
	  <option value='127 "COMANDANTE ESPINAR"'>127</option>
	  <option value='098 "CONCEBIR TRUJILLO"'>098</option>
	  <option value='126 "MAFRE SURCO"'>126</option>
	  <option value='029 "MEDAVAN MAGDALENA"'>029</option>

	  <option value='066 "MEDLAB AREQUIPA"'>066</option>
	  <option value='028 "MEDLAB COLLIQUE"'>028</option>
	  <option value='046 "MEDLAB INCOR"'>046</option>
	  <option value='099 "SAN FRANCISCO DE ASIS"'>099</option>
	  <option value='065 "REFERENCIA LIMA"'>065</option>
	  <option value='041 "MEDLAB MAXSALUD CENTRAL"'>041</option>

	</select>
	</div>
	<div class="s_perfil">

	<label class="l_orden" for="sede">#Perfil:</label>
	<select class="i_orden" id="n_perfil" name="n_perfil">
	  <option value='36 "Flebotomista" '>36</option>
	  <option value='39 "Flebotomista y Analista Técnico"'>39</option>
	  <option value='11 "Domicilios/call center"'>11</option>
	  <option value='26 "Control de muestras"'>26</option>
	  <option value="MEDLAB LAS PALMERAS">20</option>


	</select>

	</div>




	
	</div>

	<div class="s_boton">
    <input type="submit" value="enviar" name="singlab">
	<input type="reset">
	</div>
</form>

<?php

if($singlab==="enviar"){
$s_orden=$_POST['num_orden'];
$s_login=$_POST['login'];


	$n_nombre=ucfirst(strtolower( $_POST['nombre_1']));      
$n_apellido=ucfirst(strtolower( $_POST['apellido']));    
$n_sexo=$_POST['sexo'];
$n_sede=$_POST['n_sede'];
$perfil=$_POST['n_perfil'];

if($n_sexo=="male"){

if($perfil==='11 "Domicilios/call center"'){

	echo"<div class='e_correo'>
	<p >Asunto: (SIGLAB)  ACCESOS  SERVICE DESK TICKET: $s_orden TERMINADO<br>
	<b>Estimado Sr. $n_nombre $n_apellido</b><br>
	A continuación le enviamos sus credenciales para el acceso al sistema <span class='red'>SIGLAB.</span> </p><br>
	 
	<p>Usuario:&#160;$s_login</p>
	<p>Pass:&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;pass2022</p><br>
	 
	<p>Por medidas de seguridad se recomienda modificar la clave al ingresar, tomando en consideración los siguientes parámetros:</p><br>
	 
	<p>• La contraseña deberá tener<span class='yellow'> 08 caracteres exactos</span></p>
	<p>• La contraseña deberá contener mínimo 01 numero</p><br><br>
	 
	<p><b>Importante:</b> Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.</p></div><br>";





	echo 'Se procedió a crear el usuario SIGLAB como  SIGLAWEB al  Sr.'.$n_nombre.'  '.$n_apellido.'. Se les asigno la localidad  004 "Medlab Domicilios"  y el perfil 11  "Domicilios/call center".  Las credenciales han sido enviadas a la cuenta de correo personal del colaborador.<br>
	Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.';
	echo "<br>";
	
	
	


}






else{

	echo"<div class='e_correo'>
	<p >Asunto: (SIGLAB)  ACCESOS  SERVICE DESK TICKET: $s_orden TERMINADO<br>
	<b>Estimado Sr. $n_nombre $n_apellido</b><br>
	A continuación le enviamos sus credenciales para el acceso al sistema <span class='red'>SIGLAB.</span> </p><br>
	 
	<p>Usuario:&#160;$s_login</p>
	<p>Pass:&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;pass2022</p><br>
	 
	<p>Por medidas de seguridad se recomienda modificar la clave al ingresar, tomando en consideración los siguientes parámetros:</p><br>
	 
	<p>• La contraseña deberá tener<span class='yellow'> 08 caracteres exactos</span></p>
	<p>• La contraseña deberá contener mínimo 01 numero</p><br><br>
	 
	<p><b>Importante:</b> Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.</p></div><br>";








	echo 'Se procedió a crear el usuario SIGLAB al Sr.'. $n_nombre.' '. $n_apellido.'. Se les asigno la localidad '. $n_sede .'  y el perfil '.$perfil.'  Las credenciales han sido enviadas a la cuenta de correo personal del colaborador.<br>
	Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.';
	echo "<br>";}}
	
	else{
		if($perfil==='11 "Domicilios/call center"'){

			echo"<div class='e_correo'>
			<p >Asunto: (SIGLAB)  ACCESOS  SERVICE DESK TICKET: $s_orden TERMINADO<br>
			<b>Estimada Srta. $n_nombre $n_apellido</b><br>
			A continuación le enviamos sus credenciales para el acceso al sistema <span class='red'>SIGLAB.</span> </p><br>
			 
			<p>Usuario:&#160;$s_login</p>
			<p>Pass:&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;pass2022</p><br>
			 
			<p>Por medidas de seguridad se recomienda modificar la clave al ingresar, tomando en consideración los siguientes parámetros:</p><br>
			 
			<p>• La contraseña deberá tener<span class='yellow'> 08 caracteres exactos</span></p>
			<p>• La contraseña deberá contener mínimo 01 numero</p><br><br>
			 
			<p><b>Importante:</b> Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.</p></div><br>";
		
		





			echo 'Se procedió a crear el usuario SIGLAB como  SIGLAWEB a la  Srta.'.$n_nombre.'  '.$n_apellido.'. Se les asigno la localidad  004 "Medlab Domicilios"  y el perfil 11  "Domicilios/call center".  Las credenciales han sido enviadas a la cuenta de correo personal del colaborador.<br>
			Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.';
			
			echo "<br>";
			
		
		
		}



	
			



		else{




			echo"<div class='e_correo'>
			<p >Asunto: (SIGLAB)  ACCESOS  SERVICE DESK TICKET: $s_orden TERMINADO<br>
			<b>Estimada Srta. $n_nombre $n_apellido</b><br>
			A continuación le enviamos sus credenciales para el acceso al sistema <span class='red'>SIGLAB.</span> </p><br>
			 
			<p>Usuario:&#160;$s_login</p>
			<p>Pass:&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;pass2022</p><br>
			 
			<p>Por medidas de seguridad se recomienda modificar la clave al ingresar, tomando en consideración los siguientes parámetros:</p><br>
			 
			<p>• La contraseña deberá tener<span class='yellow'> 08 caracteres exactos</span></p>
			<p>• La contraseña deberá contener mínimo 01 numero</p><br><br>
			 
			<p><b>Importante:</b> Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.</p></div><br>";
			

		echo 'Se procedió a crear el usuario SIGLAB a la  Srta.'. $n_nombre.' '. $n_apellido.'. Se les asigno la localidad '. $n_sede .'  y el perfil '.$perfil.'  Las credenciales han sido enviadas a la cuenta de correo personal del colaborador.<br>
		Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.';}
		echo "<br>";
	}

}
?>

</div>
<hr>
<div class="s_w">
<h2>Cracion SIGLAB WEB</h2>

<form method="post" id="siglaWeb">
	<div class="cero">
	<div class="uno_sexo">
	<div class="ss">
	<label for="">Sexo:</label>
</div>
<input checked type="radio" id="male" name="sexo_web" value="male">
  <label for="male">Masculino</label>
  <input class="circulo" type="radio" id="female" name="sexo_web" value="female">
  <label for="female">Femenino</label><br>
  </div>
	  <div class="uno_nombre">
<label class="l_orden" for="nombre">Nombre:</label>
	<input class="i_orden" type="text" class="dni" id="nombre" name="nombre_web">

	</div>
	</div>
	<div class="uno">
	<div class="uno_apellido">
<label class="l_orden" for="apellido">Apellido:</label>
	<input class="i_orden" type="text"  id="apellido" name="apellido_web">
</div>

<div class="uno_grupo">
	<label class="l_orden" for="grupo">Grupo:</label>
	<input class="i_orden" type="text" id="grupo" name="grupo_web">
</div>
	</div>

	<div class="dos">
	<div class="d_cliente">
	<label class="l_orden" for="grupo">Cliente:</label>

	<input class="i_orden" type="text" id="grupo" name="cliente_web">
</div>
<div class="d_email">
	<label class="l_orden" for="grupo">Email:</label>
	<input class="i_orden" type="email" id="grupo" name="email_web">
	</div>
	</div>
	<!-- <label for="n_sede">#sede:</label>
	<select id="n_sede" name="n_sede">
	  <option value='001 "MEDLAB PRINCIPAL"'>001</option>
	  <option value='045 "MEDLAB DOMICILIOS"'>045</option>
	  <option value="ESPECIALIDADES MEDICAS">11</option>
	  <option value="MEDLAB CHACARILLA">21</option>
	  <option value="MEDLAB LAS PALMERAS">M31</option>


	</select>


	<label for="sede">#perfil:</label>
	<select id="n_perfil" name="n_perfil">
	  <option value='36 "Flebotomista" '>36</option>
	  <option value='39 "Flebotomista y Analista Técnico"'>39</option>
	  <option value='11 "Domicilios/call center"'>11</option>
	  <option value="MEDLAB CHACARILLA">MEDLAB CHACARILLA</option>
	  <option value="MEDLAB LAS PALMERAS">MEDLAB LAS PALMERAS</option>


	</select> -->






	



    <input type="submit" value="enviar" name="singlab_web">
	<input type="reset">
</form>



<br>


<?php

if($singlab_web==="enviar"){
	$nombre_web=ucfirst(strtolower( $_POST['nombre_web']));    
$apellido_web=ucfirst(strtolower( $_POST['apellido_web'])); 
$sexo_web=$_POST['sexo_web'];
$grupo_web=$_POST['grupo_web'];
$cliente_web=$_POST['cliente_web'];
$email_web=strtolower( $_POST['email_web']); 

if($sexo_web=="male"){

	echo "<p class='santamaria'>Se creo el grupo $grupo_web para el CL $cliente_web  , dentro del cual se creó el acceso para el usuario solicitado para el  Sr. $nombre_web $apellido_web . Las credenciales le llegarán a la cuenta de correo brindada [$email_web].<br>
	Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.</p>";
	
	echo "<br>";

}



	else{
	echo "<p class='santamaria'>Se creo el grupo $grupo_web para la CL $cliente_web  , dentro del cual se creó el acceso para el usuario solicitado para la  Srta. $nombre_web $apellido_web . Las credenciales le llegarán a la cuenta de correo brindada [$email_web].<br>
	Se le recuerda que cada colaborador es responsable directo del uso adecuado de sus credenciales de acceso al sistema de la compañía, siendo estas de carácter personal e intransferible. SYNLAB Perú compromete a todo su personal en asegurar la privacidad y seguridad de la información que se maneja.</p>";
	echo "<br>";
	}
	echo"<a href='#' id='botonWeb' class='boton'> Copiar</a>";
}


?>


</div>
<hr>



<div class="s_d">
<h2>Correción demografica</h2>
<form method="post">
<label for="orden">#Orden:</label>
	<input type="text" class="dni" id="orden" name="orden"><br>
	<input checked type="radio" id="male" name="gender" value="sexo">
  <label for="male">Sexo</label><br>
  <input type="radio" id="female" name="gender" value="nombre">
  <label for="female">Nombre</label><br>
  <input type="radio" id="other" name="gender" value="apellido">
  <label for="other">Apellido</label><br>

  <input type="radio" id="dni_1" name="gender" value="nro. de documento">
  <label for="dni_1"> Nro. DOC</label><br>

  <input type="radio" id="fn_1" name="gender" value="fecha de nacimiento y edad">
  <label for="fn_1">FN y edad</label><br>

  <input type="radio" id="fn_2" name="gender" value="desvinculo dni mal asociado">
  <label for="fn_2">Cruce de información</label><br><br>
 
    <input type="submit" value="enviar" name="orden1">
	<input type="reset">
</form>




<br>





<?php




if($orden==="enviar"){
	$modificacion=strtolower( $_POST['gender']);
	$numero=$_POST['orden'];

if($modificacion=="nro. de documento"){

	echo"<p class='edward'> Se corrigió $modificacion del paciente asociado a orden # $numero. Se valido información con fuente RENIEC. Verificar nuevamente por favor.<br>
	Se le recuerda mantener la confidencialidad en el tratamiento de los datos personales de nuestros pacientes/clientes, conforme a la normativa peruana vigente Ley 29733 de Protección de Datos Personales, la misma que tiene por objeto garantizar el derecho fundamental de las personas a la protección de su privacidad.</p>";
	echo "<br>";

}

else if($modificacion=="fecha de nacimiento y edad"){

echo " <p class='edward'> Se corrigió $modificacion del paciente asociado a orden # $numero. Se valido información con fuente ESSALUD. Verificar nuevamente por favor.<br>
Se le recuerda mantener la confidencialidad en el tratamiento de los datos personales de nuestros pacientes/clientes, conforme a la normativa peruana vigente Ley 29733 de Protección de Datos Personales, la misma que tiene por objeto garantizar el derecho fundamental de las personas a la protección de su privacidad.</p>";
echo "<br>";

}


else if($modificacion=="desvinculo dni mal asociado"){
	echo " <p class='edward'> Se $modificacion. Se corrigió nro. de documento de paciente asociado a orden # $numero. Se valido información con fuente RENIEC. Verificar nuevamente por favor.<br>
	Se le recuerda mantener la confidencialidad en el tratamiento de los datos personales de nuestros pacientes/clientes, conforme a la normativa peruana vigente Ley 29733 de Protección de Datos Personales, la misma que tiene por objeto garantizar el derecho fundamental de las personas a la protección de su privacidad.</p>";
	echo "<br>";
	

}


else{

echo "<p class='edward'>Se corrigió  $modificacion del paciente asociado a la  orden # $numero .Verificar nuevamente por favor.<br>
Se le recuerda mantener la confidencialidad en el tratamiento de los datos personales de nuestros pacientes/clientes, conforme a la normativa peruana vigente Ley 29733 de Protección de Datos Personales, la misma que tiene por objeto garantizar el derecho fundamental de las personas a la protección de su privacidad.</p>";
echo "<br>";
	}
	echo"<a href='#' id='boton' class='boton'> Copiar</a>";
}


?>


</div>
<script src="app.js"></script>
</body>
</html>


