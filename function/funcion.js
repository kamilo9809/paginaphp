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
        modal.showModal();
        console.log(tareaSeleccionada);
    });
});

//actualizacion de texto
btnAceptar.addEventListener('click',()=>{
    modal.close();
});

//cancelacion de edicion de texto
btnCancelar.addEventListener('click',()=>{
    modal.close()
});
