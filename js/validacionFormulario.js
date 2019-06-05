
function limita(maximoCaracteres) {
var elemento = document.getElementById("txtPuestoSolicitado");
if( (elemento.value.length >= maximoCaracteres) ) {
alert('[ERROR] El numero maximo de caracteres');	
return false;
}
else {
return true;
}
}


function limitaCodigoP(maximoCaracteres) {
var elemento = document.getElementById("txtCodigoPostal");
if( (elemento.value.length >= maximoCaracteres) ) {
alert('[ERROR] El numero maximo de caracteres es 5 para el código postal');	
return false;
}
else {
return true;
}
}

function limitaPeso(maximoCaracteres) {
var elemento = document.getElementById("txtPeso");
if( (elemento.value.length >= maximoCaracteres) ) {
alert('[ERROR] El numero maximo de caracteres es 3 para el peso');	
return false;
}
else {
return true;
}
}


function limitaSueldo(maximoCaracteres) {
var elemento = document.getElementById("txtSueldoAutorizado");
if( (elemento.value.length >= maximoCaracteres) ) {
alert('[ERROR] No puedes llenar este campo, el administrador es el que autoriza los sueldos');	
return false;
}
else {
return true; 
}
}

function soloTexto(elemento) {
	var expresionSoloLetras = /^[A-Z]+$/i;
	if(!expresionSoloLetras.test(elemento)){
		var errorGeneral= '[ERROR] No puedes agregar numeros al campo ';
alert(errorGeneral.concat(elemento));
	return false;
}
} 


function foco(idElemento){
 document.getElementById(idElemento).focus();
}

