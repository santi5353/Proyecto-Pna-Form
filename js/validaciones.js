const formulario = document.getElementById('registerForm');
const inputs = document.querySelectorAll('#registerForm input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
};

const validarFormulario = (e) => {
 switch  (e.target.name){
    case  "dni":
   
    break;
    case  "numTramite":
   
    break;
    case  "ejemplar":
   
    break;
    case  "apellido":
   
    break;
    case  "nombre":
   
    break;
    case  "email":
   
    break;
    case  "email_rep":
   
    break;
 }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);

});



registerForm.addEventListener('submit', (e)=>{
   e.preventDefault();
 });