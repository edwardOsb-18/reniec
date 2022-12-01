console.log("edward")


const botonW=document.getElementById("botonWeb")

const boton=document.getElementById("boton")


if(botonW!==null || boton!==null){


if(boton!==null){

boton.addEventListener("click", (e) => {
    e.preventDefault()
    const edw=document.querySelector(".edward")
    navigator.clipboard
        .writeText(edw.textContent)
        .then(() => console.log("texto copiado"))
        .catch((e) => console.log(e));
});

}

else if(botonW!==null){
botonW.addEventListener("click", (e) => {
    e.preventDefault()
    const edw=document.querySelector(".santamaria")
    navigator.clipboard
        .writeText(edw.textContent)
        .then(() => console.log("texto copiado"))
        .catch((e) => console.log(e));
});
}
}
