

//OCULTAR O MOSTRAR RECUPERACION DE CONTRASEÑA---
function mostrarR(){
    document.getElementById('recuperarForm').style.display ='block';
    document.getElementById('loginForm').style.display='none';
}
function ocultarR(){
    document.getElementById('loginForm').style.display ='block';
    document.getElementById('recuperarForm').style.display ='none';

    
}

//Creacion de Fragmento para los select pais


const paises = [
    {code:"Ar", name:"Argentina"},
    {code:"Bra", name:"Brazil"},
    {code:"Pa", name:"Paraguay"},
    {code:"Uru", name:"Uruguay"},
    {code:"Bo", name:"Bolivia"},
    {code:"Ve", name:"Venezuela"},
]

const selectPais = document.getElementById("nacionalidad");
const frag = document.createDocumentFragment();

paises.forEach(function (pais) {
    const option = document.createElement("option");
    option.value = pais.code;
    option.textContent = pais.name;
    frag.appendChild(option);
});

selectPais.appendChild(frag);