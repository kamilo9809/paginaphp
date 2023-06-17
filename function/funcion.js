//declaracion de variables dom
var editrow=document.querySelectorAll('.editrow');
let modal = document.querySelector('.modal');
let btnCancelar = document.querySelector('.cancelar');
let btnAceptar = document.querySelector('.aceptar');
let tx = document.querySelectorAll('.tx')
let tareaSeleccionada=""; 

//recorre todos los elementos de la lista para poder editar el seleccionado
editrow.forEach((editrow, index) => {
    editrow.addEventListener('click', () => {
        tareaSeleccionada = tx[index].textContent;
        //abre la ventana modal del elemento seleccionado en la lista
        modal.showModal();
        //validacion que si se haya elegido el seleccionado
        console.log(tareaSeleccionada);
    });
});

//actualizacion de texto
btnAceptar.addEventListener('click',()=>{
    //cierra la ventana modal
    //la logica de la actualizacion esta en el codigo php en el documento update.php
    modal.close();
});

//cancelacion de edicion de texto
btnCancelar.addEventListener('click',()=>{
    //cierra la ventana modal
    modal.close()
});

//este archivo de funcion js es para que se pueda abrir una ventana modal que me permita tener 2 opciones una para
//agregar la edicion o la otra para que se pueda cancelar