function validar() {
	var puestoSolicitado = document.getElementById("txtPuestoSolicitado").value;
	var fecha = document.getElementById("txtFechaSolicitud").value;
	var sueldoDeseado = document.getElementById("txtSueldoDeseado").value;
	var sueldoAutorizado = document.getElementById("txtSueldoAutorizado").value;
	
	var apellidoP = document.getElementById("txtApellidoP").value;
	var apellidoM = document.getElementById("txtApellidoM").value;
	var nombre = document.getElementById("txtNombre").value;
	var edad = document.getElementById("txtEdad").value;
	var sexo = document.getElementById("selectSexo").selectIndex;
	var domicilio = document.getElementById("txtDomicilio").value;
	var colonia= document.getElementById("txtColonia").value;
	var municipio = document.getElementById("txtMunicipio").value;
	var codigoP = document.getElementById("txtCodigoPostal").value;
	var telefono = document.getElementById("txtTelefono").value;
	var nacionalidad = document.getElementById("txtNacionalidad").value;
	var lugarNacimiento = document.getElementById("txtLugarNacimiento").value;
	var fechaNacimiento = document.getElementById("txtFechaNacimiento").value;
	var estatura = document.getElementById("txtEstatura").value;
	var peso = document.getElementById("txtPeso").value;
	var correo = document.getElementById("txtCorreo").value;

	var viveCon = document.getElementsByName("radioVive");
	var dependeDe = document.getElementsByName("radioPersonas");
	var estadoCivil = document.getElementsByName("radioEstado");

	var estadoViveCon = false;
	var estadodependeDe = false;
	var estadoEstadoCivil = false;

	//expresiones regulares
	var expresionCorreo = /\w+@\w+\.+[a-z]{3}/;
	var expresionSoloLetras = /^[A-Z]+$/i;
	var expresionTelefono = /^\+\d{2,3}\s\d{3}-\d{3}-\d{4}$/;
	//var expresionFechas= /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
	//var expresionFechas=/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/;
	var expresionFechas= /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[/\\/](19|20)\d{2}$/;



/****************VALIDACION DE CAMPOS INICIALES************************/
/*
if (puestoSolicitado.length<4) {
alert('[ERROR] El numero minimo de caracteres es 4 para el puesto solicitado');
	return false;
}
*/
if (puestoSolicitado==="") {
	alert('[ERROR] debes llenar el campo de puesto solicitado ');
	foco('txtPuestoSolicitado');
	return false;
}

if(!expresionSoloLetras.test(puestoSolicitado)){
alert('[ERROR] No puedes agregar números o caracteres al campo de puesto ');
	foco('txtPuestoSolicitado');
	return false;
}
 
if (fecha==="") {
	alert('[ERROR] debes seleccionar una fecha');
	foco('txtFechaSolicitud');
	return false;
}
/*
if(!expresionFechas.test(fecha)){
alert('[ERROR] La fecha limite permitida es 12/12/9999');
	foco('txtFechaSolicitud');
	return false;
}
*/



if (sueldoDeseado==="") {
	alert('[ERROR] El campo sueldo no debe estar vacio ');
	foco('txtSueldoDeseado');
	return false;
}
if (sueldoDeseado<=100 || sueldoDeseado>=4000) {
	alert('[ERROR] El sueldo base es de 100 pesos y maximo 4000 pesos');
	foco('txtSueldoDeseado');
	return false;
}

/*
if (sueldoAutorizado==="") {
	alert('[ERROR] debes llenar el campo de sueldo deseado ');
	return false;
}*/


if (apellidoP==="") {
	alert('[ERROR] debes llenar el campo de apellido paterno ');
	foco('txtApellidoP');
	return false;
}
if(!expresionSoloLetras.test(apellidoP)){
alert('[ERROR] No puedes agregar números o caracteres especiales al campo de apellido paterno ');
	foco('txtApellidoP');
	return false;
}


if (apellidoM==="") {
	alert('[ERROR] debes llenar el campo de apellido materno ');
	foco('txtApellidoM');
	return false;
}
if(!expresionSoloLetras.test(apellidoM)){
alert('[ERROR] No puedes agregar números o caracteres especiales al campo de apellido materno ');
	foco('txtApellidoM');
	return false;
}


if (nombre==="") {
	alert('[ERROR] debes llenar el campo de nombre ');
	foco('txtNombre');
	return false;
}
if(!expresionSoloLetras.test(nombre)){
alert('[ERROR] No puedes agregar números o caracteres especiales al campo de nombre');
	foco('txtNombre');
	return false;
}

if (edad=="") {
	alert('[ERROR] debes llenar el campo de edad ');
	foco('txtEdad');
	return false;
}
if (edad<=18 || edad>=60) {
alert('[ERROR] La edad para la vacante es de 18 a 60 años');
foco('txtEdad');
	return false;
}

if(domicilio===""){
alert('[ERROR] debes llenar el campo de domicilio');
	foco('txtDomicilio');
	return false;
}

if(colonia===""){
alert('[ERROR] debes llenar el campo de colonia');
foco('txtColonia');
	return false;
}


if(municipio===""){
alert('[ERROR] debes llenar el campo de municipio');
	foco('txtMunicipio');
	return false;
}
if(!expresionSoloLetras.test(municipio)){
alert('[ERROR] No puedes agregar números o caracteres especiales al campo de municipios');
	foco('txtMunicipio');
	return false;
}

if(codigoP===""){
alert('[ERROR] debes llenar el campo de municipio');
foco('txtCodigoPostal');
	return false;
}
if (codigoP.length<5) {
alert('[ERROR] Un codigo postal esta conformado por 5 digitos');
foco('txtCodigoPostal');
	return false;
}
if (codigoP<=0) {
alert('[ERROR] Un codigo postal no contiene digitos negativos');
foco('txtCodigoPostal');
	return false;
}

if(telefono===""){
alert('[ERROR] debes llenar el campo telefono');
foco('txtTelefono');
	return false;
}
if(!expresionTelefono.test(telefono)){
alert('[ERROR] El telefono no sigue un formato correcto');
foco('txtTelefono');
	return false;
}


if(nacionalidad===""){
alert('[ERROR] debes llenar el campo de nacionalidad');
foco('txtNacionalidad');
	return false;
}
if(!expresionSoloLetras.test(nacionalidad)){
alert('[ERROR] No puedes agregar números o caracteres especiales al campo de nacionalidad');
	foco('txtNacionalidad');
	return false;
}

if(lugarNacimiento===""){
alert('[ERROR] debes llenar el campo de lugar de nacimiento');
	foco('txtLugarNacimiento');
	return false;
}
if(!expresionSoloLetras.test(lugarNacimiento)){
alert('[ERROR] No puedes agregar números o caracteres especiales al lugar de nacimiento');
	foco('txtLugarNacimiento');
	return false;
}

if(fechaNacimiento===""){
alert('[ERROR] debes llenar el campo de fecha nacimiento');
	foco('txtLugarNacimiento');
	return false;
}


if(estatura===""){
alert('[ERROR] debes ingresar tu estatura');
foco('txtEstatura');
	return false;
}
if (estatura>5) {
alert('[ERROR] No puedes medir mas de 4 metros');
foco('txtEstatura');
	return false;
}

if(peso===""){
alert('[ERROR] debes ingresar tu peso');
	foco('txtPeso');
	return false;
}
if (peso<=50 || peso>=90) {
alert('[ERROR] Lo siento, el peso promedio es de 50 a 90 kilos para la vacante, se requiere gente agíl');
	foco('txtPeso');
	return false;
}

if(correo===""){
alert('[ERROR] El campo correo no debe estar vacio');
foco('txtCorreo');
	return false;
}

if(!expresionCorreo.test(correo)){
alert('[ERROR] El correo no sigue un formato correcto');
foco('txtCorreo');
	return false;
}





/*******VALIDACIONES DE LA ULTIMA TABLA, LOS RADIO BUTTONS*****/
//chechar cual de las opciones de viveCon fue seleccionado
for (var i = 0; i <viveCon.length; i++) {
	if (viveCon[i].checked) {
		estadoViveCon=true;
		break;
	} 
}

for (var j = 0; j <dependeDe.length; j++) {
	if (dependeDe[j].checked) {
		estadodependeDe = true;
		break;
	} 
}

for (var k = 0; k <estadoCivil.length; k++) {
	if (estadoCivil[k].checked) {
	     estadoEstadoCivil=true;
		break;
	} 
}






if (!estadoViveCon) {
	alert('[ERROR] No has seleccionado ninguna opción de las personas con las que vives');
	document.getElementsByName("radioVive")[0].focus();
	return false;
}

if (!estadodependeDe) {
	alert('[ERROR] No has seleccionado ninguna opción de las personas que dependen de ti');
	//document.getElementsByName("radioPersonas").focus();
	return false;
}

if (!estadoEstadoCivil) {
	alert('[ERROR] No has seleccionado ningún estado civil');
	//document.getElementsByName("radioEstado").focus();
	return false;
}



}


